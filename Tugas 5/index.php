<?php
  require "conn.php";

  $biodata = query("SELECT * FROM biodata;");
  $kontak = query("SELECT * FROM kontak;");
  $sosmed = query("SELECT * FROM sosmed;");
  $pendidikan = query("SELECT * FROM pendidikan;");
  $pengalaman = query("SELECT * FROM pengalaman;");
  $organisasi = query("SELECT * FROM organisasi;");
  $komunikasi = query("SELECT * FROM komunikasi;");
  $kemampuan = query("SELECT * FROM kemampuan;");
?>

<?php

	$experience=[
		["Laksmi Muslimah Surabaya","Divisi Corporation","2020","Mengikuti program internship selama dua bulan pada perusahaan WO membantu pengadaan event WOW Fair 3 dalam follow up dan rekap data vendor-vendor wedding."]
	];

	$organization=[
		["Informatic Learning Community","Sekretaris","2019-2020","Penanggung jawab laporan komunitas dan seluruh administrasi surat menyurat dengan lembaga bersangkutan dalam pengadaan beberapa event."]
	];

?> 

<!DOCTYPE html>
<html>
<head>
	<title>curiculum vitae</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<div class="container">
		<div class="header">
			<div class="image">
				<img src="image/nindy ai.png">
			</div>
			<div class="main">
				<?php foreach ($biodata as $bio): ?>
					<h1><?= $bio["nama"]; ?></h1>
					<H3><?= $bio["pekerjaan"]; ?></H3>
				<?php endforeach ?>
				<table border="0 px">
					<?php foreach ($biodata as $bio): ?>
					<tr>
						<td>TTL</td>
						<td><?= $bio["tempat_lahir"]; ?>, <?= $bio["tanggal_lahir"]; ?></td>
					</tr>
					<tr>
						<td>Alamat</td>
						<td><?= $bio["alamat"]; ?></td>
					</tr>
					<tr>
						<td>Agama</td>
						<td><?= $bio["agama"]; ?></td>
					</tr>
					<tr>
						<td>Kewarganegaraan</td>
						<td><?= $bio["kewarganegaraan"]; ?></td>
					</tr>
					<?php endforeach ?>
				</table>
			</div>
		</div>
		<div class="hero">
			<div class="sidebar">
				<h2>Contact :</h2>
				<table border="0 px">
					<?php foreach ($kontak as $kntk): ?>
					<tr>
						<td><img src="image/whatsapp.png"></td>
						<td><?= $kntk["wa"]; ?></td>
					</tr>
					<tr>
						<td><img src="image/gmail.png"></td>
						<td><?= $kntk["email"]; ?></td>
					</tr>
					<?php endforeach ?>
				</table>

				<h2>Social Media :</h2>
				<table border="0 px">
					<?php foreach ($sosmed as $sm): ?>
					<tr>
						<td><img src="image/instagram.png"></td>
						<td><a href="https://www.instagram.com/emilliaef/?hl=id"><?= $sm["ig"]; ?></a></td>
					</tr>
					<tr>
						<td><img src="image/line.png"></td>
						<td><?= $sm["line"]; ?></td>
					</tr>
					<tr>
						<td><img src="image/facebook.png"></td>
						<td><a href="https://www.facebook.com/profile.php?id=100010395758121"><?= $sm["fb"]; ?></a></td>
					</tr>
					<tr>
						<td><img src="image/twitter.png"></td>
						<td><a href="https://twitter.com/emillia_eka?s=08"><?= $sm["twitter"]; ?></a></td>
					</tr>
					<tr>
						<td><img src="image/linkedin.png"></td>
						<td><a href="https://www.linkedin.com/in/emillia-eka-firnanda-57070a152/"><?= $sm["linkedin"]; ?></a></td>
					</tr>
					<?php endforeach ?>

				</table>

				<h2>Communication :</h2>
				<table border="0 px">
					<?php foreach ($komunikasi as $kom): ?>
					<tr>
						<td><?= $kom["bahasa"]; ?></td>
						<td><?= $kom["presentase"]; ?></td>
					</tr>
				<?php endforeach ?>
				</table>

				<h2>Skills :</h2>
				<table border="0 px">
					<?php foreach ($kemampuan as $kmp): ?>
					<tr>
						<td><?= $kmp["skill"]; ?><p><?= $kmp["aplikasi"]; ?></p></td>
						<td><?= $kmp["presentase"]; ?></td>
						
					</tr>
					<?php endforeach ?>
				</table>

			</div>
			<br>
			<br>
			<br>
			<div class="content">
				<h2>Academic Resume :</h2>
				<table border="0px">
					<?php foreach ($pendidikan as $pend): ?>
					<tr>
						<td>-</td>
						<td><?= $pend["jenjang"]; ?><p><?= $pend["jurusan"]; ?></p></td>
						<td><?= $pend["tahun"]; ?></td>
					</tr>
					<?php endforeach ?>
				</table>

				<h2>Experience :</h2>
				<table border="0 px">
					<?php foreach ($pengalaman as $xp): ?>
					<tr>
						<td>-</td>
						<td> <?= $xp["instansi"]; ?><p><?= $xp["bagian"]; ?></p></td>
						<td><?= $xp["tahun"]; ?></td>
					</tr>
					<tr>
						<td colspan="3" class="mainexp1"><?= $xp["jobdesh"]; ?></td>
					</tr>
					<?php endforeach ?>
				</table>

				<h2>Organization :</h2>
				<table border="0 px">
					<?php foreach ($organisasi as $org): ?>
					<tr>
						<td>-</td>
						<td> <?= $org["nama_organisasi"]; ?><p><?= $org["jabatan"]; ?></p></td>
						<td><?= $org["tahun"]; ?></td>
					</tr>
					</tr>
					<tr>
						<td colspan="3" class="mainorg"><?= $org["jobdesh"]; ?></td>
					</tr>
					<?php endforeach ?>
				</table>
			</div>
		</div>
		
		<div class="footer">
			<h2>Hobbies :</h2>
			<table border="0px" align="center">
				<tr>
					<td><img src="image/writing.png"></td>
					<td><img src="image/photo.png"></td>
					<td><img src="image/reading.png"></td>
					<td><img src="image/music.png"></td>
					<td><img src="image/drawing.png"></td>
				</tr>
			</table>
			<p>~ Mengamalkan Ilmu, Mengilmukan Amalan ~</p>
			
		</div>
	</div>
</body>
</html>
