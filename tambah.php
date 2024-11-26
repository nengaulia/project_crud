<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form tambah buku </title>
</head>
<body>
    <h2>CRUD DATA MAHASISWA<h2>
    </br>
    <a href="index.php">kembali</a>
    </br>
    </br>
    <h3>TAMBAH DATA PEMINJAM</h3>
    <form method="post" action="tambah_aksi.php">
    <table>
    <tr>
        <td>id</td>
        <td><input type="text" name="id"></td>
    </tr>
    <tr>
        <td>peminjam</td>
        <td><input type="text" name="peminjam"></td>
    </tr>
    <br>
    <tr>
        <td>judul</td>
        <td><input type="text" name="judul"></td>
    </tr>
    <br>
    <tr>
        <td>genre</td>
        <td><input type="text" name="genre"></td>
    </tr>
    <br>
    <tr>
        <td></td>
        <td><input type="submit" value="SIMPAN"></td>
    </tr>
</table>
</form>
</body>
</html>