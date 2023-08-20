<?php
class SkillsModel{
    public static function getSkills(){
        $skillsData = json_decode(file_get_contents('../data/skills.json'), true);
        return $skillsData;
    }
}