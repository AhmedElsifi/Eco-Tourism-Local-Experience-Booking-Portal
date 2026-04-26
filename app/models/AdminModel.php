<?php

require_once __DIR__ . "/../../core/connection.php";

class AdminModel
{
    private $db;

    public function __construct()
    {
        global $connect;
        $this->db = $connect;
    }

    public function getAdminById($adminId)
    {
        $stmt = $this->db->prepare("
            SELECT g.*, u.name, u.email, u.profile_picture_url 
            FROM super_admin a 
            JOIN users u ON a.admin_id = u.user_id 
            WHERE a.admin_id = ?
        ");
        $stmt->execute([$adminId]);
        return $stmt->fetch();
    }


}