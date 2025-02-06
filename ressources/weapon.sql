CREATE DATABASE IF NOT EXISTS weapon;
USE weapon;

DROP TABLE IF EXISTS weapon_to_image;
DROP TABLE IF EXISTS weapon;
DROP TABLE IF EXISTS image;

CREATE TABLE weapon (
    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(50) NOT NULL,
    description VARCHAR(255) NOT NULL,
    max_level TINYINT NOT NULL
);

CREATE TABLE image (
    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(50) NOT NULL,
    url VARCHAR(100) NOT NULL
);

CREATE TABLE weapon_to_image (
    weapon_id INT NOT NULL,
    image_id INT NOT NULL,
    FOREIGN KEY (weapon_id) REFERENCES weapon(id),
    FOREIGN KEY (image_id) REFERENCES image(id),
    PRIMARY KEY (weapon_id, image_id)
);