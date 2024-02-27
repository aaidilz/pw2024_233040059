<!DOCTYPE html>
<html lang="en">

<head>
    <style>
    .flex {
        display: flex;
    }

    .box {
        width: 100px;
        height: 100px;
        line-height: 100px;
        text-align: center;
        font-size: 24px;
        font-weight: bold;
        color: white;
        border: 1px solid black;
        background-color: red;
    }
    </style>
</head>

<body>
    <?php
    for ($i = 10; $i >= 1; $i--) { ?>
    <div class="flex">
        <?php for ($j = 1; $j <= $i; $j++) { ?>
        <div class="box"><?= $j ?></div>
        <?php } ?>
    </div>
    <?php } ?>
</body>

</html>
