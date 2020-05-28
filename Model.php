<?php

class Model
{
	public function __construct()
	{
		$host = "localhost";
		$dbname = "kasir";
		$username = "root";
		$password = "";
		$this->db = new PDO("mysql:host={$host};dbname={$dbname}", $username, $password);
	}

	public function tampil_data()
	{

		$query = $this->db->prepare("select * from tbl_barang");
		$query->execute();
		$hasil = $query->fetchAll();
		return $hasil;
	}

	public function tambah_data()
	{
		$nama_barang = $_POST['nama_barang'];
		$kode_barang = $_POST['kode_barang'];
		$jenis_barang = $_POST['jenis_barang'];
		$stok = $_POST['stok'];
		$harga = $_POST['harga'];

		$sql = "INSERT INTO tbl_barang (nama_barang, kode_barang, jenis_barang, stok, harga) VALUES('$nama_barang', '$kode_barang', '$jenis_barang', '$stok', '$harga')";
		$query = $this->db->query($sql);
		if (!$query) {
			return "Gagal";
		} else {
			return "Sukses";
		}
	}

	function edit($id)
	{
		$query = $this->db->prepare("select * from tbl_barang where id_barang = '$id'");
		$query->execute();
		$hasil = $query->fetchAll();
		return $hasil;
	}

	public function update($id, $nama_barang, $kode_barang, $jenis_barang, $stok, $harga)
	{

		$sql = "update tbl_barang set nama_barang='$nama_barang', kode_barang='$kode_barang',jenis_barang='$jenis_barang',stok='$stok',harga='$harga' where id_barang='$id'";
		mysqli_query($this->db, $sql);

		header('location:index.php');
	}

	public function hapus($id)
	{
		$sql = "delete from tbl_barang where id_barang='$id'";
		$query = $this->db->query($sql);
		$query->execute();
		header('location:index.php');
	}
}
