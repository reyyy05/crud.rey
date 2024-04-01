<!DOCTYPE html>
<html>
<head>
	<title>Login Dengan PHP dan MySQLi</title>
</head>
<body>
	<h2>Halaman Admin</h2>
	<br/>
  
  <a href="../index.php">
    <input type="button" value="LOGIN">
</a>
    <br/>
	<br/>
	<!-- cek apakah sudah login -->
	<?php 
	session_start();
	if($_SESSION['status']!="login"){
		header("location:../index.php?pesan=belum_login");
	}
	?>
 
	<h4>Selamat datang, <?php echo $_SESSION['username']; ?>! anda telah login.</h4>
 
	<br/>
	<br/>
 
	<a href="logout.php">
    <input type="button" value="LOGOUT">
</a>
 
 
</body>
</html>