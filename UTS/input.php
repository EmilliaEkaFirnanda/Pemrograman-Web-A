<?php
require "function.php";

$conn = mysqli_connect("localhost","root","","tokobarokah");
	
	//cek apakah tombol submit sudah ditekan ato blm
	if ( isset($_POST["submit"])) {

		if( input($_POST) > 0 ){
			echo "
				<script>
					alert('data berhasil ditambahkan');
					document.location.href = 'index.php';
				</script>
			";
		} else {
			echo "
				<script>
					alert('data gagal ditambahkan');
					document.location.href = 'index.php';
				</script>
			";
		}

	}
?>

<!DOCTYPE html>
<html>
<head>
	<title> Input Barang </title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<div class="input" align="center">
	<br><br>
	<h1>Input Data Barang</h1>
	<form action="" method="post">
		<table border="0px" cellspacing="0px" cellpadding="5px">
		<tr>
			<td>
				<label for="id">SKU BARANG </label>
				<td align="center">:</td>
				<td><input type="text" name="id" id="id" required></td>
			</td>
		</tr>
		<tr>
			<td>
				<label for="nama_barang">NAMA BARANG </label>
				<td align="center">:</td>
				<td><input type="text" name="nama_barang" id="nama_barang" required></td>
			</td>
		</tr>
		<tr>
			<td>
				<label for="kategori">KATEGORI </label>
				<td align="center">:</td>
				<td><input list="kategori" name="kategori" required></td>
				<datalist id="kategori">
					<option> Makanan </option>
					<option> Minuman </option>
					<option> ATK </option>
					<option> Lainnya </option>
				</datalist>
			</td>
		</tr>
		<tr>
			<td>
				<label for="jumlah_stok">JUMLAH STOK </label>
				<td align="center">:</td>
				<td><input type="text" name="jumlah_stok" id="jumlah_stok" required></td>
			</td>
		</tr>
		<tr>
			<td>
				<label for="harga_satuan">HARGA SATUAN (RP) </label>
				<td align="center">:</td>
				<td><input type="text" name="harga_satuan" id="harga_satuan" required></td>
			</td>
		</tr>
		<tr>
			<td>
				<br>
				<button type="submit" name="submit" align="center">INPUT DATA</button>
			</td>
		</tr>
		</table>
	</form>
	<br><br>
	</div>


</body>
</html>