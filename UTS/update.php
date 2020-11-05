<?php
require "function.php";

$id = $_GET["id"];

$brg = query("SELECT * FROM barang WHERE id = '$id' ")[0];

$conn = mysqli_connect("localhost","root","","tokobarokah");
	
	if ( isset($_POST["submit"])) {

		if( update($_POST) > 0 ){
			echo "
				<script>
					alert('data berhasil diubah');
					document.location.href = 'index.php';
				</script>
			";
		} else {
			echo mysqli_error($conn);
			echo "
				<script>
					alert('data gagal diubah');
					document.location.href = 'index.php';
				</script>
			";
		}

	}
?>

<!DOCTYPE html>
<html>
<head>
	<title> Update Data Barang </title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<div class="update" align="center">
	<br>
	<h1>Update Data Barang</h1>

	<form action="" method="post">
		<input type="hidden" name="id" value="<?= $brg["id"]; ?>">
		<table border="0px" cellpadding="3px">
		<tr>
			<td>
				<label for="id">SKU BARANG </label>
				<td align="center">:</td>
				<td><input type="text" name="id" id="id" required value="<?= $brg["id"]; ?>"></td>
			</td>
		</tr>
		<tr>
			<td>
				<label for="nama_barang">NAMA BARANG </label>
				<td align="center">:</td>
				<td><input type="text" name="nama_barang" id="nama_barang" required value="<?= $brg["nama_barang"]; ?>"></td>
			</td>
		</tr>
		<tr>
			<td>
				<label for="kategori">KATEGORI </label>
				<td align="center">:</td>
				<td><input type="text" name="kategori" id="kategori" required value="<?= $brg["kategori"]; ?>"></td>
			</td>
		</tr>
		<tr>
			<td>
				<label for="jumlah_stok">JUMLAH STOK </label>
				<td align="center">:</td>
				<td><input type="text" name="jumlah_stok" id="jumlah_stok" required value="<?= $brg["jumlah_stok"]; ?>"></td>
			</td>
		</tr>
		<tr>
			<td>
				<label for="harga_satuan">HARGA SATUAN (RP) </label>
				<td align="center">:</td>
				<td><input type="text" name="harga_satuan" id="harga_satuan" required value="<?= $brg["harga_satuan"]; ?>"></td>
			</td>
		</tr>
		<tr>
			<td>
				<br>
				<button type="submit" name="submit">UPDATE DATA</button>
			</td>
		</tr>
		</table>
	</form>
	<br><br>
	</div>

</body>
</html>