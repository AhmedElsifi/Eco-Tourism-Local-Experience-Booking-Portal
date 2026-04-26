<?php

class PlatformSettingsModel
{
    private $db;

    public function __construct()
    {
        global $connect;
        $this->db = $connect;
    }

    public function getPlatformSettings()
    {
        $query = $this->db->query("SELECT * FROM platform_settings ORDER BY updated_at DESC LIMIT 1");
        return $query->fetch(PDO::FETCH_ASSOC);
    }

    public function updatePlatformSettings($id, $platform_fee_percent, $local_tax_percent, $sustainability_contribution, $carbon_footprint, $local_economy_support, $wildlife_protection)
    {
        $this->db->query("INSERT INTO `platform_settings` (`id`, `platform_fee_percent`, `local_tax_percent`, `sustainability_contribution`,`carbon_footprint`, `local_economy_support`, `wildlife_protection`, `updated_at`) VALUES ($id, $platform_fee_percent, $local_tax_percent, $sustainability_contribution, $carbon_footprint, $local_economy_support, $wildlife_protection, current_timestamp());");
    }
}

?>