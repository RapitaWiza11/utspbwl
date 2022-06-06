<?php
include('koneksi.php');
$koneksi = new Connection();

$action = $_GET['action'];
if($action =="add"){
	$koneksi->tambahdata($_POST['category_name']);
	header('location:datakategori.php');
}
else if($action=="edit"){
	$koneksi->editdata($_POST['category_name'],$_POST['category_id']);
	header('location:datakategori.php');
}
elseif($action=="delete")
{
	$category_id = $_GET['id'];
	$koneksi->deletedata($category_id);
	header('location:datakategori.php');
}
?>