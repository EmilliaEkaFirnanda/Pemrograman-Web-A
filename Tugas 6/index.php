<?php
require "conn.php";

$biodata = query("SELECT * FROM biodata;");
$kontak = query("SELECT * FROM kontak;");
$sosmed = query("SELECT * FROM sosmed;");
$pendidikan = query("SELECT * FROM pendidikan ORDER BY tahun DESC;");
$pengalaman = query("SELECT * FROM pengalaman;");
$organisasi = query("SELECT * FROM organisasi;");
$komunikasi = query("SELECT * FROM komunikasi;");
$kemampuan = query("SELECT * FROM kemampuan;");
?>

<!doctype html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Bootstrap CSS -->
	<!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous"> -->

	<link rel="stylesheet" href="style.css">
	<!-- <link rel="stylesheet" href="css/bootstrap.css"> -->
	<link rel="stylesheet" href="css/bootstrap.min.css">

	<title>Tugas 5 PemWeb</title>

</head>

<body>


	<div id="home">
		<div class="navbar-main d-flex justify-content-center ">
			<nav class="navbar navbar-expand-lg navbar-light bg-light">
				<a class="navbar-brand page-scroll" href="#home">Emillia Eka Firnanda</a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarNav">
					<ul class="navbar-nav">
						<li class="nav-item active">
							<a class="nav-link page-scroll" href="#main">About <span class="sr-only">(current)</span></a>
						</li>
						<li class="nav-item">
							<a class="nav-link page-scroll" href="#contacts">Hubungi</a>
						</li>
						<li class="nav-item">
							<a class="nav-link page-scroll" href="#academics">History </a>
						</li>

					</ul>
				</div>
			</nav>
		</div>
		<div class="container">

			<div class="header">
				<div class="image">
					<img src="image/nindy ai.png">
				</div>
				<div class="main" id="main">
					<?php foreach ($biodata as $bio) : ?>
						<h1><?= $bio["nama"]; ?></h1><br>
						<H3><?= $bio["pekerjaan"]; ?></H3>
					<?php endforeach ?>
					<table border="0 px">
						<?php foreach ($biodata as $bio) : ?>
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

			<div class="row">
				<div class="col-md-6">

				</div>
				<div class="col-md-6">

				</div>
			</div>
			<div class="row">
				<div class="col-md-12">

				</div>
			</div>

			<div class="hero">
				<div class="sidebar" id="contacts">
					<div class="kiriCon">
						<h2>Contact :</h2>
						<table border="0 px">
							<?php foreach ($kontak as $kntk) : ?>
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
					</div>

					<div class="kananSos">
						<h2>Social Media :</h2>
						<table border="0 px">
							<?php foreach ($sosmed as $sm) : ?>
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
					</div>

					<div class="kiriCom">
						<h2>Communication :</h2>
						<table border="0 px">
							<?php foreach ($komunikasi as $kom) : ?>
								<tr>
									<td><?= $kom["bahasa"]; ?></td>
									<td><?= $kom["presentase"]; ?></td>
								</tr>
							<?php endforeach ?>
						</table>
					</div>

					<div class="kananSki">
						<h2>Skills :</h2>
						<table border="0 px">
							<?php foreach ($kemampuan as $kmp) : ?>
								<tr>
									<td><?= $kmp["skill"]; ?><p><?= $kmp["aplikasi"]; ?></p>
									</td>
									<td><?= $kmp["presentase"]; ?></td>

								</tr>
							<?php endforeach ?>
						</table>
						<br>
					</div>
					<br>
				</div>
				<br>
				<br>
				<div class="history">
					<div class="content">
						<div id="academics">
							<h2>Academic Resume :<a href="#dynamic_field_modal" id="edit" class="ml-3 btn btn-warning" data-toggle="modal" data-target="#dynamic_field_modal">ADD</a></h2>

							<table border="0px">
								<?php foreach ($pendidikan as $pend) : ?>
									<tr>
										<td>-</td>
										<td><?= $pend["jenjang"]; ?><p><?= $pend["jurusan"]; ?></p>
										</td>
										<td><?= $pend["tahun"]; ?></td>
										<td>
											<button type="button" name="delete" id="<?= $pend["id"]; ?>" class="btn btn-danger btn-xs delete">X</button>
										</td>
									</tr>
								<?php endforeach ?>
							</table>
						</div>

						<div id="experiences">
							<h2>Experience :</h2>
							<table border="0 px">
								<?php foreach ($pengalaman as $xp) : ?>
									<tr>
										<td>-</td>
										<td> <?= $xp["instansi"]; ?><p><?= $xp["bagian"]; ?></p>
										</td>
										<td><?= $xp["tahun"]; ?></td>
									</tr>
									<tr>
										<td colspan="3" class="mainexp1"><?= $xp["jobdesh"]; ?></td>
									</tr>
								<?php endforeach ?>
							</table>
						</div>

						<div id="organization">
							<h2>Organization :</h2>
							<table border="0 px">
								<?php foreach ($organisasi as $org) : ?>
									<tr>
										<td>-</td>
										<td> <?= $org["nama_organisasi"]; ?><p><?= $org["jabatan"]; ?></p>
										</td>
										<td><?= $org["tahun"]; ?></td>
									</tr>
									</tr>
									<tr>
										<td colspan="3" class="mainorg"><?= $org["jobdesh"]; ?></td>
									</tr>
								<?php endforeach ?>
							</table>
							<br><br><br>
						</div>
						<br><br><br>
					</div>

					<div class="footer" id="hobbies">
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

						</>
					</div>
				</div>


				<div id="dynamic_field_modal" class="modal fade" role="dialog">
					<div class="modal-dialog">
						<div class="modal-content">
							<form name="add_name" id="add_name">

								<!-- <form method="post" id="add_info" name="add_info"> -->
								<div class="modal-header">
									<h4 class="modal-title"><br><br> Add Education</h4>
									<button type="button" class="close" data-dismiss="modal">&times;</button>
								</div>
								<div class="table-responsive">
									<div class="modal-body">
										<table cellpadding="2px" cellspacing="0px" id="dynamic_field">
											<div class="form-group input-group">
												<tr align="center">
													<td>
														<input type="text" name="jenjang[]" id="jenjang" class="form-control" placeholder=" Jenjang">
													</td>
													<td>
														<input type="text" name="jurusan[]" id="jurusan" class="form-control" placeholder=" Jurusan">
													</td>
													<td>
														<input type="number" name="tahun1[]" id="tahun2" class="form-control" placeholder="Tahun Masuk">
													</td>
													<td>
														<input type=" number" name="tahun2[]" id="tahun1" class="form-control" placeholder="Tahun Lulus" />
													</td>
													<td><button type="button" name="add" id="add" class="btn btn-success">+</button></td>
												</tr>
											</div>
										</table>
									</div>

								</div>
								<div class="modal-footer">
									<input type="button" name="submit" id="submit" class="btn btn-info" value="Submit" />
								</div>
								<!-- </form> -->
							</form>
						</div>
					</div>
				</div>

				<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" crossorigin="anonymous"></script>
				<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" crossorigin="anonymous"></script>
				<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" crossorigin="anonymous"></script>

				<script src="js/script.js" crossorigin="anonymous"></script>
				<script src="js/jquery-3.5.1.min.js" crossorigin="anonymous"></script>
				<script src="js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
				<script src="js/bootstrap.js" crossorigin="anonymous"></script>
				<script src="js/bootstrap.min.js" crossorigin="anonymous"></script>

</body>

</html>