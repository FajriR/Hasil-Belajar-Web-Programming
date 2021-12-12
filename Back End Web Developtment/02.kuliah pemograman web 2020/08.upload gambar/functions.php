<?php

// jika tidak ada id di url
// if (!isset($_GET['id'])) {
//   header("Location:index.php");
//   exit;
// }

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



function upload()
{
  $nama_file = $_FILES['gambar']['name'];
  $tipe_file = $_FILES['gambar']['type'];
  $ukuran_file = $_FILES['gambar']['size'];
  $error = $_FILES['gambar']['error'];
  $tmp_file = $_FILES['gambar']['tmp_name'];

  // ketika tidak ada gambar yang di pilih
  if ($error == 4) {
    // echo "<script>
    //       alert('pilih gambar terlebih dahulu!');  
    //     </script>";
    // return false;
    return 'nophoto.png';
  }

  // cek ekstensi file
  $daftar_gambar = ['jpg', 'jpeg', 'png'];
  $ekstensi_file = explode('.', $nama_file);
  $ekstensi_file = strtolower(end($ekstensi_file));
  if (!in_array($ekstensi_file, $daftar_gambar)) {
    echo "<script>
          alert('yang anda pilih bukan gambar!');  
        </script>";
    return false;
  }

  // cek type file
  if ($tipe_file != 'image/jpeg' && $tipe_file != 'image/png') {
    echo "<script>
          alert('yang anda pilih bukan gambar!');  
        </script>";
    return false;
  }

  // cek ukuran file maksimal 5mb = 5000000
  if ($ukuran_file > 5000000) {
    echo "<script>
          alert('ukuran file terlalu besar!');  
        </script>";
    return false;
  }

  // lolos pengecekan-siap upload file-generate nama file baru
  $nama_file_baru = uniqid();
  $nama_file_baru .= '.';
  $nama_file_baru .= $ekstensi_file;
  move_uploaded_file($tmp_file, 'img/' . $nama_file_baru);

  return $nama_file_baru;
}



function tambah($data)
{
  $db = koneksi();

  $nama = htmlspecialchars($data['nama']);
  $asal = htmlspecialchars($data['asal']);
  $email = htmlspecialchars($data['email']);
  $jurusan = htmlspecialchars($data['jurusan']);
  // $gambar = htmlspecialchars($data['gambar']);

  // upload gambar
  $gambar = upload();
  if (!$gambar) {
    return false;
  }

  $query = "INSERT INTO 
           mahasiswa
           VALUES
           (null, '$nama','$asal','$email','$jurusan','$gambar');
           ";
  mysqli_query($db, $query) or die(mysqli_error($db));
  return mysqli_affected_rows($db);
}



function hapus($id)
{
  $db = koneksi();

  // menghapus gambar di folder image
  $m = query("SELECT * FROM mahasiswa WHERE id = $id");
  if ($m['gambar'] != 'nophoto.png') {
    unlink('img/' . $m['gambar']);
  }
  
  mysqli_query($db, "DELETE FROM mahasiswa WHERE id = $id") or die(mysqli_error($db));
  return mysqli_affected_rows($db);
}



function ubah($data)
{
  $db = koneksi();

  $id = $data['id'];

  $nama = htmlspecialchars($data['nama']);
  $asal = htmlspecialchars($data['asal']);
  $email = htmlspecialchars($data['email']);
  $jurusan = htmlspecialchars($data['jurusan']);
  $gambar_lama = htmlspecialchars($data['gambar_lama']);

 $gambar = upload();
 if (!$gambar) {
   return false;
 }

 if ($gambar == 'nophoto.png') {
   $gambar = $gambar_lama;
 }

  $query = "UPDATE mahasiswa SET 
           nama ='$nama',
           asal ='$asal',
           email ='$email',
           jurusan ='$jurusan',
           gambar = '$gambar'
           WHERE id = $id";

  mysqli_query($db, $query) or die(mysqli_error($db));
  return mysqli_affected_rows($db);
}



function cari($keyword)
{
  $db = koneksi();

  $query = "SELECT * FROM mahasiswa WHERE 
           nama LIKE '%$keyword%' OR
           asal LIKE '%$keyword%' OR
           email LIKE '%$keyword%' OR
           jurusan LIKE '%$keyword%'
           ";

  $result = mysqli_query($db, $query);
  $rows = [];

  while ($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
  }
  return $rows;
}



function login($data)
{
  $db = koneksi();

  $username = htmlspecialchars($data['username']);
  $password = htmlspecialchars($data['password']);

  // cek dulu username
  if ($user = query("SELECT * FROM users WHERE username = '$username'")) {
    // cek password
    if (password_verify($password, $user['password'])) {
      // set session
      $_SESSION['login'] = true;

      header("Location: index.php");
      exit;
    }
  }
  return [
    'error' => true,
    'pesan' => 'Username / Password Salah.'
  ];
}


// jika username / password kosong
function registrasi($data)
{
  $db = koneksi();

  $username = htmlspecialchars(strtolower($data['username']));
  $password1 = mysqli_real_escape_string($db, $data['password1']);
  $password2 = mysqli_real_escape_string($db, $data['password2']);

  if (empty($username) || empty($password1) || empty($password2)) {
    echo "<script>
            alert('username / password tidak boleh kosong!');
            document.location.href = 'registrasi.php';
         </script>";
    return false;
  }

  // jika username sudah ada
  if (query("SELECT * FROM users WHERE username = '$username'")) {
    echo "<script>
            alert('username sudah terdaftar!');
            document.location.href = 'registrasi.php';
         </script>";
    return false;
  }

  // jika konfirmasi password tidak sesuai
  if ($password1 !== $password2) {
    echo "<script>
            alert('konfirmasi password tidak sesuai!');
            document.location.href = 'registrasi.php';
         </script>";
    return false;
  }

  // jika passowrd < 5 digit
  if (strlen($password1) < 3) {
    echo "<script>
            alert('password terlalu pendek!');
            document.location.href = 'registrasi.php';
         </script>";
    return false;
  }

  // jika username & password sudah sesuai
  // enkripsi password
  $password_baru = password_hash($password1, PASSWORD_DEFAULT);
  // insert ke tabel user
  $query = "INSERT INTO users VALUES
           (null, '$username', '$password_baru')
           ";
  mysqli_query($db, $query) or die(mysqli_error($db));
  return mysqli_affected_rows($db);
}
