<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Multiplication table</title>
    <style>
        td {
            border: 1px solid black;
            padding: 2px;
            text-align: center;
        }
        .yellow {
            background-color: yellow;
        }
    </style>
</head>
<body>
<table>
    <?php
    for ($i = 1; $i <= 10; $i++) {
        echo '<tr>';
        for ($j = 1; $j <= 10; $j++) {
            if ($i == 1 || $j == 1) {
                echo '<td class="yellow">' . $i * $j . '</td>';
            } else {
                echo '<td>' . $i * $j . '</td>';
            }
        }
        echo '</tr>';
    };
    ?>
</table>
</body>
</html>

