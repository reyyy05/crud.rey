<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Login Dengan PHP dan MySQLi</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
	<h2 >Login</h2>
	<br/>

	<?php 
	// if(isset($_GET['pesan'])){
	// 	if($_GET['pesan'] == "gagal"){
	// 		echo "Login gagal! username dan password salah!";
	// 	}else if($_GET['pesan'] == "logout"){
	// 		echo "Anda telah berhasil logout";
	// 	}else if($_GET['pesan'] == "belum_login"){
	// 		echo "Anda harus login untuk mengakses halaman admin";
	// 	}
	// }
	?>

	<br/>
	<br/>
	<form method="post" action="cek_login.php">
		<table>
			<tr>
				<td>Username</td>
				<td>:</td>
				<td><input type="text" name="username" placeholder="Masukkan username"></td>
			</tr>
			<tr>
				<td>Password</td>
				<td>:</td>
				<td><input type="password" name="password" placeholder="Masukkan password"></td>
			</tr>
			<tr>
				<td></td>
				<td></td>
				<td><input type="submit" value="LOGIN"></td>
			</tr>
		</table>			
	</form>
</body>
</html>