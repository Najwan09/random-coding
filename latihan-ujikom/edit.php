<?php
include 'koneksi.php';
$data_edit = mysqli_query($koneksi, "SELECT * FROM karyawan WHERE id = '".$_GET['id']."'");
$result = mysqli_fetch_array($data_edit);
?>
<!DOCTYPE html>
<html>
<head>
	<title>Halaman edit data</title>
</head>
<body>
<h1>edit data siswa</h1>
 <a href="index.php" style="text-decoration:none;">Data siswa</a><br><br>
<form action="" method="POST">
	<table>
		<tr>
			<td>id</td>
			<td></td>
			<td><input type="text" name="id" value="<?php echo $result['id'] ?>" required></td>
		</tr>
		<tr>
			<td>Nama lengkap</td>
			<td></td>
			<td><input type="text" name="nama" value="<?php echo $result['nama'] ?>" required></td>
		</tr>
		<tr>
			<td>No telp</td>
			<td></td>
			<td><input type="text" name="alamat" value="<?php echo $result['alamat'] ?>" required></td>
		</tr>
		<tr>
			<td>Email</td>
			<td></td>
			<td><input type="email" name="email" value="<?php echo $result['email'] ?>" required></td>
		</tr>
		<td>gender</td>
		<td>:</td>
		<td>
			<select name="gender">
				<option value="Laki-Laki">Laki-Laki</option>
				<option value="Perempuan">Perempuan</option>
			</select>
		</tr>
		<tr>
			<td></td>
			<td></td>
			<td><input type="submit" name="edit" value="edit"></td>
		</tr>
	</table>
</form>

<?php
if(isset($_POST['edit'])){
$update = mysqli_query($koneksi, "UPDATE karyawan SET nama = '".$_POST['nama']."',
	alamat = '".$_POST['alamat']."', email= '".$_POST['email']."', gender ='".$_POST['gender']."'
	WHERE id = '".$_GET['id']."'");
if ($update) {
	echo 'berhasil edit';
}else{
 echo "gagal";
}
}
?>
</body>
</html>