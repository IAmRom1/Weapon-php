<?php

include("../classes/Weapon.php");

new Weapon(1, "Name", "Description", 4, []);

var_dump(Weapon::$weapons);