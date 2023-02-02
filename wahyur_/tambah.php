<!DOCTYPE html>
<html lang="en">
<head>
</head>
<body>
<link rel="stylesheet" href="gaya.css">
    <link rel="icon" type="icon/x-icon" href="wahyuw.jpg">
    <center>
       <h2> Form Tambah Siswa</h2>
</body>
</html>
<form action="proses.php" method="POST">
    <table border ="0">
    <tr>
        <td><label for="nama">Nama  </label></td>
        <td><input type="text" name="nama"></td>
    </tr>
    <tr>
        <td><label for="gender">Gender  </label><td>
        <label><input type="radio" name="gender" value="Laki-laki"/> Laki - laki </label>
        <label><input type="radio" name="gender" value="Perempuan"/> Perempuan </label>
</tr>
    <tr>
        <td><label for="jurusan">Jurusan </label></td>
        <td><input type="text" name="jurusan"></td>
    </tr>
    <tr>
       <td><label for="asalsekolah">Asal Sekolah </label></td>
       <td><input text="text" name="asalsekolah"></td>
    </tr>
    <tr>
       <td><label for="tempatlahir">Tempat Lahir </label></td>
        <td><input type="text" name="tempatlahir"></td>
    </tr>
    <tr>
       <td><label for="tanggallahir">Tanggal Lahir </label></td>
        <td><input type="date" name="tanggallahir"></td>
    </tr>
    <tr>
       <td><label for="kapasitas">Kapasitas </label></td>
        <td><input type="text" name="kapasitas"></td>
    </tr>
    <tr>
       <td><label for="terisi">Terisi </label></td>
        <td><input type="text" name="terisi"></td>
    </tr>
<td><a href=tampil.php><input type="button" Value="kembali"></a></td>
<td><input type="submit" name="tambah" value="submit"></td>
</form>
</table>
</body>
</html>
</center>