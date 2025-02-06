<?php
require_once './controller/WeaponController.php';

$controller = new WeaponController();
$armes = $controller->getWeapons();
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Armes</title>
    <link rel="stylesheet" href="style/style.css">
</head>
<body>
    <h1>Liste des armes</h1>
    <div class="container">
        <?php foreach($armes as $arme): 
                $maxLevel = ($arme->getMaxLevel() > 4) ? 4 : $arme->getMaxLevel();
                $weaponFolder = strtolower($arme->getName());
        ?>
            <div class="card">
                <h2><?php echo htmlspecialchars($arme->getName()); ?></h2>
                <p><?php echo htmlspecialchars($arme->getDescription()); ?></p>
                <p>Niveau max : <?php echo $maxLevel; ?></p>
                <select onchange="updateImage(this, '<?php echo htmlspecialchars($arme->getName()); ?>', '<?php echo $arme->getId(); ?>')">
                    <?php for($i = 1; $i <= $maxLevel; $i++): ?>
                        <option value="<?php echo $i; ?>" <?php if($i == $maxLevel) echo 'selected'; ?>>
                            Niveau <?php echo $i; ?>
                        </option>
                    <?php endfor; ?>
                </select>
                <img id="img-<?php echo $arme->getId(); ?>" src="images/<?php echo $weaponFolder; ?>/<?php echo $weaponFolder; ?>1.png" 
                     alt="<?php echo htmlspecialchars($arme->getName()); ?>">
            </div>
        <?php endforeach; ?>
    </div>
    <script src="style/script.js"></script>
    <script>
    // Fonction qui met à jour l'image en fonction du niveau sélectionné
    function updateImage(select, weaponName, weaponId) {
        const level = select.value;
        const img = document.getElementById('img-' + weaponId);
        const lowerName = weaponName.toLowerCase();
        img.src = 'images/' + lowerName + '/' + lowerName + level + '.png';
    }
    </script>
</body>
</html>