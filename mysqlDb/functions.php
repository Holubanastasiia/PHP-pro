<?php
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
$today = time();
$date = '1900-01-01';
$timestamp = strtotime($date);
const UPLOAD_DIR = 'user_photos/';
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

function validDate($val, $min, $max): bool
{
    return ($val < $min || $val > $max);
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = clearData($_POST['name']) ?? null;
    $surname = clearData($_POST['surname']) ?? null;
    $district = clearData($_POST['district']) ?? null;
    $city = clearData($_POST['city']) ?? null;
    $address = clearData($_POST['address']) ?? null;
    $birthday = clearData($_POST['birthday']) ?? null;
    $avatar = $_FILES['avatar'] ?? null;


    $style['name'] = (!checkLength($name, 2, 32)) ? "invalid" : "valid";
    $style['surname'] = (!checkLength($surname, 2, 32)) ? "invalid" : "valid";
    $style['city'] = (!checkLength($city, 2, 32)) ? "invalid" : "valid";

    if ($style['name'] == "invalid" || $style['surname'] == "invalid" || $style['city'] == "invalid") {
        $errors['len'] = 'This fields can not be less the 2 and bigger then 32';
    }

    if (!is_numeric($district)) {
        $errors['num'] = 'Choose district';
        $style['district'] = 'invalid';
    } else {
        $style['district'] = 'valid';
    }

    $birthdayDay = strtotime($birthday);
    if (validDate($birthdayDay, $timestamp, $today)) {
        $errors['birthday'] = 'Invalid Date';
        $style['birthday'] = 'invalid';
    } else {
        $style['birthday'] = 'valid';
    }

    if (is_uploaded_file($avatar['tmp_name'])) {
        if ($avatar['size'] > 1000000) {
            $errors['size'] = "File is too large.";
        } else {
            $allowedTypes = ['image/jpeg', 'image/png', 'application/pdf'];
            if (!in_array($avatar['type'], $allowedTypes)) {
                $errors['type'] = "File type not allowed.";
            } else {
                if (!file_exists(UPLOAD_DIR)) {
                    mkdir(UPLOAD_DIR);
                }
                $destination = UPLOAD_DIR . uniqid() . basename($avatar['name']);
                $fileName = $avatar['tmp_name'];
                move_uploaded_file($fileName, $destination);
                $image = '<img class="avatar" src="' . $destination . '"/>';
            }
        }
    }

    if (count($errors) === 0) {
        $currentDistrict = $districts[$district];
        include_once(__DIR__ . '/db_conn.php');
        echo "User " . $name . " " . $surname . " save to data base!";
        $display = "none";
    }
}
if (isset($_GET["id"])) {
    include_once(__DIR__ . '/userByGet.php');
}
