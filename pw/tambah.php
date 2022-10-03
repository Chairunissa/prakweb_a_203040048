<?php
require 'functions.php';

//cek tombol data
if (isset($_POST['tambah'])) {
  if (tambah($_POST) > 0) {
    echo "<script>
            alert('data berhasil ditambahkan!');
            document.location.href = 'index.php';
          </script> ";
  } else {
    echo "<script>
            alert('data gagal ditambahkan!');
            document.location.href = 'index.php';
          </script>";
  }
}
?>

<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
</head>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tambah Data Buku</title>
</head>

<body>
  <h3>Form Tambah Data Buku</h3>
  <form action="" method="POST">
    <div class="mb-3">
      <label class="form-label">Judul Buku</label>
      <input type="text" name="judul_buku" class="form-control"autofocus required>
    </div>
    <div class="mb-3">
      <label class="form-label">Nama Pengarang</label>
      <input type="text" name="nama_pengarang" class="form-control" required>
    </div>
    <div class="mb-3">
      <label class="form-label">Gambar</label>
      <input type="text" name="gambar" class="form-control" required>
    </div>
    <button type="submit" name="tambah" class="btn btn-primary">Tambah Data</button>
  </form>
</body>



</html>