<?php

function koneksi()
{
  return mysqli_connect('localhost', 'root', '', 'pw2020_193040011');
}

function query($query)
{
  $conn = koneksi();

  $result = mysqli_query($conn, $query);

  // jika hasilnya hanya 1 data
  if (mysqli_num_rows($result) == 1) {
    return mysqli_fetch_assoc($result);
  }

  $rows = [];
  while (mysqli_fetch_assoc($result)) {
    echo $rows[] = $row;
  }

  return $rows;
}
