<?php
require 'functions.php';

// jika tidak ada id di url
if (!isset($_GET['id'])) {
  header("Location: index.php");
  exit;
}

// ambil id dari url
$id = $_GET['id'];

// query buku berdasarkan id
$bk = query("SELECT * FROM buku WHERE id = $id");

// cek apakah tombol ubah sudah ditekan
if (isset($_POST['update'])) {
  if (update($_POST) > 0) {
    echo "<script>
            alert('data berhasil diubah');
            document.location.href = 'index.php';
         </script>";
  } else {
    echo "data gagal diubah!";
  }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
  <title>Ubah Data Buku</title>
</head>

<body>
  <h3>Form Ubah Data Buku</h3>
  <form action="" method="POST">
    <input type="hidden" name="id" value="<?= $bk['id']; ?>">
    <div class="mb-3">
      <label class="form-label">Judul Buku</label>
      <input type="text" name="judul_buku" class="form-control" autofocus required value="<?= $bk['judul_buku']; ?>">
    </div>
    <div class="mb-3">
      <label class="form-label">Nama Pengarang</label>
      <input type="text" name="nama_pengarang" class="form-control" required value="<?= $bk['nama_pengarang']; ?>">
    </div>
    <div class="mb-3">
      <label class="form-label">Gambar</label>
      <input type="text" name="gambar" class="form-control" required value="<?= $bk['gambar']; ?>">
    </div>
    <button type="submit" name="update" class="btn btn-primary">Ubah Data</button>
  </form>
</body>

</html>