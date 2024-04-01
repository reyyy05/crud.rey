<?php
include 'koneksi.php';

$id = $_POST['id'];
$nim = $_POST['nim'];
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];

	$query = "UPDATE biodata SET nim='$nim',nama='$nama',alamat='$alamat' WHERE id = '$id'";
    var_dump($query);
    $hasil = mysqli_query($conn,$query); 

    if($hasil) {
        header("location: index.php");
    } else {
        echo "Koneksi Gagal! : ";
    }
		?>