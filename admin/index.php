<!DOCTYPE html>
<html>
<head>
	<title>Art Port</title>
	<link rel="stylesheet" type="text/css" href="adminstyle.css"/> 
	<img src="img/logo.png" width="100" height="50" class="logo"></a>
	<div id="clock">
		<script type="text/javascript">
		<!--
		function showTime() {
		    var a_p = "";
		    var today = new Date();
		    var curr_hour = today.getHours();
		    var curr_minute = today.getMinutes();
		    var curr_second = today.getSeconds();
		    if (curr_hour < 12) {
		        a_p = "AM";
		    } else {
		        a_p = "PM";
		    }
		    if (curr_hour == 0) {
		        curr_hour = 12;
		    }
		    if (curr_hour > 12) {
		        curr_hour = curr_hour - 12;
		    }
		    curr_hour = checkTime(curr_hour);
		    curr_minute = checkTime(curr_minute);
		    curr_second = checkTime(curr_second);
		 document.getElementById('clock').innerHTML=curr_hour + ":" + curr_minute + ":" + curr_second + " " + a_p;
		    }
 
		function checkTime(i) {
		    if (i < 10) {
		        i = "0" + i;
		    }
		    return i;
		}
		setInterval(showTime, 500);
		//-->

		</script>
 		</div>
		<!-- Menampilkan Hari, Bulan dan Tahun -->
		<div id="clock">
		<script type='text/javascript'>
			<!--
			var months = ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'];
			var myDays = ['Minggu', 'Senin', 'Selasa', 'Rabu', 'Kamis', 'Jum&#39;at', 'Sabtu'];
			var date = new Date();
			var day = date.getDate();
			var month = date.getMonth();
			var thisDay = date.getDay(),
			    thisDay = myDays[thisDay];
			var yy = date.getYear();
			var year = (yy < 1000) ? yy + 1900 : yy;
			document.write(thisDay + ', ' + day + ' ' + months[month] + ' ' + year);
			//-->
			
		</script>
		</div>
		<div id="logout"><a href="logout.php">logout</a></div>
		
		<nav>
	<a href="home.php"> Home </a>
	<ul><li> <a href="#">Data</a>
			<ul> 
				<li> <a href="pendaki.php"> pendaki </a></li>
				<li> <a href="alat.php"> alat </a></li>
			</ul>
		</li>
	</ul>
	<ul><li> <a href="#">Table</a>
			<ul> 
				<li> <a href="table_pendaki.php"> pendaki </a></li>
				<li> <a href="table_alat.php"> alat </a></li>
			</ul>
		</li>
	</ul>
	<ul><li> <a href="#"> Contact </a>
		<ul> 
			<li> <a href="https:instagram.com/iambetonk.exe"target='_blank'> Intagram </a></li>
			<li> <a href="https://twitter.com/betonk_ryuzaki?s=09"target='_blank'> Twitter </a></li>
			<li> <a href="https://t.me/ibenhadi"target='_blank'> UX creator </a></li>
	</ul>
	</li>
	</ul>
	<ul><li> <a href="about.php"> About </a>
		</li>
	</ul>
</nav>
</head>
<body>
	<?php 
	session_start();
	if($_SESSION['status']!="login"){
		header("location:../index.php?pesan=sudah_login");
	}
	?>
	
	
	
	<img src="img/konten.jpg" class="konten"/>
	<h2>Selamat datang admin <?php echo $_SESSION['username']; ?>! anda telah login.</h2>
	<h4> apa yang akan <?php echo $_SESSION['username']; ?> lakukan ? </h4>
	<center>
<table>
	<table border=1>
		<th bgcolor="#b4f1f1"> Gunung Slamet </th> <th bgcolor="#b4f1f1"> Gunung Semeru </th>
		<tr>
			<td> <iframe width="560" height="315" src="https://www.youtube.com/embed/qTZjaUbDVl4" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
			</td>
			<td> <iframe width="560" height="315" src="https://www.youtube.com/embed/F5U9sSBT6bU" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></td>
</table>
</center>

	<div id="box"> 
	<p class="kata">Every Feature You’ve Ever Wanted <br>
	We listen to your feedback and integrate feature requests on a regular basis. faton is not only built by us, but by the whole faton community! </p>
	<button type="submit" class="btn"><a href="#top" class="btntxt"> go to up </a></button>
	</div>




<div id="copyright">
copyright (c) 2020

</div>
</body>

</html>