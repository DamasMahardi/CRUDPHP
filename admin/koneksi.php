<?php
$host ="localhost";
$user= "root";
$pass ="admin";
$db ="tes_db";

$conn =mysqli_connect($host,$user,$pass,$db);
if ($conn==false) {
	echo "koneksi server gagal";

}
else{
	echo "berhasil";
}

  ?>
