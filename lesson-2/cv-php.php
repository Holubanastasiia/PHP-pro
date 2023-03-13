<?php
$salary = 2000;
$workExperience = 1.5;
$city = 'Kyiv';
$readyToRelocate = true;
$skills = [
    'JS',
    'PHP',
    'HTML',
    'Css',
    'Sass/Less',
    'jQuery',
    'SQL',
    'WordPress'
];
$time = date('H');
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
    <title>CV</title>
</head>
<body class="<?php if($time >= 18) {
    echo 'night';
} else {
    echo 'day';
}
?>">
<div class="container">
<?php include_once('templates/header.php')?>
<main class="main__info">
    <div class="skills">
        <p>Hard Skills: </p>
        <ul>
        <?php foreach ($skills as $skill) { ?>
                <li>
                    <?= $skill; ?>
                </li>
        <?php }; ?>
        </ul>
    </div>
    <div class="info">
        <p> My name is <?= $name; ?>, I live in <?= $city; ?>,
            <?php if ($readyToRelocate == true) {
                echo ' but i\'m ready to relocate';
            } else {
                echo ' and i\'m not ready to relocate';
            } ?>.
            I have <?= $workExperience; ?>
            years experience in development.
            I expected a salary around <?= $salary; ?>$ per month.
        </p>
    </div>
</main>

<?php require_once('templates/footer.php')?>
</div>
</body>
</html>

<?php //echo <<<HEREDOC
//It is a short info about $name. If you have some questions, you can contact me, my tel. number is $telNumber.
//HEREDOC;