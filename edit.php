<!DOCTYPE html>
<html>
<head>
	<title>CRUD PHP</title>
</head>
<?php 
	include "koneksi.php";
	$id = $_GET['id'];
	$query = "SELECT * FROM biodata WHERE id = '$id'"; 
	$hasil = mysqli_query($conn,$query);
	$isi = mysqli_fetch_assoc($hasil);
	?>

<body>
 
	<h2>CRUD DATA MAHASISWA</h2>
	<br/>
	<a href="index.php">KEMBALI</a>

	<h3>EDIT DATA MAHASISWA</h3>
		<form method="post" action="update.php">
			<table>
				<tr>			
					<td>NIM</td>
					<td>
						<input type="number" name="nim" value="<?php echo $isi['nim']; ?>">
					</td>
				</tr>
				<tr>
					<td>Nama</td>
					<td><input type="text" name="nama" value="<?php echo $isi['nama']; ?>"></td>
				</tr>
				<tr>
					<td>Alamat</td>
					<td><input type="text" name="alamat" value="<?php echo $isi['alamat']; ?>"></td>
					<td><input type="hidden" name="id" value="<?php echo $isi['id']; ?>"></td>
				</tr>
				<tr>
					<td></td>
					<td><input type="submit" value="SIMPAN"></td>
				</tr>		
			</table>
		</form>
		<?php
	
		?>
</body>
</html>