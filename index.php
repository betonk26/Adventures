<!DOCTYPE html>
<html>
<head>
	<title> Art Port </title>
	<link rel="stylesheet" type="text/css" href="style.css"/>
</head>
<body>
	<div id="kotak">
		<div id="card-content">
	<div id="card-title">
    <h2>LOGIN</h2>
    <div class="underline-title"></div>
	
	</div>
	<br/>
	<!-- cek pesan notifikasi -->
	<?php 
	if(isset($_GET['pesan'])){
		if($_GET['pesan'] == "gagal"){
			echo "<script>alert('Login gagal! username dan password salah!'); history.back(self); </script>";
		}else if($_GET['pesan'] == "logout"){
			echo "<script>alert('anda telah berhasil logout'); history.back(self); </script>";
		}else if($_GET['pesan'] == "belum_login"){
			echo "login untuk mengakses halaman admin";
		}
	}
	?>
	 
		<form method="post" action="cek_login.php">
			<label style="padding-top:13px">&nbsp; username :</label><br>
			<input type="text" class="form-kotak" name="username" placeholder="Masukkan username" required /> <div class="form-border"></div>
			<br>
			<label style="padding-top:22px">&nbsp; Password :</label><br>
					<input type="password" class="form-kotak" name="password" placeholder="Masukkan password" required /><div class="form-border"></div>
				<br>
				<input id="submit-btn" type="submit" name="submit" value="LOGIN">
				<br>
				<br>
				<a href="user/index.php" id="signup">guest only</a>
		</form>

	</div>
	</div>
<div id="copyright">
copyright (c) 2020 | faton </div>
</body>
</html>