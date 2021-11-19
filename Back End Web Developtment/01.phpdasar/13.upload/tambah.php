<?php  
require 'functions.php';

// cek apakah tombol submit sudah di tekan atau belum
if ( isset($_POST["submit"])) {

    

    // cek apakah data berhasil di tambahkan atau tidak
    if ( tambah($_POST) > 0 ) {
        echo "
             <script>
                 alert('data berhasil di tambahkan');
                 document.location.href = 'index.php'
             </script>
        ";
    } else {
        echo "
            <script>
                alert('data gagal di tambahkan');
                document.location.href = 'index.php'
            </script>
        ";
    }
}

?>

<!-- contoh tulisan hack
<div style=position:absolute;top:0;bottom:0;left:0;right:0;background-color:black;font-size:100px;color:red;text-align:center;>HAHAH ANDA TELAH DI HACK</div> -->


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data Mahasiswa</title>
</head>
<body>

<h1>Tambah Data Mahasiswa</h1>

<form action="" method="post" enctype="multipart/form-data">
    <ul>
        <li>
            <label for="nama">Nama :</label>
            <input type="text" name="nama" id="nama"
            required>
        </li>
        <li>
            <label for="asal">Asal :</label>
            <input type="text" name="asal" id="asal">
        </li>
        <li>
            <label for="email">Email :</label>
            <input type="text" name="email" id="email">
        </li>
        <li>
            <label for="jurusan">Jurusan :</label>
            <input type="text" name="jurusan" id="jurusan">
        </li>
        <li>
            <label for="gambar">Gambar :</label>
            <input type="file" name="gambar" id="gambar">
        </li>
       
        <li>
            <button type="submit" name="submit">Tambah Data</button>
        </li>
    </ul>

</form>
    
</body>
</html>