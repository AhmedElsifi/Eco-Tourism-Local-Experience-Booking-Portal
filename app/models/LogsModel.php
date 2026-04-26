<?php

class LogsModel
{
    private $db;

    public function __construct($db)
    {
        $this->db = $db;
    }

    public function addNewLog($log_id, $entity_type, $entity_id, $action, $field_changed, $old_value, $new_value, $changed_by, $comments)
    {
        $this->db->query("INSERT INTO `audit_logs` (`log_id`, `entity_type`, `entity_id`, `action`, `field_changed`, `old_value`, `new_value`, `changed_by`, `changed_at`) VALUES ($log_id, $entity_type, $entity_id, $action, $field_changed, $old_value, $new_value, $changed_by, current_timestamp());");
    }

    public function getLog($log_id)
    {
        $query = $this->db->query("SELECT * FROM `audit_logs` WHERE log_id = $log_id");
        return $query->fetch(PDO::FETCH_ASSOC);
    }
    public function getAllAuditLogs()
    {
        $query = $this->db->query("SELECT * FROM `audit_logs`");
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getNumberOfLogs(): int
    {
        $stmt = $this->db->query("SELECT COUNT(*) as total FROM audit_logs");
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        return $result['total'];
    }
}

?>