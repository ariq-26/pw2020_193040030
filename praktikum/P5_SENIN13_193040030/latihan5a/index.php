<?php
   //Melakukan koneksi ke database
   $conn = mysqli_connect("localhost", "root", "") or die("Koneksi ke DB gagal");
    //  Memilih database
    mysqli_select_db($conn, "tubes_193040030") or die("Database Salah!");  
    // query mengambil objek dari tabel dalam database
    $result = mysqli_query($conn, "SELECT * FROM data_baju");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" type="text/css" href="css/style.css">    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Latihan 5a</title>
</head>
<body>
    <table border="1" cellspacing="0" cellpadding="5" width="90%">
            <tr bgcolor="#88f7f2">
                <th colspan="7" ><h1>Entraight.co Store</h1></th>
            </tr>
       <tr class="title_table">
            <th>NO</th>
            <th>DISPLAY</th>
            <th>MEREK</th>
            <th>SIZE</th>

       </tr>
       <?php $i=1?>
       <?php while($row = mysqli_fetch_assoc($result)) : ?>
       <tr>

            <td class="no"><?= $i ?></td>
            <td class="display"><img src="assets/img/<?= $row['display']; ?>"></td>
            <td class="merek"><?= $row["merk"]?></td>
            <td class="size"><?= $row['size_guide']?>"></td>
            
        </tr>
        <?php $i++ ?>
       <?php endwhile; ?>
    </table>                                              
</body>
</html>