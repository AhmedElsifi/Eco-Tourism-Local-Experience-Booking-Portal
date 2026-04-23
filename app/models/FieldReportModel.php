<?php

require_once __DIR__ . "/../../core/connection.php";

class FieldReportModel
{
    private $db;

    public function __construct()
    {
        global $connect;
        $this->db = $connect;
    }

    public function getFieldReports($guideId, $limit = 20)
    {
        $stmt = $this->db->prepare("
            SELECT fr.*, t.tour_name 
            FROM field_reports fr
            LEFT JOIN tour t ON fr.tour_id = t.tour_id
            WHERE fr.guide_id = ?
            ORDER BY fr.created_at DESC
            LIMIT ?
        ");
        $stmt->execute([$guideId, $limit]);
        return $stmt->fetchAll();
    }

    public function getFieldReportById($reportId)
    {
        $stmt = $this->db->prepare("
            SELECT fr.*, t.tour_name, u.name as guide_name
            FROM field_reports fr
            LEFT JOIN tour t ON fr.tour_id = t.tour_id
            JOIN users u ON fr.guide_id = u.user_id
            WHERE fr.report_id = ?
        ");
        $stmt->execute([$reportId]);
        return $stmt->fetch();
    }

    public function createFieldReport($guideId, $content, $tourId = null)
    {
        $stmt = $this->db->prepare("
            INSERT INTO field_reports (guide_id, tour_id, content_text)
            VALUES (?, ?, ?)
        ");
        try {
            $stmt->execute([$guideId, $tourId, $content]);
            return ['success' => true, 'report_id' => $this->db->lastInsertId()];
        } catch (Exception $e) {
            return ['success' => false, 'message' => $e->getMessage()];
        }
    }

    public function updateFieldReport($reportId, $content)
    {
        $stmt = $this->db->prepare("
            UPDATE field_reports SET content_text = ? WHERE report_id = ?
        ");
        return $stmt->execute([$content, $reportId]);
    }

    public function deleteFieldReport($reportId, $guideId)
    {
        $stmt = $this->db->prepare("
            DELETE FROM field_reports WHERE report_id = ? AND guide_id = ?
        ");
        return $stmt->execute([$reportId, $guideId]);
    }
}