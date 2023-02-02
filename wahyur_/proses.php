<?php
include("koneksi.php");
if(isset($_POST['tambah'])){
 $nama = $_POST['nama'];
 $jurusan = $_POST['jurusan'];
 $gender = $_POST['gender'];
 $asalsekolah = $_POST['asalsekolah'];
 $tempatlahir = $_POST['tempatlahir'];
 $tanggallahir = $_POST['tanggallahir'];
 $kapasitas = $_POST['kapasitas'];
 $terisi = $_POST['terisi'];
 
 $sql = "INSERT INTO tb_jurusan (jurusan, kapasitas, terisi)VALUES('$jurusan', '$kapasitas', '$terisi')";
 $query = mysqli_query ($db,$sql);

 $sql = "SELECT max(jurusan_id)AS id_jurusan FROM tb_jurusan LIMIT 1";
 $query = mysqli_query($db,$sql);

$data = mysqli_fetch_array($query);
$id_jurusan = $data['id_jurusan'];

$sql = "INSERT INTO tb_peserta(jurusan_id,nama,gender,asalsekolah,tempatlahir,tanggallahir) 
VALUES('$id_jurusan','$nama','$gender', '$asalsekolah', '$tempatlahir', '$tanggallahir' )";
$query = mysqli_query($db,$sql);


if($query){
          header('location:tampil.php?status=sukses');
      }else{
          header('location:tampil.php?status=gagal');
      }
  }
?>