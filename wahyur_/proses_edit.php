<?php
include("koneksi.php");
if(isset($_POST['edit'])){
    $id=$_POST['id'];
    $nama = $_POST['nama'];
    $jurusan = $_POST['jurusan'];
    $gender = $_POST['gender'];
     $asalsekolah = $_POST['asalsekolah'];
    $tempatlahir = $_POST['tempatlahir'];
    $tanggallahir = $_POST['tanggallahir'];
     $kapasitas = $_POST['kapasitas'];
     $terisi = $_POST['terisi'];

    $sql = "UPDATE tb_peserta SET nama='$nama', gender='$gender', asalsekolah='$asalsekolah', tempatlahir='$tempatlahir', tanggallahir='$tanggallahir' WHERE id='$id'";
    $query= mysqli_query($db,$sql);

    $sql = "UPDATE tb_jurusan SET jurusan='$jurusan', kapasitas='$kapasitas', terisi='$terisi' WHERE jurusan_id='$id'";
    $query= mysqli_query($db,$sql);
    
    if($query){
        header('Location:tampil.php');
    }else{
        die ("gagal mengedit");
    }}
?>