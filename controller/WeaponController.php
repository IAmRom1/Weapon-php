<?php

require_once './classes/Weapon.php';

class WeaponController {
    public function getWeapons() {
        new Weapon(1, "Epee", "Lame légendaire", 4, ["epee/epee1.png"]);
        new Weapon(2, "Arc", "Arc nul", 2, ["fleau/fleau1.png"]);
        new Weapon(3, "Fleau", "Fleau de guerre", 3, ["fleau/fleau1.png"]);
        new Weapon(4, "Hache", "Hache de guerre", 3, ["hache/hache1.png"]);
        new Weapon(5, "Epee", "Lame légendaire", 4, ["epee/epee1.png"]);
        new Weapon(6, "Arc", "Arc nul", 2, ["fleau/fleau1.png"]);
        
        return Weapon::$weapons;
    }
}