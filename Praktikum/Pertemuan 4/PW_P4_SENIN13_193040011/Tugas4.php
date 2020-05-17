<?php
$alat = [
    [
        "gambar" => "ac.jpg",
        "alat elektronik" => "ac",
        "alamat" => "jln. taman sari",
        "harga" => "Rp.2.000.000"
    ],
    [
        "gambar" => "gitar.jpg",
        "alat elektronik" => "gitar",
        "alamat" => "soreang",
        "harga" => "Rp.6.000.000"
    ],
    [
        "gambar" => "handphone.jpg",
        "alat elektronik" => "handphone",
        "alamat" => "Batam",
        "harga" => "Rp.30.500.000"
    ],
    [
        "gambar" => "komputer.jpg",
        "alat elektronik" => "komputer",
        "alamat" => "Jln. mangga dua raya",
        "harga" => "Rp.15.700.000"
    ],
    [
        "gambar" => "kulkas.jpg",
        "alat elektronik" => "kulkas",
        "alamat" => "jln. Taman sari",
        "harga" => "Rp2.500.000"

    ],
    [
        "gambar" => "laptop.jpg",
        "alat elektronik" => "laptop",
        "alamat" => "jln. Taman Sari",
        "harga" => "Rp.26.770.000"
    ],
    [
        "gambar" => "mesin cuci.jpg",
        "alat elektronik" => "mesin cuci",
        "alamat" => "jln. Taman Sari",
        "harga" => "Rp.1.250.000"
    ],
    [
        "gambar" => "ps.jpg",
        "alat elektronik" => "ps",
        "alamat" => "jln. Taman Sari",
        "harga" => "Rp.6.999.000"
    ],
    [
        "gambar" => "speaker.jpg",
        "alat elektronik" => "speaker",
        "alamat" => "jln. Taman Sari",
        "harga" => "Rp.560.000"
    ],
    [
        "gambar" => "tv.jpeg",
        "alat elektronik" => "tv",
        "alamat" => "jln. Taman Sari",
        "harga" => "Rp.2.600.000"
    ],
];
?>

<html>

<head>
    <title>Tugas4_193040011</title>
</head>
<style>
    body {
        background-color: white;
        padding-left: 50px;
    }

    table {
        background-color: lightblue;
        border: 1px solid black;
        text-align: center;
        font-size: 25px;
    }

    td {
        padding: 10px;

    }

    h3 {
        text-align: center;
        font-size: 30px;
        color: black;
    }

    h5 a {
        text-decoration: none;
        color: black;
        font-size: 25px;
    }
</style>

<body>
    <h3>Alat Elektronik</h3>
    <table border="1px">
        <tr>
            <th>Gambar</th>
            <th>Alat Elektronik</th>
            <th>Alamat</th>
            <th>Harga</th>
        </tr>
        <?php foreach ($alat as $a) { ?>
            <tr>
                <td><img src="../img/<?= $a['gambar']; ?>"></td>
                <td><?= $a["alat elektronik"]; ?></td>
                <td><?= $a["alamat"]; ?></td>
                <td><?= $a["harga"]; ?></td>
            </tr>
        <?php } ?>
    </table>

    <h5 align="center"><a href="../../index.php">Kembali</a></h5>
</body>

</html>