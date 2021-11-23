<?php
// array
// variabel yang dapat memiliki banyak nilai
// elemen pada array boleh memiliki tipe data yg berbeda
// pasangan antara key dan value
// keyny adalah index yang dimulai dari 0

// membuat array
// cara lama
$hari = array ("Senin", "Selasa", "Rabu");
// cara baru
$bulan = ["Januari", "Februari", "Maret"];
$arr1 = [123, "tulisan", false];

// menampilkan array ke layar
// 1.var_dump() 2. print_r()

// var_dump($hari);
// print "<br>";
// print_r($bulan);

// menampilkan 1 elemen pada array
// echo $arr1[1];
// echo "<br>";
// echo $bulan[1];

// menambahkan elemen baru pada array
var_dump($hari);
$hari[] = "kamis";
$hari[] = "jum'at";
echo "<br>";
var_dump($hari);


?>