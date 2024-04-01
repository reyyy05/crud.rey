<?php

include 'koneksi.php';

 ?>

<!DOCTYPE html>
<html>
<head>
	<title>CRUD PHP</title>
</head>

<body>
 
	<a href="index.php">KEMBALI</a>
	
	<h3>TAMBAH DATA MAHASISWA</h3>
<form action="simpan.php" method="post">
		<table>
			<tr>			
				<td>NIM</td>
				<td><input type="number" name="nim"></td>
			</tr>
			<tr>
				<td>Nama</td>
				<td><input type="text" name="nama"></td>
			</tr>
			<tr>
				<td>Alamat</td>
				<td><input type="text" name="alamat"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="SIMPAN"></td>
			</tr>		
		</table>
	</form>
</body>
</html>