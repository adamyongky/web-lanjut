<?php
	include "config.php";
	$db = new database();

	$aksi = $_GET['aksi'];
	if($aksi=='tambah'){
		$db->input($_POST['nama_bengkel'],$_POST['alamat'],$POST['no_hp'],$POST['status']);
		header("location:tampildata.php");
	} elseif($aksi=='hapus'){
		$db->hapus($_GET['id']);
		header("location:tampildata.php");
	}elseif($aksi=='update'){
		$db->update($_POST['id'],$_POST['nama_bengkel'],$_POST['alamat'],$POST['no_hp'],$POST['status']);
		header("location:tampildata.php");
	}else echo "ada kesalahan";