<?php

include 'Model.php';
$db = new Model();
?>

<!DOCTYPE html>
<html>

<head>
	<title>Data Barang</title>
</head>

<body>
	<h1>BARANG</h1>

	<a href="views/tambah_barang.php">Tambah Data</a>
	<table border="1">
		<tr>
			<th>No</th>
			<th>Nama Barang</th>
			<th>Kode Barang</th>
			<th>Jenis Barang</th>
			<th>Stok</th>
			<th>Harga</th>
		</tr>

		<?php
		$no = 1;
		$data = $db->tampil_data();

		foreach ($data as $x) {
		?>
			<tr>
				<td><?php echo $no++; ?></td>
				<td><?php echo $x['nama_barang']; ?></td>
				<td><?php echo $x['kode_barang']; ?></td>
				<td><?php echo $x['jenis_barang']; ?></td>
				<td><?php echo $x['stok']; ?></td>
				<td><?php echo $x['harga']; ?></td>
				<td>
					<a href="views/edit_barang.php?id=<?php echo $x['id_barang']; ?>">Edit</a>
					<a href="views/hapus.php?id=<?php echo $x['id_barang']; ?>">Hapus</a>
				</td>
			</tr>
		<?php
		}
		?>
	</table>
</body>

</html>