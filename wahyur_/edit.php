<?php
include("koneksi.php");
if(!isset($_GET['id'])){
    header("Location:koneksi.php?");
}
$id=$_GET['id'];
$sql= "SELECT * FROM tb_peserta INNER JOIN tb_jurusan ON tb_peserta.jurusan_id =
tb_jurusan.jurusan_id WHERE tb_peserta.id='$id'";
$query = mysqli_query($db,$sql);
$row = mysqli_fetch_assoc($query);

if(mysqli_num_rows($query) < 1){
    die ("Data tidak ditemukan");
}
?>

<html>
    <head>
</head>
<body>
    <link rel="stylesheet" href="gaya.css">
    <link rel="icon" type="icon/x-icon" href="wahyuw.jpg">
    <center>
    <h1>Form Edit</h1>
    <form action="proses_edit.php" method="POST">
                <input type="hidden" name="id" value="<?php echo $row['id']?>" />
                <p>
        <label for="nama"> Nama  </label>
        <input type="text" name="nama" value="<?php echo $row['nama']?>" />
    </p>
    <p>
        <label for="gender"> Gender </label>
        <input type="radio" name="gender" value="laki-laki "value="<?php echo $row['gender']?>" /> Laki - laki 
        <input type="radio" name="gender" value="Perempuan" value="<?php echo $row['gender']?>" /> Perempuan 
    </p>
    <p>
        <label for="jurusan"> Jurusan </label>
        <input type="text" name="jurusan" value="<?php echo $row['jurusan']?>" />
    </p>
    <p>
        <label for="asalsekolah"> Asal Sekolah </label>
        <input type="text" name="asalsekolah" value="<?php echo $row['asalsekolah']?>"/>
    </p>
    <p>
        <label for="tempatlahir"> Tempat Lahir </label>
        <input type="text" name="tempatlahir" value="<?php echo $row['tempatlahir']?>"/>
    </p>
    <p>
        <label for="tanggallahir"> Tanggal Lahir </label>
        <input type="date" name="tanggallahir" value="<?php echo $row['tanggallahir']?>"/>
    </p>
    <p>
        <label for="kapasitas"> Kapasitas </label>
        <input type="text" name="kapasitas" value="<?php echo $row['kapasitas']?>"/>
    </p>
    <p>
        <label for="terisi"> Terisi </label>
        <input type="text" name="terisi" value="<?php echo $row['terisi']?>"/>
    </p>
<p>
<a href="tampil.php"><input type="button" value="Kembali"></a>
<input type="submit" value="Edit" name="edit" /> 
</p>
</form>
</body>
</html>