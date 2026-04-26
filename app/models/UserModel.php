<?php

class UserModel
{
    private $db;

    public function __construct()
    {
        global $connect;
        $this->db = $connect;
    }

    public function getUser($id){
        $query = $this->db->query("SELECT * FROM users WHERE user_id = $id");
        return $query->fetch(PDO::FETCH_ASSOC);
    }

    public function addNewUser($user_id, $user_nationality, $total_carbon_offset)
    {
        $this->db->query("INSERT INTO `users` (`traveler_id`, `nationality`, `total_carbon_offset`) VALUES ('$user_id', '$user_nationality', '$total_carbon_offset');");
    }

    public function getNumberOfUsers()
    {
        $stmt = $this->db->query("SELECT COUNT(*) as total FROM users");
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        return $result['total'];
    }
}

?>