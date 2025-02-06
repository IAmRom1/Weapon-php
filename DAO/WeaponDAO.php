<?php
include("PDO.php");

class WeaponDAO {
    public static function getWeapons() {
        $pdo = WeaponPDO::getPDO();

        $sql = "SELECT * FROM weapon";
        $stmt = $pdo -> prepare($sql);
        $stmt -> execute();

        return $stmt -> fetchall(PDO::FETCH_ASSOC);
    }

    public static function getImages($idWeapon) {
        $pdo = WeaponPDO::getPDO();

        $sql = "SELECT name, url FROM weapon_to_image JOIN image ON weapon_to_image.image_id = image.id WHERE weapon_id = :idWeapon";
        $stmt = $pdo -> prepare($sql);
        $stmt->bindParam('idWeapon', $idWeapon, PDO::PARAM_INT);
        $stmt -> execute();

        return $stmt -> fetchall(PDO::FETCH_ASSOC);
    }
}