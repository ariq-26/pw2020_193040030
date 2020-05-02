<?php
// menghubungkan dengan file php lainnya
require 'functions.php';

// melakukan query
$data_baju = query("SELECT * FROM data_baju");

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <link rel="stylesheet" href="../css/admin.css">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>Admin</title>
</head>

<body>
  <a href="../index.php"><button>Kembali ke INDEX</button></a>
    <table border="1" cellpadding="13" cellspacing="2">
      <tr class="thead">
        <th colspan="8">
          <h1>Data Baju</h1>
        </th>
      </tr>
      <tr class="title_table">
        <th>No</th>
        <th>Opsi</th>
        <th>Gambar</th>
        <th>Merek</th>
        <th>Ukuran</th>
      </tr>
      <?php $i = 1 ?>
      <?php foreach ($data_baju as $b) : ?>
        <tr>
          <td class="no"><?= $i ?></td>
          <td class="opsi">
            <a href="" class="ubah"><button>Ubah</button></a>
            <a href="" class="hapus"><button>Hapus</button></a>
          </td>
          <td class="foto"><img src="../assets/img/<?= $b['img']; ?>"></td>
          <td class="merek"><?= $b["merek"]; ?></td>
          <td class="ukuran"><?= $b["ukuran"]; ?></td>
        </tr>
        <?php $i++; ?>
      <?php endforeach; ?>
    </table>
</body>
</html>