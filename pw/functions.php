<?php
function koneksi()
{
    return mysqli_connect('localhost', 'root', '', 'prakweb_a_203040048_pw');
}
 
function query($query)
{
    $conn = koneksi();

    $result = mysqli_query($conn, $query);

    // jika hasilnya hanya 1 data
    if( mysqli_num_rows($result) == 1) {
        return mysqli_fetch_assoc($result);
    }
    $rows = [];
while ($row = mysqli_fetch_assoc($result)) 
    {
    $rows[] = $row;
    }

    return $rows;
}

function tambah($data)
{
  $conn = koneksi();

  $judul_buku = htmlspecialchars($data['judul_buku']);
  $nama_pengarang = htmlspecialchars($data['nama_pengarang']);
  $gambar = htmlspecialchars($data['gambar']);

  $query = "INSERT INTO
              buku
            VALUES
            (null, '$judul_buku', '$nama_pengarang', '$gambar');
          ";
  mysqli_query($conn, $query) or die(mysqli_error($conn));
  return mysqli_affected_rows($conn);
}

function hapus($id)
{
  $conn = koneksi();
  mysqli_query($conn, "DELETE FROM buku WHERE id = $id") or die(mysqli_error($conn));
  return mysqli_affected_rows($conn);
}

function update($data)
{
  $conn = koneksi();

  $id = $data['id'];
  $judul_buku = htmlspecialchars($data['judul_buku']);
  $nama_pengarang = htmlspecialchars($data['nama_pengarang']);
  $gambar = htmlspecialchars($data['gambar']);

  $query = "UPDATE buku SET
              judul_buku = '$judul_buku',
              nama_pengarang = '$nama_pengarang',
              gambar = '$gambar'
            WHERE id = $id";
  mysqli_query($conn, $query) or die(mysqli_error($conn));
  return mysqli_affected_rows($conn);
}