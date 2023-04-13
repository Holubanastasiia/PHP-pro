<?php
//error_reporting(0);
include_once ('functions.php');
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
          enctype="multipart/form-data"
          style="display: <?php echo $display ?? 'flex'; ?>"
    >
        <label for="name"> Name: </label>
        <input
                type="text"
                id="name"
                name="name"
                class="<?php echo $style['name'] ?? ''; ?>"
                value="<?php echo $name ?? '' ?>">

        <label for="surname"> Surname: </label>
        <input
                type="text"
                id="surname"
                name="surname"
                class="<?php echo $style['surname'] ?? ''; ?>"
                value="<?php echo $surname ?? ''; ?>">

        <label for="district"> Choose your district </label>
        <select name="district" id="district" class="<?php echo $style['district'] ?? ''; ?>">
            <option value="">--Select--</option>
            <?php if ($districts !== null) {
                foreach ($districts as $key => $dist) {
                    echo '<option value="' . $key . '">' . $dist . '</option>';
                }
            } ?>
        </select>

        <?php echo $errors['num'] ?? null;  ?>

        <label for="city"> Enter you city: </label>
        <input
                type="text"
                id="city"
                name="city"
                class="<?php echo $style['city'] ?? ''; ?>"
                value="<?php echo $city ?? '';  ?>">

        <label for="address"> Enter you address: </label>
        <input
                type="text"
                id="address"
                name="address"
                placeholder="st. Chervona, 72"
                class="<?php echo $style['address'] ?? ''; ?>"
                value="<?php echo $address ?? ''; ?>">

        <label for="birthday"> Date of your Birth: </label>
        <input
                type="date"
                id="birthday"
                name="birthday"
                class="<?php echo $style['birthday'] ?? ''; ?>">

        <label for="avatar">Choose your avatar</label>
        <input type="file" name="avatar">
        <?php if (isset($errors)) {
            foreach ($errors as $error) { ?>
                <small class="error-message">
                    <?php echo $error; ?>
                </small>
            <?php }
        } ?>
        <button type="submit">Submit</button>
    </form>
</div>
</body>
</html>
