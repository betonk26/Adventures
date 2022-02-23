<?php
	include "koneksi.php";
?>
<?php 
	if(isset($_GET['pesan'])){
		if($_GET['pesan'] == "gagal"){
			echo "<script>alert('gagal! id sudah ada!'); history.back(self); </script>";
		}else if($_GET['pesan'] == "berhasil"){
			echo "<script>alert('anda telah berhasil menginput anggota'); </script>";
		}else if($_GET['pesan'] == "belum_login"){
			echo "login untuk mengakses halaman admin";
		}
	}
	?>
<html>
	<head>
		<title id="Title"> Art Port </title>
		<link rel="stylesheet" type="text/css" href="pendaki.css">
	</head>
	<body>
	<?php.$_SESSION['username'].;?>
		<h1 style="text-align: center;">input Data anggota</h1>
<div id="kotak">
<div id="card-content">
<div id="card-title">
	<form method="post" action="add_pendaki.php">
	<label id="id">id anggota</label>
    <input type="text" id="id" name="id" placeholder="Kode...">
    <br>
    <label id="nama">nama</label>
    <input type="text" id="nama" name="nama" placeholder="nama...">
    <br>
    <label id="alamat">alamat</label>
    <input type="text" id="alamat" name="alamat"  placeholder="alamat....">
    <br>
    <label id="tingkat">tingkat</label>
    <input type="text" id="tingkat" name="tingkat"  placeholder="tingkat....">
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