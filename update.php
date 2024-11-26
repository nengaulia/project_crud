<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data yang di kirim dari form
$id = $_POST['id'];
$peminjam = $_POST['peminjam'];
$judul = $_POST['judul'];
$genre = $_POST['genre'];
 
// update data ke database
mysqli_query($koneksi,"update perpusku set peminjam='$peminjam', judul='$judul', genre='$genre' where id='$id'");
 
// mengalihkan halaman kembali ke index.php
header("location:anggota.php");
 
?>