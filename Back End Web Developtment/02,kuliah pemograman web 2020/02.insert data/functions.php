<?php

function koneksi()
{
  return mysqli_connect('localhost', 'root', '', 'phpdasar');
}

function query($query)
{
  $db = koneksi();
  $result = mysqli_query($db, $query);

  // jika hasilnya hanya 1 data
  if (mysqli_num_rows($result) == 1) {
    return mysqli_fetch_assoc($result);
  }

  $rows = [];
  while ($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
  }
  return $rows;
}


function tambah($data)
{
  $db = koneksi();

  $nama = htmlspecialchars($data['nama']);
  $asal = htmlspecialchars($data['asal']);
  $email = htmlspecialchars($data['emai']);
  $jurusan = htmlspecialchars($data['jurusan']);
  $gambar = htmlspecialchars($data['gambar']);

  $query = "INSERT INTO 
           mahasiswa
           VALUES
           (null, '$nama','$asal','$email','$jurusan',$gambar);
           ";
  mysqli_query($db, $query);
  echo mysqli_error($db);
  return mysqli_affected_rows($db);
}
