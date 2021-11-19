<?php

// cek apakah tidak ada data di $_GET
if ( !isset($_GET["Nama"] ) ||
     !isset($_GET["Asal"]) ||
     !isset($_GET["Email"]) ||
     !isset($_GET["Jurusan"]) ||
     !isset($_GET["Gambar"])) {
    // redirect
    header("Location: latihan1get.php");
    exit;
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Nahasiswa</title>
</head>
<body>


<ul>
    <li><img src="img/<?= $_GET["Gambar"]; ?>"></li>
    <li><?= $_GET["Nama"]; ?></li>
    <li><?= $_GET["Asal"]; ?></li>
    <li><?= $_GET["Email"]; ?></li>
    <li><?= $_GET["Jurusan"]; ?></li>

</ul>

<a href="latihan1get.php">Kembali ke Daftar Mahasiswa</a>
    
</body>
</html>