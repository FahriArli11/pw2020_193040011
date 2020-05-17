<?php
//menghubungkan dengan file php lainnya
require 'php/functions.php';
//melakukan query
$elektronik = query("SELECT * FROM elektronik")



?>

<html>

<head>
  <title>Index</title>
</head>

<body>
  <div class="container">
    <table cellpading="10" cellspacing="0" border="1">
      <tr>
        <th>Id</th>
        <th>Elektronik</th>
        <th>Harga</th>
        <th>Gambar</th>
      </tr>
      <?php $i = 1 ?>
      <?php foreach ($elektronik as $elk) : ?>
        <tr>
          <td><?= $i ?></td>
          <td><?= $elk["Nama_Elektronik"]; ?></td>
          <td><?= $elk["Harga"]; ?></td>
          <td><img width="60" src="assets/img/<?= $mkn["Gambar"]; ?>"></td>
        </tr>
        <?php $i++ ?>
      <?php endforeach;  ?>
    </table>
</body>

</html>