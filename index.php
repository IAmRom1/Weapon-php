<?php
$armes = [
    ['name' => 'épée', 'description' => 'Lame légendaire', 'maxLevel' => 150, 'images' => 'epee/epee1.png'],
    ['name' => 'Couteau', 'description' => 'Lame nul', 'maxLevel' => 9,  'images' => 'fleau/fleau1.png']
];
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Armes</title>
    <link rel="stylesheet" href="style/style.css">
</head>
<body>
    <div class="container">
        <?php foreach($armes as $arme): ?>
            <div class="card">
                <h2><?php echo htmlspecialchars($arme['name']); ?></h2>
                <p><?php echo htmlspecialchars($arme['description']); ?></p>
                <p>Niveau max : <?php echo htmlspecialchars($arme['maxLevel']); ?></p>
                <img src="images/<?php echo htmlspecialchars($arme['images']); ?>" alt="<?php echo htmlspecialchars($arme['name']); ?>">
            </div>
        <?php endforeach; ?>
    </div>
</body>
</html>
