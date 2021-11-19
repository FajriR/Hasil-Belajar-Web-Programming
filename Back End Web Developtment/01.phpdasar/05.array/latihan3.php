<?php

$mahasiswa = [
    ["Fajri Ramadhan", "1234567", "Teknik Informatika", "fajri@gmail.com"],
    ["Adrian Kurniawan", "1234567", "Teknik Mesin", "Adrian@gmail.com"],
    ["Rio Ariansyah", "1234567", "Teknik Industri", "Rio@gmail.com"]
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

<?php foreach( $mahasiswa as $m ) :  ?>
<ul>
    <li>Nama:<?=  $m[0]; ?></li>
    <li>NISN:<?=  $m[1]; ?></li>
    <li>Jurusan<?=  $m[2]; ?></li>
    <li>Email<?=  $m[3]; ?></li>
</ul>
<?php endforeach;  ?>


    
</body>
</html>