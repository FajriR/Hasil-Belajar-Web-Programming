<?php

//  ini adalah komentar
/* ini adalah komentar */

// Standart Output
// echo, print 
// print_r(untuk mencetak isi array)
// var_dump(untuk melihat isi variabel)

// echo "Fajri Ramadhan";
// print "Fajri Ramadhan";
// print_r("Fajri Ramadhan");
// var_dump("Fajri ramadhan");

// Penulisan sintaks PHP
// 1.PHP di dalam HTML
// 2.HTML di dalam PHP

// variabel dan tipe data

// $nama = "Fajri Ramadhan";

// operator

//1. aritmatika
// + - * / %
// $x = 10;
// $y = 20;
// echo $x * $y;   200

// 2. penggabung string / concatenation / concat
// .
// $nama_depan = "Fajri";
// $nama_belakang = "Galih;
// echo $nama_depan . " " . $nama_belakang;

// 3.Assigntment
// =, +=, -+, *=, /=, %=, .=
// $x = 1;
// $x -= 5;
// echo $x;
// $nama = "Fajri";
// $nama .= " ",
// $nama .= "Galih";
// echo $nama;

// 4.Perbandingan
// <, >, <=, >=, ==, !=
// var_dump(1 == "1");

// 5,identitas
// ===, !==
// var_dump(1 == "1");

// 6.Logika
// &&, ||, !
// $x = 30;
// var_dump($x < 20 || $x %2 == 0);




?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar PHP</title>
</head>
<body>
    <h1> Halo, Selamat Datang <?php print $nama;?></h1>
    <p><?php  echo "ini adalah paragraf";?></p>
    
</body>
</html>