<?php

if (isset($_GET['theme'])) {
    $theme = $_GET['theme'];
    setcookie('theme', $theme, time() + 3600);
} elseif (isset($_POST['theme'])) {
    $theme = $_POST['theme'];
    setcookie('theme', $theme, time() + 3600);
} elseif (isset($_COOKIE['theme'])) {
    $theme = $_COOKIE['theme'];
} else {
    $theme = 'light';
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>My site</title>
    <style>
        div {
            margin-top: 10px;
        }

        button {
            background-color: green;
            outline: none;
            border: 1px solid darkgreen;
            padding: 10px;
            color: white;
            cursor: pointer;
        }

        input [type='radio'] {
            cursor: pointer;
        }
        .light {
            background-color: antiquewhite;
        }
        .dark {
            background-color: gray;
        }
     </style>
</head>
<body class="<?= $theme; ?>">
<div class="wrapper">
    <div>
        <p>Select mode by Get:</p>
        <a href="?theme=light">Light theme</a>
        <span> or </span>
        <a href="?theme=dark">Dark theme</a>
    </div>

    <form action="" method="post">
        <p>Select mode by Post:</p>
        <div>
            <input type="radio" id="dark" name="theme" value="dark">
            <label for="dark">dark</label>
        </div>

        <div>
            <input type="radio" id="light" name="theme" value="light">
            <label for="light">light</label>
        </div>

        <div>
            <button type="submit">Choose theme mode</button>
        </div>
    </form>
</div>
</body>
</html>
