<?php

require_once __DIR__ . "/../../core/connection.php";

class WalletModel
{
    private $db;

    public function __construct()
    {
        global $connect;
        $this->db = $connect;
    }

    public function getWallet($guideId)
    {
        $stmt = $this->db->prepare("SELECT * FROM guide_wallet WHERE guide_id = ?");
        $stmt->execute([$guideId]);
        return $stmt->fetch();
    }

    public function getWithdrawalRequests($guideId, $limit = 20)
    {
        $stmt = $this->db->prepare("
            SELECT * FROM withdrawal_requests 
            WHERE guide_id = ?
            ORDER BY requested_at DESC
            LIMIT ?
        ");
        $stmt->execute([$guideId, $limit]);
        return $stmt->fetchAll();
    }

    public function requestWithdrawal($guideId, $amount)
    {
        $wallet = $this->getWallet($guideId);
        
        if (!$wallet || $wallet['available_balance'] < $amount) {
            return ['success' => false, 'message' => 'Insufficient balance'];
        }

        try {
            $this->db->beginTransaction();

            $stmt = $this->db->prepare("
                INSERT INTO withdrawal_requests (guide_id, amount, status)
                VALUES (?, ?, 'pending')
            ");
            $stmt->execute([$guideId, $amount]);

            $stmt = $this->db->prepare("
                UPDATE guide_wallet 
                SET available_balance = available_balance - ?,
                    pending_balance = pending_balance + ?
                WHERE guide_id = ?
            ");
            $stmt->execute([$amount, $amount, $guideId]);

            $this->db->commit();
            return ['success' => true, 'message' => 'Withdrawal request submitted'];
        } catch (Exception $e) {
            $this->db->rollBack();
            return ['success' => false, 'message' => $e->getMessage()];
        }
    }

    public function updatePendingToAvailable($completedAmount)
    {
        $stmt = $this->db->prepare("
            UPDATE guide_wallet 
            SET pending_balance = pending_balance - ?,
                available_balance = available_balance + ?
            WHERE guide_id = ?
        ");
        return $stmt->execute([$completedAmount, $completedAmount, $guideId]);
    }

    public function addToPending($guideId, $amount)
    {
        $stmt = $this->db->prepare("
            UPDATE guide_wallet 
            SET pending_balance = pending_balance + ?
            WHERE guide_id = ?
        ");
        return $stmt->execute([$amount, $guideId]);
    }

    public function clearPendingAndAddToAvailable($guideId, $amount)
    {
        $stmt = $this->db->prepare("
            UPDATE guide_wallet 
            SET pending_balance = pending_balance - ?,
                available_balance = available_balance + ?
            WHERE guide_id = ?
        ");
        return $stmt->execute([$amount, $amount, $guideId]);
    }

    public function initializeWallet($guideId)
    {
        $stmt = $this->db->prepare("
            INSERT INTO guide_wallet (guide_id, pending_balance, available_balance, withdrawn_balance)
            VALUES (?, 0.00, 0.00, 0.00)
        ");
        try {
            $stmt->execute([$guideId]);
            return true;
        } catch (Exception $e) {
            return false;
        }
    }
}