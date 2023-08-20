<?php
class ProfileModel {
    public static function getProfile(){
        $data = json_decode(file_get_contents('../data/profile.json'), true);
        return $data;
    }
}