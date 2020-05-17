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
      <p class="name">
        <a href="php/detail.php?id=<?= $elk['id'] ?>">
          <?= $elk['nama'] ?>
        </a>
      </p>

    <?php endforeach;  ?>
  </div>
</body>

</html>