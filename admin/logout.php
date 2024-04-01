
<?php 
session_start();
 
// menghapus 
session_destroy();
 
header("location:../login.php?pesan=logout");
?>