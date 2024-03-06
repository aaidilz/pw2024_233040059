<?php

$hari = ["Senin", "Selasa", "Rabu", "Kamis", "Jumat", "Sabtu", "Minggu"];
$bulan = ["Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember"];
$mhs = ["aidil", 3.5, false];

echo $hari[0] . "<br>";
echo $bulan[1] . "<br>";
echo $mhs[1] ."<br>";
echo "<hr>";

var_dump($hari);
echo "<hr>";
print_r($bulan);
echo "<hr>";
var_dump($mhs);

// manipulasi array
$hari[] = "special day";
print_r($hari);
echo "<br>";
array_push($bulan, "special month");
print_r($bulan);
echo "<hr>";