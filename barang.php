<?php 
require "Model.php";
class Barang extends Model {
    protected $fields = [
        'id_barang',
        'nama_barang',
        'kode_barang',
        'jenis_barang',
        'stok'
        'harga'
    ];
    protected $table = 'tbl_barang';
}
?>