<?php

$emot = ["😭", "😂", "😁", "😅", "😊"];
array_push($emot, "😍", "😎");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>Daftar emote</h3>
    <ol>
        <?php foreach($emot as $i) { ?>
            <li><?php echo $i; ?></li>
        <?php } ?>
    </ol>
    <br
</body>
</html>