<?php

// $mahasiswa = [
//     ["Fajri Ramadhan","9980799856","fajri@gmail.com","Teknik Informatika"],
//     ["Adrian Kurniawan","5380789964", "adrian@gmail.com","Teknik Mesin"]
// ];

// Array Associative
// defenisinya sama seperti array numerik,kecuali 
// Key-ny adalah string yang kita buat sendiri

$mahasiswa = [
    ["Nama" => "Fajri Ramadhan",
     "Asal" => "Padang",
     "Email" => "fajri@gmail.com",
     "Jurusan" => "Teknik Informatika",
     "Gambar" => "foto1.png"
],
    ["Nama" => "Adrian Kurniawan",
     "Asal" => "Padang",
     "Email" => "adrian@gmail.com",
     "Jurusan" => "Teknik Mesin",
     "Gambar" => "foto2.png"   
],
    ["Nama" => "Rio Ariansyah",
     "Asal" => "Medan",
     "Email" => "rio@gmail.com",
     "Jurusan" => "Teknik Industri",
     "Gambar" => "foto3.png"   
],
    ["Nama" => "Cindy Kapita Sari",
     "Asal" => "Medan",
     "Email" => "cindy@gmail.com",
     "Jurusan" => "Teknik Kimia",
     "Gambar" => "foto4.png"
],
    ["Nama" => "Tiara Dewi Fortuna",
     "Asal" => "Medan",
     "Email" => "tiara@gmail.com",
     "Jurusan" => "Teknik Sipil",
     "Gambar" => "foto5.png"
],
    
];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiswa</title>
</head>
<body>

<h1>Daftar Mahasiswa</h1>
<?php foreach( $mahasiswa as $m ) : ?>
</ul>
    <li>
        <img src="img/<?= $m["Gambar"]; ?>">
    </li>
    <li>Nama: <?= $m["Nama"]; ?></li>
    <li>Asal:<?=  $m["Asal"]; ?></li>
    <li>Email:<?=  $m["Email"]; ?></li>
    <li>Jurusan:<?=  $m["Jurusan"]; ?></li>
</ul>
<?php endforeach;  ?>
    
</body>
</html>
