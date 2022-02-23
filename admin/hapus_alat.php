<?php 
// koneksi database
include 'koneksi.php';

// menangkap data id yang di kirim dari url
$id = $_GET['kode'];


// menghapus data dari database
mysqli_query($koneksi,"delete from alat where kode='$id'");

// mengalihkan halaman kembali ke index.php
header("location:table_alat.php");

?>