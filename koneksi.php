<?php
$host="localhost";
$user="root";
$pass="";
$db="dbnengaulia";

//memberi alamat koneksi
$koneksi=mysqli_connect($host,$user,$pass,$db);

//cek koneksi
if(mysqli_connect_errno()){
    echo "koneksi ke database gagal".mysqli_connect_error();
}
?>