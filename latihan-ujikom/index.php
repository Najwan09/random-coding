<!DOCTYPE html>
<html>
<head>
	<title>	halaman data karyawan</title>
</head>
<body>
 <h1>data karyawan</h1>
 <a href="input.php" style=" text-decoration: none;" >Tambah data</a><br><br>
 <table border="1" cellspacing="0" width="50%">
 	<tr>
 		<th>No</th>
 		<th>id</th>
 		<th>nama</th>
 		<th>alamat</th>
 		<th>email</th>
 		<th>gender</th>
 		<th>opsi</th>
 	</tr>
<?php
include 'koneksi.php';
$no = 1;
$select = mysqli_query($koneksi, "SELECT * FROM karyawan");
while ($hasil = mysqli_fetch_array($select)) {
	?>
 	<tr>
 		<td><?php echo $no++ ?></td>
 		<td><?php echo $hasil['id']?></td>
 		<td><?php echo $hasil['nama']?></td>
 		<td><?php echo $hasil['alamat']?></td>
 		<td><?php echo $hasil['email']?></td>
 		<td><?php echo $hasil['gender']?></td>
 		<td>
 			<a href="edit.php?id=<?php echo $hasil['id'];?>">edit</a> ||
 			<a href="delete.php?id=<?php echo $hasil['id'];?>">hapus</a>
 		</th>
 	</tr>
 <?php } ?>
 </table>
</body>
</html>