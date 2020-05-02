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
        <?php foreach ($data_baju as $baju) : ?>
            <p class="merek">
                <a href="php/detail.php?id=<?= $baju['id'] ?>">
                    <?= $baju["merek"] ?>
                </a>
            </p>
         <?php endforeach; ?>
    </div>                                            
</body>
</html>