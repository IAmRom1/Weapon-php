<?php

class WeaponPDO {
    private const DB_URL = "mysql:dbname=weapon;host=localhost";
    private const USER = "root";
    private const PASSWORD = "";
    private const OPTIONS = array(
        PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8",
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
    );

    static $PDOConnection = null;

    static function getPDO() {
        if (!is_null(self::$PDOConnection)) return self::$PDOConnection;

        try {
            self::$PDOConnection = new PDO(self::DB_URL, self::USER, self::PASSWORD, self::OPTIONS);
        } catch (PDOException $e) {
            die('Connection failled : ' . $e -> getMessage());
        }

        return self::$PDOConnection;
    }
}