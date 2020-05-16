<?php
session_start();

if (!isset($_SESSION["username"])) {
  header("loaction: login.php");
  exit;
}

require 'functions.php';

$id = $_GET['id'];
$data_baju = query("SELECT * FROM data_baju WHERE id = $id")[0];

if (isset($_POST['ubah'])) {
  if (ubah($_POST) > 0) {
    echo "<script>
            alert('Data Berhasil diubah!');
            document.location.href='admin.php';
          </script>";
  } else {
    echo "<script>
    alert('Data Gagal diubah!');
    document.location.href='admin.php';
  </script>";
  }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ubah Data Baju</title>
</head>

<body>
  <table border="1" cellspacing="0" cellpadding="5">
    <form action="" method="post">

      <th colspan="3">
        <h3>Ubah Data Baju Anda</h3>
      </th>

          <input type="hidden" name="id" id="id" value="<?= $b['id']; ?>">
      <tr>
        <td>
          <label for="img">Foto</label>
        </td>
        <td>
        </td>
        <td>
          <input type="text" name="img" id="img" required value="<?= $data_baju['img']; ?>">
        </td>
      </tr>
      <tr>
        <td>
          <label for="merek">Merek</label>
        </td>
        <td>
        </td>
        <td>
          <input type="text" name="merek" id="merek" required value="<?= $data_baju['merek']; ?>">
        </td>
      </tr>
      <tr>
        <td>
          <label for="ukuran">Size</label>
        </td>
        <td>
        </td>
        <td>
          <input type="text" name="ukuran" id="ukuran" required value="<?= $data_baju['ukuran']; ?>">
        </td>
      </tr>
      <tr>
        <td colspan="3">
          <button type="submit" name="ubah">Ubah Data!</button>
          <button type="submit">
            <a href="../index.php" style="text-decoration: none; color: black;">Kembali</a>
          </button>
        </td>
      </tr>
    </form>
  </table>

</body>

</html>