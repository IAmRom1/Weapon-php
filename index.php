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
                $imagesJson = htmlspecialchars(json_encode($arme->getImages()), ENT_QUOTES, 'UTF-8');
        ?>
            <div class="card" data-images='<?php echo $imagesJson; ?>'>
                <h2><?php echo htmlspecialchars($arme->getName()); ?></h2>
                <p><?php echo htmlspecialchars($arme->getDescription()); ?></p>
                <p>Niveau max : <?php echo $maxLevel; ?></p>
                <select onchange="updateImage(this, '<?php echo $arme->getId(); ?>')">
                    <?php for($i = 1; $i <= $maxLevel; $i++): ?>
                        <option value="<?php echo $i; ?>" <?php if($i == $maxLevel) echo 'selected'; ?>>
                            Niveau <?php echo $i; ?>
                        </option>
                    <?php endfor; ?>
                </select>
                <img id="img-<?php echo $arme->getId(); ?>" src="images/<?php echo htmlspecialchars($arme->getImage(1)); ?>" 
                     alt="<?php echo htmlspecialchars($arme->getName()); ?>">
            </div>
        <?php endforeach; ?>
    </div>
    <script src="style/script.js"></script>
    <script>
    function updateImage(select, weaponId) {
        const level = select.value;
        const card = select.closest('.card');
        const images = JSON.parse(card.getAttribute('data-images'));
        const img = document.getElementById('img-' + weaponId);
        if (images[level - 1]) {
            img.src = 'images/' + images[level - 1];
        }
    }
    </script>
</body>
</html>