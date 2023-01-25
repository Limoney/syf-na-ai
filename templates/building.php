<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= self::asset("mapa.css") ?>">
    <link rel="stylesheet" href="<?= self::asset("main.css") ?>">
    <link rel="stylesheet" href="<?= self::asset("building.css") ?>">
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
                <h1><?= $building->getName() ?></h1>
                <div class="location-data">
                    <table>
                        <thead>
                            <tr>
                                <th>floor</th>
                                <th>room number</th>
                                <th>room type</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach($locations as $location): ?>
                                <tr>
                                    <td data-label="floor"> <?= $location->getFloorNumber()?> </td>
                                    <td data-label="room number"> <?= $location->getRoomNumber()?> </td>
                                    <td data-label="room type"> <?= $location->getRoomType()->getName() ?> </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                    
                </div>
            </div>
        </div>
    </div>
    
</body>
</html>