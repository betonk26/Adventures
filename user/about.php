<!DOCTYPE html>
<html>
<head>
	<title>ADVENTURE DOTCOM</title>
	<link rel="stylesheet" type="text/css" href="about.css"/> 
	<div id="clock"></div>
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
		
		<nav>
	<a href="index.php"> Home </a>
	<ul><li> <a href="#">Data table</a>
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
</nav>
</head>
<body>
<center>
<h2>About Website</h2>
<br>
<img src="img/about.jpg" height="200" width="200" class="gambar">
<h4> Faton | Sistem Informasi </h4>
<p class="about">
	nama saya Ahmad Fathon Nurhidayat Mahasiswa Universitas Pembangunan Jaya Program Studi Sistem Informasi
	semester 2.<br>
	saya membuat website ini untuk melaksanakan tugas ujian tengah semester 2, sekaligus
	memenuhi tugas lainnya. Yang menampilkan beberapa gambar pegunungan dan data pendaki dari mahasiswa
	universitas pembangunan jaya.

</p>

</center>
<div id="copyright">
copyright (c) 2020</div>
</body>
</body>

</html>