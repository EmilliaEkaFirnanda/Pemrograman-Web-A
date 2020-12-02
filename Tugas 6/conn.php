<?php

function connection()
{
  $dbServer = 'localhost';
  $dbUser = 'root';
  $dbPass = '';
  $dbName = "cv";

  $conn = mysqli_connect($dbServer, $dbUser, $dbPass, $dbName);

  if (!$conn) {
    die('Koneksi gagal: ' . mysqli_error());
  }

  mysqli_select_db($conn, $dbName);
  return $conn;
}

$conn = connection();


function delete($id)
{
  global $conn;
  $id = $_POST['id'];
  mysqli_query($conn, "DELETE FROM pedidikan WHERE id = '$id' ");

  return mysqli_affected_rows($conn);
}


function query($query)
{
  global $conn;
  $result = mysqli_query($conn, $query);
  $record = [];

  while ($data = mysqli_fetch_assoc($result)) {
    $record[] = $data;
  }
  return $record;
}

function input($data)
{
  global $conn;

  $jenjang1 = htmlspecialchars($data["jenjang1"]);
  $jenjang2 = htmlspecialchars($data["jenjang2"]);
  $jenjang3 = htmlspecialchars($data["jenjang3"]);
  $jenjang4 = htmlspecialchars($data["jenjang4"]);

  $jurusan1 = htmlspecialchars($data["jurusan1"]);
  $jurusan2 = htmlspecialchars($data["jurusan2"]);
  $jurusan3 = htmlspecialchars($data["jurusan3"]);
  $jurusan4 = htmlspecialchars($data["jurusan4"]);

  $tahun1 = htmlspecialchars($data["tahun1_1"] . " - " . $data["tahun1_2"]);
  $tahun2 = htmlspecialchars($data["tahun2_1"] . " - " . $data["tahun2_2"]);
  $tahun3 = htmlspecialchars($data["tahun3_1"] . " - " . $data["tahun3_2"]);
  $tahun4 = htmlspecialchars($data["tahun4_1"] . " - " . $data["tahun4_2"]);


  $query = "INSERT INTO pendidikan VALUES
        ('', '$jenjang1',$jurusan1,'$tahun1'),
        ('', '$jenjang2',$jurusan2,'$tahun2'),
        ('', '$jenjang3',$jurusan3,'$tahun3'),
        ('', '$jenjang4',$jurusan4,'$tahun4');";
  mysqli_query($conn, $query);

  return mysqli_affected_rows($conn);
}
