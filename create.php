<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data yang di kirim dari form
$nama = $_POST['nama'];
$email = $_POST['email'];
$password = md5($_POST['password']);
 
// menginput data ke database
mysqli_query($koneksi,"insert into user values('','$nama','$email','$password')");
 
// mengalihkan halaman kembali ke index.php
header("location:list_data.php");
 
?>