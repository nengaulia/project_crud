<?php
//koneksi database 
include 'koneksi.php';

//menangkap data yang di kirim dari from
$id = $_POST['id'];
$peminjam = $_POST['peminjam'];
$judul = $_POST['judul'];
$genre= $_POST['genre'];

//menginput data ke database 
mysqli_query($koneksi,"insert into perpusku values('$id','$peminjam','$judul','$genre')");

//mengalihkan halaman kembali ke index.php
header("location:anggota.php");
?>
