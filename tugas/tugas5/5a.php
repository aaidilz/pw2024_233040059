<?php
$mahasiswa = [
    [
    "nama" => "Rimuru Tempest",
    "nrp" => "202401001",
    "email" => "Rimuru@tempest.mail.jr",
    "jurusan"=> "Ilmu Sihir"
    ],
    [
    "nama" => "Shizue Izawa",
    "nrp" => "202401002",
    "email" => "Izawa@tempest.mail.jr",
    "jurusan"=> "Sastra Jepang"
    ],
    [
    "nama" => "Milim Nava",
    "nrp" => "202401003",
    "email" => "Milim@tempest.mail.jr",
    "jurusan"=> "Manajemen Bisnis"
    ],
    [
    "nama" => "Benimaru",
    "nrp" => "202401004",
    "email" => "Benimaru@tempest.mail.jr",
    "jurusan"=> "Strategi dan Taktik"
    ],
    [
    "nama" => "Shuna",
    "nrp" => "202401005",
    "email" => "Shuna@tempest.mail.jr",
    "jurusan"=> "Kesehatan dan Keperawatan"
    ],
    [
    "nama" => "Souei",
    "nrp" => "202401006",
    "email" => "Souei@tempest.mail.jr",
    "jurusan"=> "Ilmu Komunikasi"
    ],
    [
    "nama" => "Ranga",
    "nrp" => "202401007",
    "email" => "Rangga@tempest.mail.jr",
    "jurusan"=> "Ilmu Sihir"
    ],
    [
    "nama" => "Veldora Tempest",
    "nrp" => "202401008",
    "email" => "Veldora@tempest.mail.jr",
    "jurusan"=> "Ilmu Sihir"
    ],
    [
    "nama" => "Gabiru",
    "nrp" => "202401009",
    "email" => "Gabiru@tempest.mail.jr",
    "jurusan"=> "Ilmu Pedang"
    ],
    [
    "nama" => "Gelmud",
    "nrp" => "202401010",
    "email" => "Gelmud@tempest.mail.jr",
    "jurusan"=> "Ilmu Sihir"
    ]

];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data mahasiswa</title>
</head>
<body>
    <h3>Daftar Mahasiswa Universitas Jura Tempest</h3>

    <?php foreach($mahasiswa as $mhs) : ?>
    <ul>
        <li>Nama : <?= $mhs["nama"]; ?></li>
        <li>NRP : <?= $mhs["nrp"]; ?></li>
        <li>Email : <?= $mhs["email"]; ?></li>
        <li>Jurusan : <?= $mhs["jurusan"]; ?></li>
    </ul>
    <?php endforeach; ?>

</body>
</html>