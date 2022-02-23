<?php
	include "koneksi.php";
?>
<?php 
	if(isset($_GET['pesan'])){
		if($_GET['pesan'] == "gagal"){
			echo "<script>alert('gagal! id sudah ada!'); history.back(self); </script>";
		}else if($_GET['pesan'] == "berhasil"){
			echo "<script>alert('anda telah berhasil menginput alat'); </script>";
		}else if($_GET['pesan'] == "belum_login"){
			echo "login untuk mengakses halaman admin";
		}
	}
	?>
<html>
	<head>
		<title id="Title"> Art Port </title>
		<link rel="stylesheet" type="text/css" href="alat.css">
	</head>
	<body>
	<?php.$_SESSION['username'].;?>
		<h1 style="text-align: center;">input Data Alat</h1>
<div id="kotak">
<div id="card-content">
<div id="card-title">
	<form method="post" action="add_alat.php">
	<label id="kode">kode barang</label>
    <input type="text" id="kode" name="kode" placeholder="Kode Barang...">
    <br>
    <label id="nama">nama</label>
    <input type="text" id="nama" name="nama" placeholder="nama lengkap...">
    <br>
    <label id="barang"> nama barang</label>
    <input type="text" id="barang" name="barang"  placeholder="nama barang....">
    <br>
    <label id="jumlah">jumlah Barang</label>
    <input type="text" id="jumlah" name="jumlah"  placeholder="jumlah Barang....">
	<br>
	<br>
	<input type="submit" value="Submit" class="btn"> <br> <br>
	
  </form>
  <button class="btn"><a href="index.php"> kembali </a></button> 
</div>
 </div>
</div>
<div id="copyright">
copyright (c) 2020</div>
	</body>
</html>