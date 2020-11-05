<?php  
	
	$conn = mysqli_connect("localhost","root","", "tokobarokah");

	function query ($query){
		global $conn;
		$result = mysqli_query($conn, $query);
		$record = [];

		while( $data = mysqli_fetch_assoc($result)){
			$record[] = $data;
		}
		return $record;
	}

	
	function input($data){
		global $conn;
		$id = htmlspecialchars($data["id"]);
		$nama_barang = htmlspecialchars($data["nama_barang"]);
		$kategori = htmlspecialchars($data["kategori"]);
		$jumlah_stok = htmlspecialchars($data["jumlah_stok"]);
		$harga_satuan = htmlspecialchars($data["harga_satuan"]);


		//query insert data
		$query = "INSERT INTO barang VALUES('$id','$nama_barang','$kategori',$jumlah_stok, $harga_satuan) ";
		mysqli_query($conn, $query);

		return mysqli_affected_rows($conn);

	}


	function delete($id){
		global $conn;
		mysqli_query($conn, "DELETE FROM barang WHERE id = '$id' ");

		return mysqli_affected_rows($conn);
	}

	
	function update($data){
		global $conn;
		$id = $data["id"];
		$nama_barang = htmlspecialchars($data["nama_barang"]);
		$kategori = htmlspecialchars($data["kategori"]);
		$jumlah_stok = htmlspecialchars($data["jumlah_stok"]);
		$harga_satuan = htmlspecialchars($data["harga_satuan"]);

		$query = "UPDATE barang SET 
						id = '$id', 
						nama_barang = '$nama_barang' ,
						kategori = '$kategori', 
						jumlah_stok = $jumlah_stok , 
						harga_satuan = $harga_satuan 
				WHERE id = '$id' ";

		mysqli_query($conn, $query);

		echo mysqli_error($conn);
		echo mysqli_affected_rows($conn);
		return mysqli_affected_rows($conn);

	}


	function search($keyword) {
		$query = "SELECT * FROM barang WHERE nama_barang LIKE '%$keyword%' OR id LIKE '%$keyword%' OR kategori LIKE '%$keyword%'";

		return query($query);
	}


	function filter($data){
		$min = $data["harga_min"];
		$max = $data["harga_max"];
		$query = "SELECT barang.id, barang.nama_barang, barang.kategori, barang.jumlah_stok, barang.harga_satuan FROM barang WHERE barang.harga_satuan BETWEEN $min AND $max;";

		return query($query);
	}

?>

