<?php
//menghubungkan dengan file php lainnya
require 'php/functions.php';
//melakukan query
$elektronik = query("SELECT * FROM elektronik")



?>

<html>

<head>
  <meta charset="UTF-8">
  <title>193040011</title>
</head>

<body>
  <div class="container">
    <table cellpadding="10" cellspacing="0" border="1">
      <tr>
        <th>ID</th>
        <th>Nama_Elektronik</th>
        <th>Harga</th>
        <th>Gambar</th>
      </tr>
      <?php $i = 1 ?>
      <?php foreach ($elektronik as $elk) : ?>
        <tr>
          <td><?= $i; ?></td>
          <td><button class="tombol-kembali"><a href="php/detail.php?id=<?= $elk['id'] ?>">Lihat</a></button></td>
          <td><a href="php/login.php">
              <button type="">Masuk ke halaman admin</button>
            </a>
          </td>
          <td><img width="90px" src="assets/img/<?= $elk["Gambar"]; ?>" alt=""></td>
        </tr>
      <?php endforeach;  ?>
    </table>
  </div>
</body>

</html>