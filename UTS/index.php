<?php
	require "function.php";

	global $conn;
	$barang = query("SELECT * FROM barang ORDER BY id DESC;");

if (isset($_POST["search"])) {
	$barang = search($_POST["keyword"]);
}

if (isset($_POST["filter"])) {
	$barang = filter($_POST);
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>UTS</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<div class="main" align="center">
		<br><br>
		<h1> BAROKAH MINI-MARKET </h1>
		<br>
		<a href="input.php">Input Data Barang</a>
		<br><br>

		<form action="" method="post">
			<table border="0px">
				<tr>
					<td>
						<input type="text" name="keyword" size="35" autofocus placeholder="cari (sku/nama/kategori) barang..">
						<button type="submit" name="search"> SEARCH </button>
					</td>
				</tr>
			</table>
		</form>
		<br>
		<form action="" method="post">
			<table border="0px">
				<tr>
					<td>
						<label for="harga_min">Dari Harga : Rp</label>
						<input type="number" name="harga_min" id="harga_min">
					</td>
					<td>
						<label for="harga_max">Sampai Harga : Rp</label>
						<input type="number" name="harga_max" id="harga_max">
					</td>
					<td>
						<button type="submit" name="filter"> FILTER</button>
					</td>
				</tr>
			</table>
		</form>

		<br>
		<table border="1px" cellpadding="6px">
			<tr>
				<th>NO</th>
				<th>SKU BARANG</th>
				<th>NAMA BARANG</th>
				<th>KATEGORI</th>
				<th>JUMLAH STOK</th>
				<th>HARGA SATUAN (Rp)</th>
				<th>PILIH</th>
			</tr>
			<?php $i=1; foreach ($barang as $brg): ?>
			<tr>
				<td align="center"><?= $i ?></td>
				<td><?= $brg["id"]; ?></td>
				<td><?= $brg["nama_barang"]; ?></td>
				<td><?= $brg["kategori"]; ?></td>
				<td><?= $brg["jumlah_stok"]; ?></td>
				<td><?= $brg["harga_satuan"]; ?></td>
				<td>
					<a href="update.php?id=<?= $brg["id"]; ?>">Update</a> |
					<a href="delete.php?id=<?= $brg["id"]; ?>" onclick="return confirm('yakin?');">Delete</a>
				</td>
			</tr>
			<?php $i++; endforeach ?>
		</table>
		<br><br>
	</div>

</body>
</html>