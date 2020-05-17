<?php
// menghubungkan dengan file php lainnya
require 'functions.php';

if (isset($_GET['cari'])) {
    $keyword = $_GET['keyword'];
    $elektronik = query("SELECT * FROM elektronik WHERE
                id LIKE '%keyword%' OR
                nama_elektronik LIKE '%keyword%' OR
                harga LIKE '%keyword%' OR
                gambar LIKE '%keyword%' OR ");
} else {
    $elektronik = query("SELECT * FROM elektronik");
}

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
    <form action="" method="get">
        <input type="text" name="keyword" autofocus>
        <button type="submit" name="cari">Cari!</button>
    </form>
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
                    <a href="ubah.php?id=<? $elk['id'] ?>"><button>Ubah</button></a>
                    <a href="hapus.php?id=<? $elk['id'] ?>" onclick="return confirm('Hapus Data??')"><button>Hapus</button></a>
                </td>
                <td><img src="../assets/img/<?= $elk['img']; ?>" alt=""></td>
                <td><?= $elk['id']; ?></td>
                <td><?= $elk['nama_elektronik']; ?></td>
                <td>Rp. <?= $elk['harga']; ?></td>
                <td><?= $elk['gambar']; ?></td>
            </tr>
            <?php $i++; ?>
        <?php endforeach; ?>
    </table>
</body>
</html>