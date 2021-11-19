<?php

function salam( $waktu = "Datang", $nama = "Admin") {
    return "Sealamat $waktu, $nama!";
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latiham Function</title>
</head>
<body>
    <h1><?= salam("pagi"); ?></h1>
    
</body>
</html>