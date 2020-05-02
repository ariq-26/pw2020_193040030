<?php

    // mengecek apakah id yang dikirim
    // jika tidak maka akan dikembalaikan ke halaman index.php
    if (!isset($_GET['id'])) {
        header("location: ../index.php");
        exit;
    }

    require 'functions.php';

    //mengambil id dr url
    $id = $_GET['id'];

    //melakukan query dengan parameter id yang diambil dari url
    $data_baju = query("SELECT * FROM data_baju WHERE id = $id")[0];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Data Baju</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <div class="gambar">
            <img src="../assets/img/<?= $data_baju["img"]; ?>">
        </div>
        <div class="keterangan">
            <p><?= $data_baju["merek"]; ?></p>
            <p><?= $data_baju["ukuran"]; ?></p>
        </div>

        <button class="tombol-kembali"><a href="../index.php">Back</a></button>
    </div>
</body>
</html>