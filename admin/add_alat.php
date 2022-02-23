<?php 
// koneksi database
session_start();
require 'koneksi.php';

// menangkap data yang di kirim dari form
$a = $_POST['kode'];
$b = $_POST['nama'];
$c = $_POST['barang'];
$d = $_POST['jumlah'];

// menginput data ke database
$query_insert= "INSERT INTO alat (kode, nama, barang, jumlah) VALUES ('$a', '$b', '$c', '$d')";

$query_insert_ok = mysqli_query($koneksi,$query_insert);

$query_cek = mysqli_num_rows($query_insert_ok);

if ($query_insert_ok){
	header("location:alat.php?pesan=berhasil");
}else {
	header("location:alat.php?pesan=gagal");
}
?>