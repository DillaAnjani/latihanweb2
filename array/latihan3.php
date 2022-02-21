<?php
$mahasiswa = [
    [
        "nim" => '21510012',
        "nama" => "Dilla Anjani",
        "jurusan" => "Sistem Informasi",
        "email" => "dilla@stimata.ac.id",
        "gambar" => "dilla.jpg"
    ],
    [
        "nim" => '21510009',
        "nama" => "Dhiva Ayu",
        "jurusan" => "Sistem Informasi",
        "email" => "gessa@stimata.ac.id",
        "gambar" => "dhiva.jpg"
    ],

]

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Mahasiswa</title>
</head>
<body>
    <h1>Data Mahasiswa</h1>
    <?php foreach ($mahasiswa as $mhs) :?>
        <ul>
            <li>
                <img src="img/<?= $mhs["gambar"]; ?>">
            </li>
            <li>NIM : <?= $mhs["nim"]; ?></li>
            <li>Nama : <?= $mhs["nama"]; ?></li>
            <li>Jurusan : <?= $mhs["jurusan"]; ?></li>
            <li>Email : <?= $mhs["email"]; ?></li>
        </ul>
    <?php endforeach; ?>
</body>
</html>