<?php
// koneksi ke database dan pilih database
$db = mysqli_connect('localhost', 'root', '', 'phpdasar');

// query isi tabel mahasiswa
$result = mysqli_query($db, "SELECT * FROM mahasiswa");
// ubah data ke dalam array

// array numerik
// $row = mysqli_fetch_row($result);
// var_dump($row);

// array associative
// $row = mysqli_fetch_assoc($result);
// var_dump($row);

// array keduanya
// $row = mysqli_fetch_array($result);
// var_dump($row);

$rows = [];
while ($row = mysqli_fetch_assoc($result)) {
  $rows[] = $row;
}

//  tampung ke variabel mahasiswa
$mahasiwa = $rows;

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

  <h3>Daftar Mahasiswa</h3>

  <table border="1" cellpadding="10" cellspacing="0">
    <tr>
      <th>#</th>
      <th>Gambar</th>
      <th>Asal</th>
      <th>Nama</th>
      <th>Email</th>
      <th>Jurusan</th>
      <th>Aksi</th>
    </tr>
    <?php $i = 1;
    foreach ($mahasiwa as $m) : ?>
      <tr>
        <td><?= $i++; ?></td>
        <td><img src="img/<?= $m['gambar']; ?>""></td>
      <td><?= $m['asal']; ?></td>
      <th><?= $m['nama']; ?></th>
      <th><?= $m['email']; ?></th>
      <th><?= $m['jurusan']; ?></th>
      <td>
        <a href="">Ubah</a> | <a href="">Hapus</a>
      </td>
    </tr>
    <?php endforeach; ?>
  </table>

</body>

</html>