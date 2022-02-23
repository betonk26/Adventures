<?php 
// mengaktifkan session php
session_start();
$koneksi= mysqli_connect("localhost","root","","adventure") or die("Ga bisa koneksi");

// menangkap data yang dikirim dari form
$username = $_POST['username'];
$password = $_POST['password'];

// menyeleksi data admin dengan username dan password yang sesuai
$data = mysqli_query($koneksi,"SELECT * FROM `user` where username='$username' and password='$password'");

// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($data);
$_SESSION['username'] = $cek['username'];
			//$q = "SELECT * FROM login WHERE username='$userid' AND password='$psw'";
			//echo $q;
			$_SESSION['level'] = $cek['level'];
			if($cek['level']=="admin"){
				header("location:admin/index.php");
			}else if($cek['level']=="user"){
				header("location:=user/index.php");
			}

if($cek > 0){
	$_SESSION['username'] = $username;
	$_SESSION['status'] = "login";
	header("location:admin/index.php?pesan=belum_login");
}else{
	header("location:user/index.php");
}
?>
