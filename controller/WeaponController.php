<?php

class WeaponController{
    private $weapon = [];

    public function addWeapon($name, $description, $maxLevel, $imagesPath){
        $weapon = [
            'name' => $name,
            'description' => $description,
            'maxLevel' => $maxLevel,
            'image' => $imagePath
        ];
        $this->weapon[] = $weapon;
    }
    public function getWeapon(){
        return $this->weapon;
    }
}