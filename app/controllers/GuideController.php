<?php
require_once("../../core/connection.php");
require_once("../models/GuideModel.php");

class GuideController
{
    private $guideModel;

    public function __construct($guideModel)
    {
        $this->guideModel = $guideModel;
    }



    public function createGuide($data)
    {
        if (empty($data['guide_id'])) {
            return "guide_id is required";
        }

        if (empty($data['country_of_residence'])) {
            return "country is required";
        }

        if (!is_numeric($data['years_of_experience'])) {
            return "invalid experience value";
        }

        $this->guideModel->addNewGuide(
            $data['guide_id'],
            $data['identity_verification_path'] ?? null,
            $data['verified_at'] ?? null,
            $data['country_of_residence'],
            $data['bio'],
            $data['years_of_experience'],
            $data['join_date'],
            $data['status'] ?? 'pending',
            0,
            0,
            0
        );

        header("Location: guides.php?success=1");
        exit;
    }

    public function getAll()
    {
        return $this->guideModel->getAllGuidesFullData();
    }
}

?>