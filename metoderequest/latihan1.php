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

];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan GET</title>
</head>

<body>
    <h1>Daftar Mahasiswa</h1>
<ul>
    <?php foreach ($mahasiswa as $mhs): ?>
        <li>
         <a 
            href="latihan2.php?nama=<?= $mhs["nama"]; ?>&nim= <?= $mhs["nim"]; ?>&jurusan=<?= $mhs["jurusan"]; ?>&email=<?= $mhs["email"]; ?>&gambar=<?= $mhs["gambar"]; ?>"><?= $mhs["nama"]; ?></a>
        </li>
    <?php endforeach; ?>
    </ul>
</body>

</html>