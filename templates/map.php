<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= self::asset("mapa.css") ?>">
    <link rel="stylesheet" href="<?= self::asset("main.css") ?>">
    <script src="<?= self::asset("mapa.js") ?>" defer></script> 
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@500&display=swap" rel="stylesheet">
    <title>Document</title>
</head>
<body>
    <div class="strona">
        <div class="nav">
            <?php require "nav.php" ?>
        </div>
        <div class="content">
            <div class="inf">
                <a class="uwu">Wydział informatyki</a>
                <div class="gallery-wrapper">
                    <div class="bud" id="scroll" data-mouse-down-at="0" data-prev-percentage="0">
                        <?php foreach($buildings as $building): ?>
                            <div class="img-wrapper">
                                <a href="<?= self::redirect("map.php?building={$building->getId()}") ?>" class="link">
                                    <?= $building->getName()?>
                                </a>
                                <img src="<?= self::asset($building->getBuildingImagePath()) ?>" class="img" alt="zdjęcie wi1" draggable="false">
                            </div>
                            <div class="img-wrapper">
                                <img src="<?= self::asset($building->getMapImagePath()) ?>" class="img" alt="mapa wi1" draggable="false">
                                <a class="link" href="<?= self::redirect("map.php?building={$building->getId()}") ?>">
                                    <?= $building->getAddress()?>
                                </a>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
                </div>
        </div>
    </div>
    
</body>
</html>