<?php
	include "koneksi.php";
?>
<!DOCTYPE html>
<html>
<head>
	<title> Art Port </title>
	<link rel="stylesheet" type="text/css" href="table_alat.css">
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
</head>
<body>

<h2 style="text-align: center;"> table alat pendaki </h2> 
	<button class="kembali"> <a href="index.php"> kembali </a></button>
	<table class="row">
			<tr>
				<th>kode</th>
				<th>nama</th>
				<th>barang</th>
				<th>jumlah</th>
				<th>kode</th>
			</tr>
				<?php
					include 'koneksi.php';

					$data = mysqli_query($koneksi, "SELECT * FROM alat");
					while ($d = mysqli_fetch_array($data)){
				?>
						<tr>
							<td><?php echo $d['kode']; ?></td>
							<td><?php echo $d['nama']; ?></td>
							<td><?php echo $d['barang']; ?></td>
							<td><?php echo $d['jumlah']; ?></td>
							<td>
								<a href="hapus_alat.php?kode=<?php echo $d['kode']; ?>">hapus</a>
						</tr>
				<?php
					}
				?>	


	</table>
<div id="copyright">
copyright (c) 2020</div>
</body>
</html>