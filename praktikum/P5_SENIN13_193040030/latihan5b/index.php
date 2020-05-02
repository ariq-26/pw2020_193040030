<?php
   // menghubungkan dengan file php lainnya
   require 'php/functions.php';

   // melakukan query
   $data_baju = query("SELECT * FROM data_baju")
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Data Baju</title>
</head>
<body>
    <div class="container">
        <table border="1" cellspacing="0" cellpadding="10">
            <tr>
                 <th>NO</th>
                 <th>DISPLAY</th>
                 <th>MEREK</th>
                 <th>SIZE</th>
            </tr>
            <?php $i=1?>
            <?php foreach ($data_baju as $baju) : ?>
                <tr>
                    <td><?= $i ?></td>
                    <td><img src="assets/img/<?= $baju["img"]; ?>"></td>
                    <td><?= $baju["merek"]?></td>
                    <td><?= $baju["ukuran"]?></td>
                </tr>
            <?php $i++ ?>
            <?php endforeach; ?>
         </table>
    </div>                                            
</body>
</html>