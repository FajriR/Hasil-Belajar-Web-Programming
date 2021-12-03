<?php
require '../functions.php';
// $keyword = $_GET['keyword'];
$mahasiswa = cari($_GET['keyword']);
// echo $keyword;
?>

<table border="1" cellpadding="10" cellspacing="0">
  <tr>
    <th>#</th>
    <th>Gambar</th>
    <th>Nama</th>

  </tr>

  <?php if (empty($mahasiswa)) : ?>
    <tr>
      <td colspan="4">
        <p style="color : red; font-style:italic;">data mahasiswa tidak di temukan</p>
      </td>
    </tr>
  <?php endif; ?>

  <?php $i = 1;
  foreach ($mahasiswa as $m) : ?>
    <tr>
      <td><?= $i++; ?></td>
      <td><img src="img/<?= $m['gambar']; ?>""></td>
      <th><?= $m['nama']; ?></th>
      <td>
        <a href=" detail.php?id=<?= $m['id']; ?>">lihat detail</a>
      </td>
    </tr>
  <?php endforeach; ?>
</table>