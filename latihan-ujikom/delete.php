<?php
include 'koneksi.php';
if(isset($_GET['id'])){
	$delete = mysqli_query($koneksi, "DELETE FROM karyawan WHERE id = '".$_GET['id']."' ");
    header('location:index.php');
}
?>