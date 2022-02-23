<?php 
// koneksi database
session_start();
require 'koneksi.php';

// menangkap data yang di kirim dari form
$a = $_POST['id'];
$b = $_POST['nama'];
$c = $_POST['alamat'];
$d = $_POST['tingkat'];

// menginput data ke database
$query_insert= "INSERT INTO anggota (id, nama, alamat, tingkat) VALUES ('$a', '$b', '$c', '$d')";

$query_insert_ok = mysqli_query($koneksi,$query_insert);

$query_cek = mysqli_num_rows($query_insert_ok);

if ($query_insert_ok){
	header("location:pendaki.php?pesan=berhasil");
}else {
	header("location:pendaki.php?pesan=gagal");
}
?>