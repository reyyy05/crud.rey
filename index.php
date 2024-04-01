<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>CRUD PHP dan MySQLi</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
	<div class="container p-5">
	<?php
	include 'koneksi.php';
	$data = tampil('biodata');
	?>

	<h2>CRUD DATA MAHASISWA </h2>
	<br />
	<a href="tambah.php"class="btn btn-primary"> (+) TAMBAH MAHASISWA</a>
	<br />
	<br />
	<table>
	<table class="table">
  <thead>
    <tr>
    <th scope="col">id</th>
        <th scope="col">nim</th>
        <th scope="col">nama</th>
        <th scope="col">alamat</th>
        <th scope="col">aksi</th>
    </tr>
  </thead>
  <tbody>
		<?php
		$id = 1;
		// $query = "SELECT * FROM `biodata`";
		while ($row = mysqli_fetch_array($data)) {
		?>
			<tr>
				<td><?php echo $id++ ?></td>
				<td><?php echo $row['nim'] ?></td>
				<td><?php echo $row['nama'] ?></td>
				<td><?php echo $row['alamat'] ?></td>
				<td>
					<a href="edit.php?id=<?= $row['id'] ?>"class="btn btn-danger">EDIT</a>
					<a href="hapus.php?id=<?= $row['id'] ?>"class="btn btn-warning">HAPUS</a>
				</td>
			</tr>
		<?php
		}
		?>
	</table>
	</div>
</body>
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</html>