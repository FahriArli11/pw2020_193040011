<?php
//melakukan koneksi ke database
$conn = mysqli_connect("localhost", "root", "") or die("koneksi ke DB gagal");

//memilih database
mysqli_select_db($conn, "tubes_193040011") or die("Database salah!");

//query mengambil objek dari tabel didalam database
$result = mysqli_query($conn, "SELECT * FROM elektronik")
?>

<html>

<head>
  <title>Index</title>
</head>
<style>
  body {
    background-color: lightseagreen;
  }

  table {
    background-color: lightskyblue;
    border: 1px solid black;
    text-align: center;
    font-size: 30px;
  }

  td {
    padding: 20px;

  }

  h3 {
    text-align: center;
    font-size: 50px;
    color: white;
  }

  h5 a {
    text-decoration: none;
    color: white;
    font-size: 50px;
  }
</style>

<body>
  <div class="container">
    <table cellpading="10" cellspacing="0" border="1">
      <tr>
        <th>Id</th>
        <th>elektronik</th>
        <th>Harga</th>
        <th>Gambar</th>
      </tr>
      <?php $i = 1 ?>
      <?php while ($row = mysqli_fetch_assoc($result)) : ?>
        <tr>
          <td><?= $i ?></td>
          <td><?= $row["Nama_Elektronik"]; ?></td>
          <td><?= $row["Harga"]; ?></td>
          <td><img width="60px" src="assets/img/<?= $row["Gambar"]; ?>"></td>
        </tr>
        <?php $i++ ?>
      <?php endwhile;  ?>
    </table>
</body>

</html>