<?php 
// koneksi ke database
$db = mysqli_connect("localhost", "root", "", "phpdasar");

// ambil data dari tabel mahasiswa/ query data mahasiswa
$result = mysqli_query($db, "SELECT * FROM mahasiswa");
// if( !$result) {
//     echo mysqli_error($db);
// }

// ambil data (fetch) mahasiswa dar objek result
// 1.mysqli_fetch_row() = mengembalikan array numerik(angka)
     // $m = mysqli_fetch_row($result);
     // var_dump($m[3]);

// 2.mysqli_fetch_assoc() =  mengembalikan array associative(abjad)
    // $m = mysqli_fetch_assoc($result);
    // var_dump($m["jurusan"]);

// 3.mysqli_fetch_array() = mengembalikan keduanya(angka & abjad)
    // $m = mysqli_fetch_array($result);
    // var_dump($m["asal"]);

// 4.mysqli_fetch_object()
     // $m = mysqli_fetch_object($result);
    // var_dump($m->email);


// while( $m = mysqli_fetch_assoc($result) ) {
//     var_dump($m);
// };


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Admin</title>
</head>
<body>

<h1>Daftar Mahasiswa</h1>

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
<?php  while ( $row = mysqli_fetch_assoc($result)) : ?>
    <tr>
        <td><?= $row["id"];?></td>
        <td>
            <a href="">Ubah</a>
            <a href="">Hapus</a>
        </td>
        <td><img src="img/<?= $row["gambar"]; ?>" width="100"></td>
        <td><?= $row["nama"]; ?></td>
        <td><?= $row["asal"]; ?></td>
        <td><?= $row["email"]; ?></td>
        <td><?= $row["jurusan"]; ?></td>  
    </tr>
<?php $nomor++; ?>
<?php endwhile; ?>



</table>


</body>
</html>