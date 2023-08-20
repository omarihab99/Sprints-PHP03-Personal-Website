<?php
// require_once 'models/ProfileModel.php';
// require_once 'models/SkillsModel.php';

class HomeController {
    public function index() {
        // $profile = ProfileModel::getProfile();
        // $skills = SkillsModel::getSkills();
        include 'views/home.php';
    }
}

$controller = new HomeController();
$controller->index();
