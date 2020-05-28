<!DOCTYPE html>
<html>

<head>
	<title>Tambah Barang</title>
</head>

<body>
	<h3>Tambah Data Barang</h3>

	<form action="../Controller.php?action=tambah" method="post">
		<table>
			<tr>
				<td>Nama Barang</td>
				<td>:</td>
				<td><input type="text" name="nama_barang" /></td>
			</tr>
			<tr>
				<td>Kode Barang</td>
				<td>:</td>
				<td><input type="text" name="kode_barang" /></td>
			</tr>
			<tr>
				<td>Jenis Barang</td>
				<td>:</td>
				<td><input type="text" name="jenis_barang" /></td>
			</tr>
			<tr>
				<td>Stok</td>
				<td>:</td>
				<td><input type="text" name="stok" /></td>
			</tr>
			<tr>
				<td>Harga</td>
				<td>:</td>
				<td><input type="text" name="harga" /></td>
			</tr>
			<tr>
				<td></td>
				<td></td>
				<td><input type="submit" name="tombol" value="Simpan" /></td>
			</tr>
		</table>
	</form>
</body>

</html>