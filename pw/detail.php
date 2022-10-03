<?php
require 'functions.php';

// ambil id dari URL
$id = $_GET['id'];

// query buku berdasarkan id
$bk = query("SELECT * FROM buku WHERE id = $id");
?>

<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
</head>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Detail Buku</title>
</head>

<body>
  <div class="card" style="width: 18rem;">
    <img src="asset/<?= $bk['gambar']; ?>" class="card-img-top">
    <div class="card-body">
      <h5 class="card-title">Detail Buku</h5>
      <p class="card-text">Buku ini merupakan Buku Karya..</p>
    </div>
    <ul class="list-group list-group-flush">
      <li>Nama Buku : <?= $bk['judul_buku']; ?></li>
      <li>Nama Pengarang : <?= $bk['nama_pengarang']; ?></li>
    </ul>
    <div class="card-body text-center">
      <a href="update.php?id=<?= $bk['id']; ?>">ubah</a> | <a href="delete.php?id=<?= $bk['id']; ?>" onclick="return confirm('apakah anda yakin?');">hapus</a>
      <br>
      <a href="index.php">Kembali ke daftar buku</a>
    </div>
  </div>
</body>
</html>