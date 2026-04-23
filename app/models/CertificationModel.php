<?php

require_once __DIR__ . "/../../core/connection.php";

class CertificationModel
{
    private $db;

    public function __construct()
    {
        global $connect;
        $this->db = $connect;
    }

    public function getGuideCertifications($guideId)
    {
        $stmt = $this->db->prepare("
            SELECT * FROM eco_certifications 
            WHERE guide_id = ?
            ORDER BY issue_date DESC
        ");
        $stmt->execute([$guideId]);
        return $stmt->fetchAll();
    }

    public function uploadCertification($guideId, $certificateName, $filePath, $issueDate = null, $expiryDate = null)
    {
        $stmt = $this->db->prepare("
            INSERT INTO eco_certifications 
            (guide_id, certificate_name, file_path, status, issue_date, expiry_date)
            VALUES (?, ?, ?, 'pending', ?, ?)
        ");
        try {
            $stmt->execute([$guideId, $certificateName, $filePath, $issueDate, $expiryDate]);
            return ['success' => true, 'message' => 'Certification uploaded successfully'];
        } catch (Exception $e) {
            return ['success' => false, 'message' => $e->getMessage()];
        }
    }

    public function renewCertification($certId, $newFilePath, $newExpiryDate)
    {
        $stmt = $this->db->prepare("
            UPDATE eco_certifications 
            SET file_path = ?, expiry_date = ?, status = 'pending'
            WHERE id = ?
        ");
        try {
            $stmt->execute([$newFilePath, $newExpiryDate, $certId]);
            return ['success' => true, 'message' => 'Certification renewed successfully'];
        } catch (Exception $e) {
            return ['success' => false, 'message' => $e->getMessage()];
        }
    }

    public function getCertificationById($certId)
    {
        $stmt = $this->db->prepare("SELECT * FROM eco_certifications WHERE id = ?");
        $stmt->execute([$certId]);
        return $stmt->fetch();
    }

    public function getLanguageCertifications($guideId)
    {
        $stmt = $this->db->prepare("
            SELECT lc.*, l.language_name
            FROM language_certifications lc
            JOIN languages l ON lc.language_id = l.language_id
            WHERE lc.guide_id = ?
            ORDER BY lc.issue_date DESC
        ");
        $stmt->execute([$guideId]);
        return $stmt->fetchAll();
    }

    public function uploadLanguageCertification($guideId, $languageId, $certificateName, $filePath, $issueDate = null, $expiryDate = null)
    {
        $stmt = $this->db->prepare("
            INSERT INTO language_certifications 
            (guide_id, language_id, certificate_name, file_path, status, issue_date, expiry_date)
            VALUES (?, ?, ?, ?, 'pending', ?, ?)
        ");
        try {
            $stmt->execute([$guideId, $languageId, $certificateName, $filePath, $issueDate, $expiryDate]);
            return ['success' => true, 'message' => 'Language certification uploaded'];
        } catch (Exception $e) {
            return ['success' => false, 'message' => $e->getMessage()];
        }
    }

    public function getPeerReviewsForLanguage($guideId, $languageId)
    {
        $stmt = $this->db->prepare("
            SELECT gl.*, u.name as verified_by_name
            FROM guide_languages gl
            LEFT JOIN users u ON gl.verified_by = u.user_id
            WHERE gl.guide_id = ? AND gl.language_id = ?
        ");
        $stmt->execute([$guideId, $languageId]);
        return $stmt->fetch();
    }

    public function getLanguages()
    {
        $stmt = $this->db->query("SELECT * FROM languages ORDER BY language_name");
        return $stmt->fetchAll();
    }

    public function getExpiringCertifications($guideId, $days = 30)
    {
        $stmt = $this->db->prepare("
            SELECT * FROM eco_certifications 
            WHERE guide_id = ? 
            AND expiry_date IS NOT NULL 
            AND expiry_date <= DATE_ADD(CURDATE(), INTERVAL ? DAY)
            AND status = 'verified'
        ");
        $stmt->execute([$guideId, $days]);
        return $stmt->fetchAll();
    }
}