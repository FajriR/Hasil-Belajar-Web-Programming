<?php 

session_start();

if( !isset($_SESSION["login"])) {
    header("Location: login.php");
    exit;
}

require 'functions.php';
$mahasiswa = query("SELECT * FROM mahasiswa ");
// ORDER BY id ASC/DESC

// tombol cari di klik
if( isset($_POST["cari"])) {
    $mahasiswa = cari($_POST["keyword"]);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Admin</title>
    <style>
        .loading {
            width:100px;
            position:absolute;
            top:120px;
            z-index: -1;
            left: 250px;
            display:none;
        }
    </style>
    
    <script src="js/jquery-3.6.0.min.js"></script>
    <script src="js/script.js"></script>
    
</head>
<body>

<a href="logout.php">Logout</a>

<h1>Daftar Mahasiswa</h1>

<a href="tambah.php">Tambah Data Mahasiswa</a>
<br><br>

<form action="" method="post">

<input type="text" name="keyword" size="40" autofocus="" placeholder="masukan keyword pencarian" autocomplete="off" id="keyword">
<button type="submit" name="cari" id="tombol-cari">Cari</button>

<img src="img/loading.gif" class="loading">

</form>

<br>

<div id="container">
<table border="1" cellpadding="10" cellspacing="0">
    <tr>
        <th>No.</th>
        <th>Aksi</th>
        <th>Gambar</th>
        <th>Nama</th>
        <th>Asal</th>
        <th>Email</th>
        <th>Jurusan</th>
    </tr>

<?php $nomor = 1; ?>
<?php  foreach( $mahasiswa as $row ) : ?>
    <tr>
        <td><?= $row["id"];?></td>
        <td>
            <a href="ubah.php?id=<?= $row["id"]; ?>">Ubah</a>
            <a href="hapus.php?id=<?= $row["id"]; ?>" onclick="return confirm('yakin?');">Hapus</a>
        </td>
        <td><img src="img/<?= $row["gambar"]; ?>" width="100"></td>
        <td><?= $row["nama"]; ?></td>
        <td><?= $row["asal"]; ?></td>
        <td><?= $row["email"]; ?></td>
        <td><?= $row["jurusan"]; ?></td>  
    </tr>
<?php $nomor++; ?>
<?php endforeach; ?>


</table>
</div>

</body>
</html>