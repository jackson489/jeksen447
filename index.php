<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title> Website Responsive</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="css/main.css">
</head>
<body>
	<div class="container">
		<div class="header">
			<h1 align="center"> Selamat Datang Di Perpustakaan Maizel</h1>
		</div>
		<div class="main">
			<div class="left">
				<h3 align="center">Menu</h3>
					<ul>
						<li><a href="index.php?page=home">Login</a></li>
						<li><a href="index.php?page=tutorial">Home</a></li>
						<li><a href="index.php?page=tentang">Daftar Buku</a></li>
					</ul>
			</div>

			<div class="middle">
			<?php
		if(isset($_GET['page'])){
			$page = $_GET['page'];

			switch ($page) {
				case 'home':
					include "form_login.html";
					break;
				case 'tentang':
					include "daftar_buku.php";
					break;
				case 'tutorial':
					include "home.php";
					break;
				case 'webdesign':
						include "webdesign.php";
						break;
				case 'pemograman':
						include "pemograman.php";
						break;
				case 'pemograman':
						include "pemograman.php";
						break;
				case 'database':
						include "database.php";
						break;
				default:
					echo "<center><h3>Maaf. Halaman tidak di temukan !</h3></center>";
					break;
			}
		}else{
			include "home.php";
		}
		 ?>
			</div>

			<div class="right">
				<h3 align="center">Buku Terpopuler</h3>
				<p>
					<ul>
					<li><a href="index.php?page=webdesign">Web Design</a></li>
					<li><a href="index.php?page=pemograman">Pemrograman</a></li>
					<li><a href="index.php?page=database">Database</a></li>
					</ul>
				</p>
			</div>
		</div>

			<div class="footer">
			<p align="center">Copright &copy; 2018
				<a href="http://erabelajar.com">
					Belajar CSS Responsive </a></p>
			</div>
	</div>
</body>
</html>
