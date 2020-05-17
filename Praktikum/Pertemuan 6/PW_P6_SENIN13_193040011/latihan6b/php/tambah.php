<?php
require 'functions.php';

if (isset($_POST['tambah'])) {
    if (tambah($_POST) > 0) {
        echo "<script>
                    alert('Data Berhasil ditambahkan!');
                    document.location.href = 'admin.php';
                <script>";
    } else {
        echo "<script>
                    alert('Data Gagal ditambahkan!');
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
    <h3>Form Tambah Data Alat Elektronik</h3>
    <form action="" method="post">
        <ul>
            <li>
                <label for="id">ID :</label><br>
                <input type="text" name="id" id="id" require><br><br>
            </li>
            <li>
                <label for="nama_elektronik">Nama Elektronik :</label><br>
                <input type="text" name="nama_elektronik" id="nama_elektronik" require><br><br>
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
            <button type="submit" name="tambah">Tambah Data!</button>
            <button try="submit">
                <a href="indek.php" style="text-decoration: none; color: black;"></a>
            </button>
        </ul>
    </form>
</body>
</html>