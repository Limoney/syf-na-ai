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
            <h1>Witaj w Donde</h1>
            <a>Jest to system pomagający poruszać się bo wydziale informatyki </a>
            <div class="galery">
                <img src="<?= self::asset("in1.JPG") ?>" class="img">
                <img src="<?= self::asset("in2.JPG") ?>" class="img">
            </div>
        </div>
    </div>
</body>
</html>
