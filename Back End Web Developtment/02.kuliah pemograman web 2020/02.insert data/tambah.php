<?php 
require 'functions.php';

// cek apakah tambah sudah di tekan
if (isset($_POST["tambah"])) {
  if(tambah($_POST) > 0 ) {
    echo "<script>
          alert('data berhasil di tambahkan');
          document.location.href = 'latihan3.php';
          </script>
          ";
  } else {
    echo "<script>
         alert('data berhasil di tambahkan');
         document.location.href = 'latihan3.php';
         </script>
         ";
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
  <form action="" method="POST">
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
          <input type="text" name="gambar" required>
        </label>
      </li>
      <li>
        <button type="submit" name="tambah">Tambah Data</button>
      </li>
    </ul>
  </form>


</body>

</html>