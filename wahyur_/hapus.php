<?php
include ("koneksi.php");

$id = $_GET['id'];


mysqli_query($db,"DELETE FROM tb_jurusan where jurusan_id='$id'");
mysqli_query($db,"DELETE FROM tb_peserta where id='$id'");

header("location:tampil.php");
?>