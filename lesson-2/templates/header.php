<?php
$name = ' Holubnycha Anastasiia';
$myPhoto = 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTfyeYIJHQ8LeKpm2g0RcOAPWoD_lQX1Jw2xQ&usqp=CAU';
$wantedRole = 'Junior full stack developer';
?>
<header class="header">
    <div class="header__photo">
        <img src="<?= $myPhoto; ?>" alt="photo">
    </div>
    <div class="header__main-info">
        <div class="header__name">
            <h1><?= $name; ?></h1>
        </div>
        <div class="header__role">
            <?= $wantedRole; ?>
        </div>
    </div>
</header>