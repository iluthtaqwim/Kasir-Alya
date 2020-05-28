<?php
include 'Model.php';
$db = new Model();
$action = $_GET['action'];
if ($action == "tambah") {
	$db->tambah_data();
	header('location:index.php');
} else if ($action == "Update") {
	$id = $_GET['id'];

	$nama_barang = $_POST['nama_barang'];
	$kode_barang = $_POST['kode_barang'];
	$jenis_barang = $_POST['jenis_barang'];
	$stok = $_POST['stok'];
	$harga = $_POST['harga'];
	$db->update($id, $nama_barang, $kode_barang, $jenis_barang, $stok, $harga);
	header('location:index.php');
}



// } else if ($action == "Update") {
// 	$db->update($id);
// 	header('location:index.php');
// }
