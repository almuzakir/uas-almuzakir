<?php

session_start();
if (!$_SESSION["is_login"] === TRUE) {
	header("location: login.php");
	exit;
}
?>
<html>

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title></title>
	<meta name="keywords" content="" />
	<meta name="description" content="" />
	<link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900" rel="stylesheet" />
	<link href="default.css" rel="stylesheet" type="text/css" media="all" />
	<link href="fonts.css" rel="stylesheet" type="text/css" media="all" />
</head>

<body>


	<div id="page" class="container">
		<div class="header1">
			<marquee scrollamount="">
				<h1>ini adalah Website dari rumah sakit GRESTELINA</h1>
			</marquee>
			<div class="header-right">
			</div>
		</div>
		<div id="header">
			<div id="logo">
				<img src="images/rs.jpg" alt="" />
				<h1><a href="#">Selamat datang di rumah sakit GRESTELINA</a></h1>
			</div>
			<div id="menu">
				<ul>
					<li class="current_page_item"><a href="index.php" accesskey="1" title="">Homepage</a></li>
					<li class="current_page_item"><a href="daftar.php" accesskey="2" title="">Data Pasien</a></li>
					<li class="current_page_item"><a href="jaminan.php" accesskey="3" title="">Data Jaminan Pembayaran</a></li>
					<li class="current_page_item"><a href="poliklinik.php" accesskey="4" title="">Data Poliklinik</a></li>
					<li class="current_page_item"><a href="add.php" accesskey="5" title="">Pendaftaran Pasien</a></li>
					<li class="current_page_item"><a href="logout.php" accesskey="6" title="">Logout</a></li>
				</ul>
			</div>
			<div id="isi">
				<?php
				$page = @$_GET['page'];
				if ($page == "daftar") {
					echo " ini halaman daftar";
				} else if ($page == "poliklinik") {
					echo "ini data poli";
				}
				?>
			</div>
		</div>
		<div id="main">
			<div id="banner">

				<img src="images/foto11.jpg" alt="" class="image-full" />
			</div>
			<div id="welcome">
				<div class="title">
					<h2>selamat Datang di rumah sakit GRESTELINA</h2>
					<span class="byline">Website Ini dirancang untuk memudahkan anda dalam mendapatkan pelayanan kami dan memperoleh informasi kesehatan keluarga anda. Kami akan hadirkan pula Reservasi Online untuk konsultasi dengan dokter kami.</span>
				</div>
				</ul>
			</div>
			<div id="featured">
				<div class="title">
					<h2>Daftar Jadwal Doktor</h2>
					<span class="byline">Jadwal sewaktu-waktu dapat berubah</span>
				</div>
				<ul class="style1">
					<li class="first">
						<p class="date">Setiap Hari<b>poli Umum</b></a></p>
						<h3>Daftar Doktor</h3>
						<p>dr. Fauzia Alinin</p>
					</li>
					<li>
						<p class="date">Senin,Rabu & jumat<b>Poli Anak</b></p>
						<h3>Daftar Doktor</h3>
						<p>dr. Nina Dwi Putri, Sp.A (K)</p>
					</li>
					<li>
						<p class="date">Senin & selasa<b>poli bedah</b></a></p>
						<h3>Daftar Doktor</h3>
						<p>dr. Nandita Melati, Sp.BP-RE(K)</p>
					</li>
					<li>
						<p class="date">rabu & kamis<b>Poli Saraf</b></p>
						<h3>Daftar Doktor</h3>
						<p>dr. Dyah Tunjungsari, Sp.S</p>
					</li>
					<li>
						<p class="date">Sabtu & minggu<b>Poli Gizi</b></a></p>
						<h3>Daftar Doktor</h3>
						<p>dr. Anna Maurina Singal, MGizi, Sp.GK</p>
					</li>
				</ul>
			</div>

		</div>
	</div>
</body>
<footer <div id="featured">
	<div class="title">
		<div id="footer">
			<span>Al MUZAKIR</span>
			<p>085344221247</p>
		</div>
	</div>
</footer>

</html>