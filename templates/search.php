<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= self::asset("donde.css") ?>">
    <link rel="stylesheet" href="<?= self::asset("main.css") ?>">
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
            <form action="<?= self::redirect("search.php?lookfor=professor") ?>" method="post">
                <h1>Professor</h1>
                <label for="login">First Name</label>
                <input type="text" name="fname">
                <label for="login">Last Name</label>
                <input type="text" name="lname">
                <input type="submit" value="slay">
            </form>
            <?php if(isset($professor)): ?>
               <div class="response">
                <h3> <?= $professor->getTitle() . " ". $professor->getFirstName() . " ". $professor->getLastName()?></h3>
                Can be Found in : Room <?= $professor->getLocation()->getRoomNumber()?> Floor: <?= $professor->getLocation()->getFloorNumber()?> Building: <?= $professor->getLocation()->getBuilding()->getName()?>
               </div>
            <?php endif; ?>
            <hr>
            <form action="<?= self::redirect("search.php?lookfor=location") ?>" method="post">
                <h1>Location</h1>
                <label for="room_num">Room Number</label>
                <input type="text" name="room_num">
                <input type="submit" value="slay">
            </form>
            <?php if(isset($locations) && count($locations) > 0): ?>
               <div class="response">
                   <h3>Rooms Found</h3>
                    <?php foreach($locations as $location): ?>
                        Room Number: <?= $location->getRoomNumber()?> Floor:  <?= $location->getFloorNumber() ?> Type: <?= $location->getRoomType()->getName() ?> Building: <?= $location->getBuilding()->getName() ?> <br>
                    <?php endforeach; ?>
                </div>
            <?php endif; ?>
        </div>
    </div>
</body>
</html>