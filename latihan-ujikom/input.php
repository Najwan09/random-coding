<!DOCTYPE html>
<html>
<head>
	<title>	Halaman input</title>
</head>
<body>
<h1>input data karyawan</h1>
<a href="index.php" style=" text-decoration: none;" >Data mahasiswa</a><br><br>
<form action="" method="POST">
	<table>
	<tr>
		<td>id</td>
		<td>:</td>
		<td><input type="text" name="id" placeholder="id" required></td>
	</tr>
	<table>
	<tr>
		<td>nama</td>
		<td>:</td>
		<td><input type="text" name="nama" placeholder="nama" required></td>
	</tr>
	<table>
	<tr>
		<td>alamat</td>
		<td>:</td>
		<td><input type="text" name="alamat" placeholder="alamat" required></td>
	</tr>
	<table>
	<tr>
		<td>email</td>
		<td>:</td>
		<td><input type="email" name="email" placeholder="email" required></td>
	</tr>
	<table>
	<tr>
		<td>gender</td>
		<td>:</td>
		<td>
			<select name="gender">
				<option value="Laki-Laki">Laki-Laki</option>
				<option value="Perempuan">Perempuan</option>
			</select>
		</td>
	</tr>
	<table>
	<tr>
		<td></td>
		<td></td>
		<td><input type="submit" name="simpan" value="simpan"></td>
	</tr>
</table>
</form>
<?php
include 'koneksi.php';
if(isset($_POST['simpan'])){
$insert = mysqli_query($koneksi, "INSERT INTO karyawan VALUES 
	('".$_POST['id']."',
	'".$_POST['nama']."',
    '".$_POST['alamat']."',
    '".$_POST['email']."',
    '".$_POST['gender']."')" );
	   if($insert){
	       echo "berhasil di simpan";
	 	   	}else{
	 			echo "gagal disimpan";
	 		}
	 	}
		?>
</body>
</html>