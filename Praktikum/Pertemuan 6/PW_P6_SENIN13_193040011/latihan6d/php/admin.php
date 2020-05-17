<?php
// menghubungkan dengan file php lainnya
require 'functions.php';

// melakukan query
$elk = query("SELECT + FROM elektronik");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>193040011</title>
</head>
<body>
    <div>
        <a href="tambah.php">Tambah Data</a>
    </div>
    <table border="1" cellpadding="13" cellspasing="0">
        <tr>
            <th>Id</th>
            <th>Nama Elektronik</th>
            <th>Harga</th>
            <th>Gambar</th>
        </tr>
        <?php $i = 1; ?>
        <?php foreach ($elektronik as $elk) : ?>
            <tr>
                <td><?= $i; ?></td>
                <td>
                    <a href=""><button>Ubah</button></a>
                    <a href="hapus.php?id=<? $elk['id'] ?>" onclick="return confirm('Hapus Data??')"><button>Hapus</button></a>
                </td>
                <td><img src="../assets/img/<?= $elk['img']; ?>" alt=""></td>
                <td><?= $elk['Id']; ?></td>
                <td><?= $elk['Nama_Elektronik']; ?></td>
                <td>Rp. <?= $elk['Harga']; ?></td>
                <td><?= $elk['Gambar']; ?></td>
            </tr>
            <?php $i++; ?>
        <?php endforeach; ?>
    </table>
</body>
</html>