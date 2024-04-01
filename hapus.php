<?php 
include 'koneksi.php';
 
// menangkap data id yang di kirim dari url
$id = $_GET['id'];
$query = "DELETE FROM biodata WHERE id='$id'";
    var_dump($query);
    $hasil = mysqli_query($conn,$query); 
 
header("location:index.php");
 
?>
