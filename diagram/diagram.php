<?php
function randomData(): array
{
    $currentYear = date('Y');
    $startYear = 2000;
    $data = array();
    for ($year = $startYear; $year <= $currentYear; $year++) {
        $data[$year] = rand(0, 90);
    }
    return $data;
}

function randomColor(): string
{
    $r = rand(0, 255);
    $g = rand(0, 255);
    $b = rand(0, 255);

    return "rgb($r, $g, $b)";
}

function makeDiagram($data)
{
    foreach ($data as $year => $percent) {
        echo '<div class="chart-item">';
        echo '<p>' . $year  . ' - '. $percent .'%' . '</p>';
        echo '<div class="pipe" style="background-color: ' . randomColor() . '; width: ' . ($percent) . '%;"></div>';
        echo '</div>';
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Bar chart</title>
    <style>
        .chart .pipe {
            background: #eee none repeat scroll 0 0;
            box-shadow: 3px 3px 3px 0 rgb(200, 200, 200) inset;
        }

        .chart .pipe {
            width: 100%;
            height: 10px;
            border-radius: 5px;
            margin-bottom: 0.8em;
        }

        .chart p {
            margin: 0 0 3px
        }

        .chart .pipe > div {
            /*background: #dc3545 none repeat scroll 0 0;*/
            border-radius: 5px;
            height: 10px;
        }
    </style>
</head>
<body>
<div class="chart">
    <?php
    $data = randomData();
    makeDiagram($data);
    ?>
</div>

</body>
</html>