<?php
$name = ' Holubnycha Anastasiia';
$myPhoto = 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTfyeYIJHQ8LeKpm2g0RcOAPWoD_lQX1Jw2xQ&usqp=CAU';
$wanted_role = 'Junior full stack developer';
$salary = 2000;
$workExperience = 1.5;
$city = 'Kyiv';
$readyToRelocate = true;
$email = 'holubanastasiia@gmail.com';
$telNumber = '+380937078674';
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./css/reset.css">
    <link rel="stylesheet" href="./css/style.css">
    <title>CV <?= $name; ?></title>
</head>
<body>
<header class="header">
    <div class="header__photo">
        <img src="<?= $myPhoto; ?>" alt="photo">
    </div>
    <div class="header__main-info">
        <div class="header__name">
            <h1><?= $name; ?></h1>
        </div>
        <div class="header__role">
            <?= $wanted_role; ?>
        </div>
    </div>
</header>
<main class="intro">
    <p> My name is <?= $name; ?>, I live in <?= $city; ?>,
        <?php if ($readyToRelocate == true) {
            echo ' but i\'m ready to relocate';
        } else {
            echo ' and i\'m not ready to relocate';
        } ?>. I have <?= $workExperience; ?>
        years experience in development.
        I expected a salary around <?= $salary; ?>$ per month.
    </p>
</main>

<footer>
    <div class="contact">
        <h1>Contact me</h1>
        <p>Email: <?= $email; ?></p>
        <p>Tel: <?= $telNumber; ?></p>
    </div>
</footer>

</body>
</html>

<?php echo <<<HEREDOC
It is a short info about $name. If you have some questions, you can contact me, my tel. number is $telNumber.
HEREDOC;