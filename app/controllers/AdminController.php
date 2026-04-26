<?php

session_start();

require_once __DIR__ . "/../models/GuideModel.php";
require_once __DIR__ . "/../models/TourModel.php";
require_once __DIR__ . "/../models/TravelerModel.php";
require_once __DIR__ . "/../models/RegionalAuditorModel.php";
require_once __DIR__ . "/../models/AdminModel.php";
require_once __DIR__ . "/../models/PlatformSettingsModel.php";
require_once __DIR__ . "/../models/UserModel.php";

class AdminController
{
    private $guideModel;
    private $tourModel;
    private $travelerModel;
    private $regionalAuditorModel;
    private $adminModel;
    private $platformSettingsModel;
    private $userModel;
    private $db;

    public function __construct()
    {
        global $connect;

        $this->db = $connect;

        $this->guideModel = new GuideModel();
        $this->tourModel = new TourModel();
        $this->travelerModel = new TravelerModel();
        $this->regionalAuditorModel = new RegionalAuditorModel();
        $this->adminModel = new AdminModel();
        $this->platformSettingsModel = new PlatformSettingsModel();
        $this->userModel = new UserModel();
    }

    private function requireLogin()
    {
        if (!isset($_SESSION['user_id']) || $_SESSION['role'] !== 'admin') {
            header("Location: /index.php?url=guest/login_page");
            exit;
        }

        return $_SESSION['user_id'];
    }

    public function index()
    {
        $adminId = $this->requireLogin();

        $admin = $this->adminModel->getAdminById($adminId);
        $stats = $this->getNumberOfUsers();

        include __DIR__ . "/../views/admin/admin_command_center.php";
    }

    public function dashboard()
    {
        $this->index();
    }

    public function getNumberOfUsers()
    {
        $this->requireLogin();

        return [
            "travelers" => $this->travelerModel->getNumberOfTravelers(),
            "guides" => $this->guideModel->getNumberOfGuides(),
            "auditors" => $this->regionalAuditorModel->getNumberOfAuditors()
        ];
    }
}