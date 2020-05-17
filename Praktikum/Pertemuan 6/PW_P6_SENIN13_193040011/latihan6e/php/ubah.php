<?php
require 'functions.php';

$id = $_GET['id'];
$elk = query("SELECT + FROM elektronik WHERE id = $id")[0];

if (isset($_POST['ubah'])) {
    if (tambah($_POST) > 0) {
        echo "<script>
                    alert('Data Berhasil diubah!');
                    document.location.href = 'admin.php';
                <script>";
    } else {
        echo "<script>
                    alert('Data Gagal diubah!');
                    document.location.href = 'admin.php';
                <script>";
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>193040011</title>
</head>
<body>
    <title>Form Ubah Data Alat Elektronik</title>
    <form action="" method="post">
    <input type="hidden" name="id" id="id" value="<?= $elk['id'] ?>">
        <ul>
            <li>
                <label for="id">ID :</label><br>
                <input type="text" name="id" id="id" require><br><br>
            </li>
            <li>
                <label for="nama_elektronik">Nama Elektronik :</label><br>
                <input type="text" name="nama_elektronik" id="nama_elektronik" require value="<?= $elk['nama_elektronik'] ?>"><br><br>
            </li>
            <li>
                <label for="harga">Harga :</label><br>
                <input type="text" name="harga" id="harga" require><br><br>
            </li>
            <li>
                <label for="gambar">Gambar :</label><br>
                <input type="text" name="gambar" id="gambar" require><br><br>
            </li>
            <br>
            <button type="submit" name="ubah">Ubah Data!</button>
            <button try="submit">
                <a href="indek.php" style="text-decoration: none; color: black;"></a>
            </button>
        </ul>
    </form>
</body>
</html>