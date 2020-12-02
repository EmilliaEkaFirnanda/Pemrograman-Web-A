<?php
require 'conn.php';

global $conn;
$number = count($_POST["jenjang"]);

if ($number > 0) {
   for ($i = 0; $i < $number; $i++) {
      $jenjang = htmlspecialchars($_POST["jenjang"][$i]);
      $jurusan = htmlspecialchars($_POST["jurusan"][$i]);
      $tahun = htmlspecialchars($_POST["tahun1"][$i]) . ' - ' . htmlspecialchars($_POST["tahun2"][$i]);

      if (trim($_POST["jenjang"][$i] != '') && ($_POST["jurusan"][$i] != '') && trim($_POST["tahun1"][$i] != '') && trim($_POST["tahun2"][$i] != '')) {
         $sql = "INSERT INTO pendidikan (jenjang, jurusan, tahun) VALUES('$jenjang','$jurusan', '$tahun')";
         mysqli_query($conn, $sql);
      }
   }
   if (mysqli_affected_rows($conn) > 0) {
      echo "Data Inserted";
   } else {
      echo "Please Enter Fully";
   }
}
