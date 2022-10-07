<?php
include "koneksi.php";
$id = @$_GET["id"];
$data = mysqli_query($koneksi, "delete from user where id='$id'");

header("location:list_data.php");
?>
