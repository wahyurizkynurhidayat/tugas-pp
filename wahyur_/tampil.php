<!DOCTYPE html>
<html>
<head>
 <title>TUGAS WAHYU</title>
</head>
<body>
<link rel="stylesheet" href="gaya.css">
    <link rel="icon" type="icon/x-icon" href="wahyuw.jpg">
  <center>
  <h2>Pendaftaran Siswa</h2>
 <table border="1">
  <tr>
   <td>No.</td>
   <td>Nama</td>
   <td>Gender</td>
   <td>Jurusan</td>
   <td>Asal Sekolah</td>
   <td>Tempat Lahir</td>
   <td>Tanggal Lahir</td>
   <td>Kapasitas</td>
   <td>Terisi</td>
   <td>Aksi</td>
  </tr>

  <?php
  include("koneksi.php");
  $query = mysqli_query($db, "SELECT * FROM tb_peserta INNER JOIN tb_jurusan ON tb_peserta.jurusan_id =
  tb_jurusan.jurusan_id");
  $no = 1;
  foreach ($query as $row):
    ?>

<tr>
        <td><?= $no++; ?></td>
        <td><?= $row['nama']; ?></td>
        <td><?= $row['gender']; ?></td>
        <td><?= $row['jurusan']; ?></td>
        <td><?= $row['asalsekolah']; ?></td>
        <td><?= $row['tempatlahir']; ?></td>
        <td><?= $row['tanggallahir']; ?></td>
        <td><?= $row['kapasitas']; ?></td>
        <td><?= $row['terisi']; ?></td>
        <td>
        <a href="edit.php?id=<?= $row['id'];?>">Edit</a>
          <a href="hapus.php?id=<?= $row['id'];?>">| Hapus</a>
  <?php endforeach; ?>

  </center>
  </table><P>
  <td><a href=menu.php><input type="button" Value="Kembali"></a></td>
  <td><a href=tambah.php><input type="button" Value="Tambah"></a></td>
  </body>
  </html>