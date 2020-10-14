<?php
	$nama = "EMILLIA EKA FIRNANDA";
	$bidang = "Web Programmer";
	$alamat = "Randu Agung 1/69 Surabaya";
	$TTL = "Surabaya, 16 Oktober 2000";
	$agama = "Islam";
	$kewarganegaraan = "Indonesia";

	$contact=["081554343524","emilliaekaf@gmail.com"];

	$socialmedia=["emilliaef","emilliaekafirnanda","Emillia Eka Firnanda","emilliaef","Emillia Eka Firnanda"];

	$education=[
		["UPN \"Veteran\" Jawa Timur","(Teknik Informatika)","2018-Now"],
		["SMA Al-Irsyad Surabaya","(IPA)","2015-2018"],
		["SMPN 15 Surabaya"," ","2012-2015"],
		["SDN Sidotopo Wetan IV/558"," ","2006-2012"]
	];

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
				<h1><?php echo "$nama" ?></h1>
				<H3><?php echo "$bidang"; ?></H3>
				<table border="0 px">
					<tr>
						<td>TTL</td>
						<td><?php echo "$TTL"; ?></td>
					</tr>
					<tr>
						<td>Alamat</td>
						<td><?php echo "$alamat"; ?></td>
					</tr>
					<tr>
						<td>Agama</td>
						<td><?php echo "$agama"; ?></td>
					</tr>
					<tr>
						<td>Kewarganegaraan</td>
						<td><?php echo "$kewarganegaraan"; ?></td>
					</tr>
				</table>
			</div>
		</div>
		<div class="hero">
			<div class="sidebar">
				<h2>Contact :</h2>
				<table border="0 px">
					<tr>
						<td><img src="image/whatsapp.png"></td>
						<td><?= "$contact[0]"; ?></td>
					</tr>
					<tr>
						<td><img src="image/gmail.png"></td>
						<td><?= "$contact[1]"; ?></td>
					</tr>
				</table>

				<h2>Social Media :</h2>
				<table border="0 px">
					<tr>
						<td><img src="image/instagram.png"></td>
						<td><a href="https://www.instagram.com/emilliaef/?hl=id"><?= "$socialmedia[0]"; ?></a></td>
					</tr>
					<tr>
						<td><img src="image/line.png"></td>
						<td><?= "$socialmedia[1]"; ?></td>
					</tr>
					<tr>
						<td><img src="image/facebook.png"></td>
						<td><a href="https://www.facebook.com/profile.php?id=100010395758121"><?= "$socialmedia[2]"; ?></a></td>
					</tr>
					<tr>
						<td><img src="image/twitter.png"></td>
						<td><a href="https://twitter.com/emillia_eka?s=08"><?= "$socialmedia[3]"; ?></a></td>
					</tr>
					<tr>
						<td><img src="image/linkedin.png"></td>
						<td><a href="https://www.linkedin.com/in/emillia-eka-firnanda-57070a152/"><?= "$socialmedia[4]"; ?></a></td>
					</tr>

				</table>

				<h2>Communication :</h2>
				<table border="0 px">
					<tr>
						<td>Bahasa Indonesia</td>
						<td>90%</td>
					</tr>
					<tr>
						<td>Bahasa Inggris</td>
						<td>70%</td>
					</tr>
				</table>

				<h2>Skills :</h2>
				<table border="0 px">
					<tr>
						<td>Ms. Office <p>(word, excel, ppt)</p></td>
						<td>90% </td>
						
					</tr>
					<tr>
						<td>Pemrograman Web</td>
						<td>70%</td>
					</tr>
					<tr>
						<td>Desain UI/UX</td>
						<td>70%</td>
					</tr>
				</table>

			</div>
			<br>
			<br>
			<br>
			<div class="content">
				<h2>Academic Resume :</h2>
				<table border="0px">
					<?php foreach ($education as $ed): ?>
					<tr>
						<td>-</td>
						<td> <?= "$ed[0]"; ?><p><?= "$ed[1]"; ?></p></td>
						<td><?= "$ed[2]"; ?></td>
					</tr>
					<?php endforeach ?>
				</table>

				<h2>Experience :</h2>
				<table border="0 px">
					<?php foreach ($experience as $xp): ?>
					<tr>
						<td>-</td>
						<td> <?= "$xp[0]"; ?><p><?= "$xp[1]"; ?></p></td>
						<td><?= "$xp[2]"; ?></td>
					</tr>
					<tr>
						<td colspan="3" class="mainexp1"><?= "$xp[3]"; ?></td>
					</tr>
					<?php endforeach ?>
				</table>

				<h2>Organization :</h2>
				<table border="0 px">
					<?php foreach ($organization as $org): ?>
					<tr>
						<td>-</td>
						<td> <?= "$org[0]"; ?><p><?= "$org[1]"; ?></p></td>
						<td><?= "$org[2]"; ?></td>
					</tr>
					</tr>
					<tr>
						<td colspan="3" class="mainorg"><?= "$org[3]"; ?></td>
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
