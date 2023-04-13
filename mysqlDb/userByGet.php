<?php
$servername = "";
$username = "root";
$password = "";
$dbname = "users";
$connection = mysqli_connect($servername, $username, $password, $dbname);

if (!$connection) {
    die("Connection failed: " . mysqli_connect_error());
}
if ($_SERVER["REQUEST_METHOD"] == "GET") {
    $display = "none";

    $id = mysqli_real_escape_string($connection, $_GET["id"]);

    $sql = "SELECT * FROM students WHERE id = '$id'";
    $result = mysqli_query($connection, $sql);

    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            echo "ID: " . $row["id"] . "<br>";
            echo "- Name: " . $row["firstname"] . " - surname: " . $row["surname"] . "<br>";
            echo "- Birthday: " . $row["birthday"] . "<br>";
            echo "- currentDistrict: " . $row["currentDistrict"] . " - city: " . $row["city"] . " - address: " . $row["address"] . "<br>";
            echo '<img class="avatar" src="./' . $row['image'] . '">';
        }
    } else {
        echo "No results found";
    }
}
