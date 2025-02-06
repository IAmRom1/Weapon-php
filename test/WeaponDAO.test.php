<?php

include("../DAO/WeaponDAO.php");

var_dump(WeaponDAO::getWeapons());
var_dump(WeaponDAO::getImages(1));