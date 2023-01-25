<div class="naglowek">
    <a class="logo" href="<?= self::redirect("home.php") ?>">Donde</a><a class="logo2"> - Mapa</a>
</div>

<a href="<?= self::redirect("map.php") ?>">
    <div class="box">MAPA</div>
</a>
<a href="<?= self::redirect("search.php") ?>">
    <div class="box">SZUKAJ</div>
</a>
<?php if(isset($_SESSION["LOGGED_AS"])): ?>
<a href="<?= self::redirect("admin.php") ?>">
    <div class="box">ADMIN PANEL</div>
</a>
<?php endif; ?>
<a href="<?= isset($_SESSION["LOGGED_AS"]) ? self::redirect("account.php?action=logout") :  self::redirect("account.php?action=login") ?>">
    <div class="log"><?= $_SESSION["LOGGED_AS"] ?? "ZALOGUJ SIĘ" ?></div>
</a>