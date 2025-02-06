<?php

class Weapon {
    public static $weapons = [];

    private int $id;
    private string $name;
    private string $description;
    private int $maxLevel;
    private $images = [];

    function __construct($id, $name, $description, $maxLevel, $images) {
        $this -> id = $id;
        $this -> name = $name;
        $this -> description = $description;
        $this -> maxLevel = $maxLevel;
        $this -> images = $images;

        self::$weapons[] = $this;
    }

    function getId() { return $this -> id; }
    function getName() { return $this -> name; }
    function getDescription() { return $this -> description; }
    function getMaxLevel() { return $this -> maxLevel; }
    function getImages() { return $this -> images; }

    function getImage($level) {
        if ($level < 0 || $level > $this -> maxLevel) return;
        return $this -> images[$level - 1];
    }

    function setId($id) { $this -> id = $id; }
    function setName($name) { $this -> name = $name; }
    function setDescription($description) { $this -> description = $description; }
    function setMaxLevel($maxLevel) { $this -> maxLevel = $maxLevel; }
}