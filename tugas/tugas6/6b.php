<?php

$i = $_GET['i'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <style>
    .flex {
        display: flex;
    }

    .box {
        width: 50px;
        height: 50px;
        line-height: 50px;
        text-align: center;
        font-size: 18px;
        font-weight: bold;
        border: 1px solid black;
    }

    .ganjil {
        color: black;
    }

    .genap {
        background-color: red;
        color: white;
    }
    </style>
</head>
<form action="6b.php" method="get">
    <input type="number" name="i" id="i">
    <input type="submit" value="kirimkan">
</form>
<br>
    <?php
    for ($j = $i; $j >= 1; $j--) {
        echo '<div class="flex">';
        for ($k = 1; $k <= $j; $k++) {
            $class = ($j % 2 == 0) ? 'genap' : 'ganjil';
            echo '<div class="box ' . $class . '">' . $j . '</div>';
        }
        echo '</div>';
    }
    ?>
</body>

</html>
