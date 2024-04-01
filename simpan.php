<?php
include 'koneksi.php';
$nim = $_POST['nim'];
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];

$query = "INSERT INTO `biodata` (nim, nama, alamat) VALUES ('$nim', '$nama', '$alamat')";
$hasil = mysqli_query($conn, $query);

if ($hasil) {
    header("location: index.php");
} else {
    echo "Koneksi Gagal! : ";
}
