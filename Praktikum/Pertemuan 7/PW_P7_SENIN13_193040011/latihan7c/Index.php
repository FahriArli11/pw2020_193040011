<?php
//menghubungkan dengan file php lainnya
require 'php/functions.php';
//melakukan query
$elk = query("SELECT * FROM elektronik")



?>

<html>

<head>
  <meta charset="UTF-8">
  <title>193040011</title>
</head>

<body>
  <div class="container">
    <?php foreach ($elektronik as $elk) : ?>
      <img width="90px" src="assets/img/<?= $elk["Gambar"]; ?>" alt="">
      <button class="tombol-kembali"><a href="php/detail.php?id=<?= $elk['id'] ?>">Lihat</a></button>

      </p>
      <a href="php/login.php">
        <button type="">Masuk ke halaman admin</button>
      </a>
    <?php endforeach;  ?>
    </table>
</body>

</html>