<?php

class GuideModel
{
    private $db;

    public function __construct($db)
    {
        $this->db = $db;
    }

    public function addNewTraveler($user_id, $user_nationality, $total_carbon_offset)
    {
        $this->db->query("INSERT INTO `traveler` (`traveler_id`, `nationality`, `total_carbon_offset`) VALUES ('$user_id', '$user_nationality', '$total_carbon_offset');");
    }

    public function getNumberOfGuides(): int
    {
        $stmt = $this->db->query("SELECT COUNT(*) as total FROM guide");
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        return $result['total'];
    }
}

?>