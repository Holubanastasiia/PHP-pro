<?php
$servername = "";
$username = "root";
$password = "";
$dbname = "users";
$connection = mysqli_connect($servername, $username, $password, $dbname);

if (!$connection) {
    die("Connection failed: " . mysqli_connect_error());
}

$sqlTable = "INSERT INTO
    students
        (firstname, surname, birthday, currentDistrict, city, address, image)
    VALUES
        ('$name', '$surname', '$birthday', '$currentDistrict', '$city', '$address', '$destination')";

mysqli_query($connection, $sqlTable);
mysqli_close($connection);
