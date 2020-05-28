<?php
include '../Model.php';
$db = new Model();

$id = $_GET['id'];

?>

<h3>Edit Data Barang</h3>

<form action="../Controller.php?action=Update" method="post">
	<?php
	foreach ($db->edit($id) as $d) {
	?>
		<table>
			<tr>
				<td>Nama Barang</td>
				<td>
					<input type="hidden" name="id" value="<?php echo $d['id_barang'] ?>">
					<input type="text" name="nama_barang" value="<?php echo $d['nama_barang'] ?>">
				</td>
			</tr>
			<tr>
				<td>Kode Barang</td>
				<td><input type="text" name="kode_barang" value="<?php echo $d['kode_barang'] ?>"></td>
			</tr>
			<tr>
				<td>Jenis Barang</td>
				<td><input type="text" name="jenis_barang" value="<?php echo $d['jenis_barang'] ?>"></td>
			</tr>
			<tr>
				<td>Stok</td>
				<td><input type="text" name="stok" value="<?php echo $d['stok'] ?>"></td>
			</tr>
			<tr>
				<td>Harga</td>
				<td><input type="text" name="harga" value="<?php echo $d['harga'] ?>"></td>
			</tr>

		</table>

	<?php } ?>
	<button type="submit" name="tombol" value="Update">Update</button>
</form>