<?php

function number($num){
    $count = 1;
    for ($i = 1; $i <= $num; $i++) {
        for ($j = 1; $j <= $i; $j++) {
            echo $count++ . " ";
        }
        echo "<br>";
    }
}

//buat $post agar bisa diakses di dalam function
function random($num){
    for ($i = 1; $i <= $num; $i++) {
        for ($j = 1; $j <= $i; $j++) {
            echo rand(1, 100) . " ";
        }
        echo "<br>";
    }
}

echo number(10);
