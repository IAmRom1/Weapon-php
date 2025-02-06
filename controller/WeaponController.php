<?php

require_once './classes/Weapon.php';

class WeaponController {
    public function getWeapons() {
        new Weapon(1, "Epee", "Lame légendaire", 4, ["epee/epee1.png"]);
        new Weapon(2, "Arc", "Arc nul", 2, ["fleau/fleau1.png"]);
        
        return Weapon::$weapons;
    }
}