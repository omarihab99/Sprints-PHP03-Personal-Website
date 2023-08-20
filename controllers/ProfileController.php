<?php
class ProfileController {
    public function index() {
        require_once '../models/ProfileModel.php';
        $profile = ProfileModel::getProfile();
        require '../views/profile.php';
    }
}

$controller = new ProfileController();
$controller->index();