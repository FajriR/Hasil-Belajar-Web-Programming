<?php   

// variable scope / lingkup variable
// $x = 10;

// function tampilx() {
//     // $x = 20;
//     global $x;
//     echo $x;
// }

// tampilx();
// echo "<br>";
// echo $x;



// SUPERGLOBAL
// $_GET, $_POST, $_REQUEST, $_SESSION, $_COOKIE, $_SERVER, $_ENV
// variable global milik PHP
// merupakan array associative

// $_GET (di tulis di link scr lgsg)

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
    <title>GET</title>
</head>
<body>

<h1>Daftar Mahasiswa</h1>

<ul>
<?php foreach( $mahasiswa as $m ) : ?>
<li>
   <a href="latihan2get.php?Nama=<?= $m["Nama"]; ?>&Asal=<?= $m["Asal"]; ?>&Email=<?= $m["Email"]; ?>&Jurusan=<?= $m["Jurusan"]; ?>&Gambar=<?= $m["Gambar"]; ?>"><?= $m["Nama"]; ?></a>
</li>

<?php endforeach;?>
</ul>
<a href=""></a>
    
</body>
</html>
