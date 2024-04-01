<?php 
session_start();
include 'koneksi.php';
 
$username = $_POST['username'];
$password = $_POST['password'];
 
$query = "SELECT * FROM `login` where username='$username' and password='$password'";
var_dump($query);   
    $hasil = mysqli_query($conn,$query); 
 
$cek = mysqli_num_rows($hasil);
 
if($cek > 0){
	$_SESSION['username'] = $username;
	$_SESSION['status'] = "login";
	header("location:admin/index.php");
}else{
	header("location:login.php?pesan=gagal");    
}
?>