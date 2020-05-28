<?php

include '../Model.php';
$mod = new Model();
$id = $_GET['id'];
$mod->hapus($id);
header('location:../index.php');
