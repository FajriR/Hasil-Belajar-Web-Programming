<?php

// id int primary key auto_increment
// Nama varchar(100)
// Asal varchar(20)
// Email varchar(100)
// Jurusan varchar(100)
// Gambar varvhar(100)



// cd
// e:
// cd belajar programing
// cd xampp
// cd mysql
// cd bin
// mysql -u root -p


// use phpdasar:
// show tables;
// desribe mahasiswa;
// select * from mahasiswa:
// insert into mahasiswa values (' ','Fajri Ramadhan', 'Padang', fajri@gmail.com', 'Teknik Informatika', 'foto1.png');
// select * from mahasiswa;


// E:\belajar programing\XAMPP\mysql\bin>mysql -u root -p
// MariaDB [(none)]>  create database phpdasar;
// MariaDB [(none)]> use phpdasar;
// MariaDB [phpdasar]> create table mahasiswa (
//     -> id int primary key auto_increment,          
//     -> nama varchar(100),
//     -> asal varchar(100),
//     -> email varchar(100),
//     -> jurusan varchar(100),
//     -> gambar varchar(100)
//     -> );

// cara ganti data        update mahasiswa set jurusan = 'Teknik Perminyakan' where id = 3
// cara delete data       delete from mahasiswa where id = 3;
// cara delete tabel      drop table mahasiswa;
// cara delete database   drop database phpdasar;

// show databases;


?>