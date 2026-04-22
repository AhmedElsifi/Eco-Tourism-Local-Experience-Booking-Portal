<?php

class RegionalAuditorModel
{
    private $db;

    public function __construct($db)
    {
        $this->db = $db;
    }

    public function addNewAuditor($user_id, $user_nationality, $total_carbon_offset)
    {
        $this->db->query("INSERT INTO `traveler` (`traveler_id`, `nationality`, `total_carbon_offset`) VALUES ('$user_id', '$user_nationality', '$total_carbon_offset');");
    }

    public function getNumberOfAuditors(): int
    {
        $stmt = $this->db->query("SELECT COUNT(*) as total FROM regional_auditor");
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        return $result['total'];
    }
}

?>