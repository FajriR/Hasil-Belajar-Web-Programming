<!-- beda get dan post / get bisa di lihat di link sedangka post tidak -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POST</title>
</head>
<body>

<?php if( isset($_POST["Submit"])) : ?>
<h1>Halo, Selamat Datang <?= $_POST["Nama"]; ?></h1>
<?php  endif; ?>

<form action="" method="post">
    Maukan Nama
    <input type="text" name="Nama">
    <br>
    <button type="submit" name="Submit">Kirim</button>
</form>
    
</body>
</html>