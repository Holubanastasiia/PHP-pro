<?php
error_reporting(0);

$districts = [
    'Autonomous Republic of Crimea',
    'Vinnytsia',
    'Volyn',
    'Dnipropetrovsk',
    'Donetsk',
    'Zhytomyr',
    'Zakarpattia',
    'Zaporizhzhia',
    'Ivano-Frankivsk',
    'Kyiv',
    'Kirovohrad',
    'Luhansk',
    'Lviv',
    'Mykolaiv',
    'Odesa',
    'Poltava',
    'Rivne',
    'Sumy',
    'Ternopil',
    'Kharkiv',
    'Kherson',
    'Khmelnytskyi',
    'Cherkasy',
    'Chernivtsi',
    'Chernihiv'
];
$errors = [];
$style = [];

function clearData($val = ""): string
{
    $val = trim($val);
    $val = strip_tags($val);
    $val = stripslashes($val);
    return htmlspecialchars($val);
}

function checkLength($value, $min, $max): bool
{
    $result = (mb_strlen($value) < $min || mb_strlen($value) > $max);
    return !$result;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = clearData($_POST['name']);
    $surname = clearData($_POST['surname']);
    $district = clearData($_POST['district']);
    $city = clearData($_POST['city']);
    $address = clearData($_POST['address']);
    $birthday = clearData($_POST['birthday']);

    if (!checkLength($name, 2, 32)
        || !checkLength($surname, 2, 32) ||
        !checkLength($city, 2, 32)) {

        $style['name'] = empty($name) ? 'invalid' : 'valid';

        $style['surname'] = empty($surname) ? 'invalid' : 'valid';

        $style['city'] = empty($city) ? 'invalid' : 'valid';

        $errors['len'] = '<small class="error-message">This fields can not be less the 2 and bigger then 32</small>';
    }

    $today = date("Y-m-d");
    $minDate = '1900-01-01';
    if (($birthday > $today) || ($birthday < $minDate)) {
        $errors['birthday'] = '<small class="error-message" >Invalid date</small>';
        $style['birthday'] = 'invalid';
    } else {
        $style['birthday'] = 'valid';
    }

    if (!is_numeric($district)) {
        $errors['num'] = '<small class="error-message" >Choose district</small>';
        $style['district'] ='invalid';
    } else {
        $style['district'] ='valid';
    }

    $currentDistrict = $districts[$district];
    $success = "User $name $surname, birthday - $birthday, district - $currentDistrict, city - $city, address - $address add to the system ";

    if (count($errors) === 0) {
        echo $success;
        echo "<style>#form {display:none;}</style>";
    }
};

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./css/style.css">
    <title>Form</title>
    <style>
    </style>
</head>
<body>
<div class="wrapper">
    <form id="form" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="post"
          enctype="application/x-www-form-urlencoded">
        <label for="name"> Name: </label>
        <input
                type="text"
                id="name"
                name="name"
                class="<?php echo $style['name']; ?>"
                value="<?php echo $name ?>">

        <label for="surname"> Surname: </label>
        <input
                type="text"
                id="surname"
                name="surname"
                class="<?php echo $style['surname']; ?>"
                value="<?php echo $surname ?>">

        <label for="district"> Choose your district </label>
        <select name="district" id="district" class="<?php echo $style['district']; ?>">
            <option value="">--Select--</option>
            <?php     foreach ($districts as $key => $dist) {
                echo '<option value="'. $key.'">' . $dist . '</option>';
            }; ?>
        </select>
        <?php echo $errors['num'] ?>

        <label for="city"> Enter you city: </label>
        <input
                type="text"
                id="city"
                name="city"
                class="<?php echo $style['city']; ?>"
                value="<?php echo $city ?>">

        <label for="address"> Enter you address: </label>
        <input
                type="text"
                id="address"
                name="address"
                placeholder="st. Chervona, 72"
                class="<?php echo $style['address']; ?>"
                value="<?php echo $address ?>"
        >

        <label for="birthday"> Date of your Birth: </label>
        <input
                type="date"
                id="birthday"
                name="birthday"
                class="<?php echo $style['birthday']; ?>"
        >
        <?php echo $errors['birthday']; ?>
        <?php echo $errors['len']; ?>

        <button type="submit">Submit</button>
    </form>
</div>
</body>
</html>
