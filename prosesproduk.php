<?php
include('koneksi.php');
$koneksi = new Connection();

$action = $_GET['action'];
if($action =="add"){
	$koneksi->tambahdata($_POST['category_id'],($_POST['namaproduk'],($_POST['hargaproduk'],($_POST['deskripsiproduk'],($_POST['statusproduk']);
	header('location:dataproduk.php');
}


?>