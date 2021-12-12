<?php

require 'functions.php';

// cek apakah tambah sudah di tekan
if (isset($_POST["tambah"])) {
  if (tambah($_POST) > 0) {
    echo "<script>
          alert('data berhasil di tambahkan');
          document.location.href = 'index.php';
          </script>";
  } else {
    echo "data gagal di tambahkan!";
  }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tambah Data Mahasiswa</title>
</head>

<body>

  <h3>Form Tambah Data Mahasiswa</h3>
  <form action="" method="POST" enctype="multipart/form-data">
    <ul>
      <li>
        <label>
          Nama :
          <input type="text" name="nama" autofokus required>
        </label>
      </li>
      <li>
        <label>
          Asal :
          <input type="text" name="asal" required>
        </label>
      </li>
      <li>
        <label>
          Email :
          <input type="text" name="email" required>
        </label>
      </li>
      <li>
        <label>
          Jurusan :
          <input type="text" name="jurusan" required>
        </label>
      </li>
      <li>
        <label>
          Gambar :
          <input type="file" name="gambar" class="gambar" onchange="previewImage()">
        </label>
        <img src="img/nophoto.png" width="100px" style="display: block;" class="img-preview">
      </li>
      <li>
        <button type="submit" name="tambah">Tambah Data</button>
      </li>
    </ul>
  </form>

  <script src="js/script.js"></script>


</body>

</html>