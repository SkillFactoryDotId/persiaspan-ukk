<?php
include"koneksi.php";
$nama=$_POST['nama'];
$email=$_POST['email'];
$id = $_GET['id']; 
$update=mysqli_query($koneksi,"update user set nama='$nama', email='$email' where id='$id'");
if($update){

$_SESSION['pesan'] = '<font color=green>OK, 1 data berhasil diupdate.</font>';
header("location:list_data.php"); 
}else{
echo "Gagal update data!";
}
?>