<?php
if(isset($_POST['submit'])){
	include '../koneksi.php';
	include("CrudBarang.php");
	$crud = new CrudBarang();
	$arrData = array(
		'kode_barang'=>$_POST['kode_barang'],
		'nama_barang'=>$_POST['nama_barang'],
		'satuan'=>$_POST['satuan'],
		'id_jenis'=>$_POST['id_jenis'],
		'id_supplier'=>$_POST['id_supplier'],
		'harga'=>$_POST['harga'],
		'stok'=>$_POST['stok']
	);
	$hasil = $crud->createData('barang', $arrData);
	if($hasil == "Sukses"){
		header("location:../?page=barang/index");
	}else{
		echo "Data gagal tersimpan";
	}
}
?>