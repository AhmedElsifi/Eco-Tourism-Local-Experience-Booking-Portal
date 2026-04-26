<?php
require_once("../../core/connection.php");

class ConfigController
{
    private function validatePercentage($value, $name, &$errors)
    {
        if (!is_numeric($value)) {
            $errors[] = "$name must be a number.";
            return;
        }

        if ($value < 0 || $value > 100) {
            $errors[] = "$name must be between 0 and 100.";
        }
    }

    public function save()
    {
        global $connect;
        $platform_fee_percent = $_POST['platform_fee_percent'];
        $sustainability_contribution = $_POST['sustainability_contribution'];
        $local_tax_percent = $_POST['local_tax_percent'];
        $carbon_footprint = $_POST['carbon_footprint'];
        $local_economy_support = $_POST['local_economy_support'];
        $wildlife_protection = $_POST['wildlife_protection'];

        $errors = [];

        $this->validatePercentage($platform_fee_percent, "Platform Fee", $errors);
        $this->validatePercentage($sustainability_contribution, "Sustainability Contribution", $errors);
        $this->validatePercentage($local_tax_percent, "Local Tax", $errors);
        $this->validatePercentage($carbon_footprint, "Carbon Footprint", $errors);
        $this->validatePercentage($local_economy_support, "Local Economy Support", $errors);
        $this->validatePercentage($wildlife_protection, "Wildlife Protection", $errors);

        $totalEco = ceil($carbon_footprint + $local_economy_support + $wildlife_protection);

        if ($totalEco != 100) {
            $errors[] = "Eco-Leaf weights must total exactly 100%. Current total: $totalEco";
        }

        $totalFees = $platform_fee_percent + $sustainability_contribution + $local_tax_percent;

        if ($totalFees > 100) {
            $errors[] = "Total fees cannot exceed 100%. Current total: $totalFees";
        }

        if (!empty($errors)) {
            echo "<pre>";
            print_r($errors);
            echo "</pre>";
            exit;
        }

        require_once "../models/PlatformSettingsModel.php";
        $model = new PlatformSettingsModel($connect);

        $currentSettings = $model->getPlatformSettings();

        $model->updatePlatformSettings(
            $currentSettings["id"] + 1,
            $platform_fee_percent,
            $local_tax_percent,
            $sustainability_contribution,
            $carbon_footprint,
            $local_economy_support,
            $wildlife_protection
        );

        header("location:../views/admin/admin_command_center.php");
        exit;
    }
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    (new ConfigController())->save();
}
?>