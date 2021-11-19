<?php 
// koneksi ke data base
$db = mysqli_connect("localhost", "root", "", "phpdasar");

function query($query) {
    global $db;
    $result = mysqli_query($db, $query);
    $rows = [];
    while( $row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}


function tambah($data) {
    global $db;
    
    $nama = htmlspecialchars($data["nama"]);
    $asal = htmlspecialchars($data["asal"]);
    $email = htmlspecialchars($data["email"]);
    $jurusan = htmlspecialchars($data["jurusan"]);
    
    // upload gambar
    $gambar = upload();
    if( !$gambar ) {
        return false;
    }
   

      
    $query = "INSERT INTO  mahasiswa
     VALUES 
    ('', '$nama', '$asal', '$email', '$jurusan', '$gambar')
      ";
    mysqli_query($db, $query);


    return mysqli_affected_rows($db);

}


function upload () {
    
    $namaFile = $_FILES['gambar']['name'];
    $ukuranFile = $_FILES['gambar']['size'];
    $error = $_FILES['gambar']['error'];
    $tmpName = $_FILES['gambar']['tmp_name'];

    // cek apakah tidak ada gambar yang di upload
   if( $error === 4) {
       echo "<script>
            alert('pilih gambar terlebih dahulu');
       </script>";
       return false;
   }

    // cek apakah yang di upl[oad adalah gambar
    $ekstensiGambarValid = ['jpg', 'jpeg', 'png'];
    $ekstensiGambar = explode('.', $namaFile);
    $ekstensiGambar = strtolower(end($ekstensiGambar));
    if (!in_array($ekstensiGambar, $ekstensiGambarValid)) {
        echo "<script>
            alert('yang anda upload bukan gambar');
       </script>";
       return false;

    }

    // cek jika ukurannya terlalu besar
    if ( $ukuranFile > 1000000 ) {
        echo "<script>
        alert('ukuran gambar terlalu besar');
   </script>";
   return false;

    }

    // lolos pengecekan, gambar siap di upload
    // generate nama gambar baru
   $namaFileBaru = uniqid();
   $namaFileBaru .= '.';
   $namaFileBaru .= $ekstensiGambar;

   move_uploaded_file($tmpName, 'img/' . $namaFileBaru);

   return $namaFileBaru;

}




function hapus($id) {
    global $db;
    mysqli_query($db, "DELETE FROM mahasiswa WHERE id = $id");

    return mysqli_affected_rows($db);

}


function ubah($data) {
    global $db;

    $id = $data["id"];
    
    $nama = htmlspecialchars($data["nama"]);
    $asal = htmlspecialchars($data["asal"]);
    $email = htmlspecialchars($data["email"]);
    $jurusan = htmlspecialchars($data["jurusan"]);
    $gambarLama = htmlspecialchars($data["gambarLama"]);

    // cek apakah user pilih gambar baru atau tidak
    if ( $_FILES['gambar']['error'] === 4 ) {
        $gambar = $gambarLama;
    } else {
        $gambar = upload();
    }

    // $gambar = htmlspecialchars($data["gambar"]);

      
    $query = "UPDATE mahasiswa SET
             nama = '$nama',
             asal = '$asal',
             email = '$email',
             jurusan = '$jurusan',
             gambar = '$gambar'
             WHERE id = $id
    ";
    mysqli_query($db, $query);


    return mysqli_affected_rows($db);

}




// function cari($keyword) {
//     $query = "SELECT * FROM mahasiswa
//              WHERE
//              nama LIKE '%keyword%' OR
//              asal LIKE '%keyword%' OR
//              email LIKE '%keyword%' OR
//              jurusan LIKE '%keyword%' 
   
//              ";
//     return query($query);

// }


function cari($keyword) {
    global $db;

    $query = "SELECT * FROM mahasiswa
           WHERE
           nama LIKE '%$keyword%' OR
           asal LIKE '%$keyword%' OR
           email LIKE '%$keyword%' OR
           jurusan LIKE '%$keyword%' 
           
           ";
    $result=mysqli_query($db, $query);
    
    $rows =[];
    while( $row=mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    } return $rows;
}


function registrasi($data) {
    global $db;

    $username = strtolower(stripcslashes($data["username"]));
    $password = mysqli_real_escape_string($db, $data["password"]);
    $password2 = mysqli_real_escape_string($db, $data["password2"]);

    // cek username sudah ada atau belum
    $result = mysqli_query($db, "SELECT username FROM users WHERE username = '$username'");

    if( mysqli_fetch_assoc($result)) {
        echo "<script>
              alert('username sudah terdaftar');
              </script>";
              return false;
    }


    // cek konfirmasi password
    if ( $password !== $password2) {
        echo "<script>
          alert('konfirmasi password tidak sesuai!');
        </script>";
        return false;
    }

    // enkripsi password
    $password = password_hash($password, PASSWORD_DEFAULT);
    // var_dump($password); die;

    // tambahkan userbaru ke data base
    mysqli_query($db, "INSERT INTO users VALUES('', '$username', '$password')");
     return mysqli_affected_rows($db);

}


?>