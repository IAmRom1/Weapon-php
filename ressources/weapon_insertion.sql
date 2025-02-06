INSERT INTO weapon (name, description, max_level) VALUES 
("Epée", "Une puissante épée", 5),
("Arc", "Une arc précis", 2),
("Fléau", "Une fléau puissant", 5),
("hache", "Une hache puissante", 5);

INSERT INTO image (name, url) VALUES
('epee niveau 1', 'epee/epee1.png'),
('epee niveau 2', 'epee/epee2.png'),
('epee niveau 3', 'epee/epee3.png'),
('epee niveau 4', 'epee/epee4.png'),
('epee niveau 5', 'epee/epee5.png'),
('arc niveau 1', 'arc/arc1.png'),
('arc niveau 2', 'arc/arc2.png'),
('fleau niveau 1', 'fleau/fleau1.png'),
('fleau niveau 2', 'fleau/fleau2.png'),
('fleau niveau 3', 'fleau/fleau3.png'),
('fleau niveau 4', 'fleau/fleau4.png'),
('fleau niveau 5', 'fleau/fleau5.png'),
('hache niveau 1', 'hache/hache1.png'),
('hache niveau 2', 'hache/hache2.png'),
('hache niveau 3', 'hache/hache3.png'),
('hache niveau 4', 'hache/hache4.png'),
('hache niveau 5', 'hache/hache5.png');

INSERT INTO weapon_to_image (weapon_id, image_id) VALUES
-- Epée (id_weapon = 1)
(1, 1),
(1, 2),
(1, 3),
(1, 4),
(1, 5),

-- Arc (id_weapon = 2)
(2, 6),
(2, 7),

-- Fléau (id_weapon = 3)
(3, 8),
(3, 9),
(3, 10),
(3, 11),
(3, 12),

-- Hache (id_weapon = 4)
(4, 13),
(4, 14),
(4, 15),
(4, 16),
(4, 17);