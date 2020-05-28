<?php
include 'Model.php';

$id = $_GET['id'];

$db = new Model();


$action = $_POST['tombol'];
if ($action == "Simpan") {
	$db->tambah_data();
	header('location:index.php');
} else if ($action == "hapus") {
	$db->hapus($_GET['id']);
	header('location:index.php');
} else if ($action == "edit") {
	$id = $_GET['id'];
	$db->edit($id);
} else if ($action == 'Update') {
	$db->update();
	header('location:index.php');
} else if ($action == 'hapus') {
}
