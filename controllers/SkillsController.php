<?php
class SkillsController {
    public function index() {
        require_once '../models/SkillsModel.php';
        $skills = SkillsModel::getSkills();
        require '../views/skills.php';
    }
}

$controller = new SkillsController();
$controller->index();
