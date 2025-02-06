<?php

require_once './classes/Weapon.php';
require_once './DAO/WeaponDAO.php';

class WeaponController {
    public function getWeapons() {
        $weaponsData = WeaponDAO::getWeapons();
        foreach($weaponsData as $data) {
            $imagesData = WeaponDAO::getImages($data['id']);
            $imgUrls = array_map(function($img) {
                return $img['url'];
            }, $imagesData);
            new Weapon($data['id'], $data['name'], $data['description'], $data['max_level'], $imgUrls);
        }
        return Weapon::$weapons;
    }
}