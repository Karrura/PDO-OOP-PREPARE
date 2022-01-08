<?php
if(isset($_POST['submit'])){
	include '../koneksi.php';
	include("CrudSupplier.php");
	$crud = new CrudSupplier();
	$arrData = array(
		'nama_supplier'=>$_POST['nama_supplier'],
		'notelp'=>$_POST['notelp'],
		'email'=>$_POST['email'],
		'alamat'=>$_POST['alamat']);
	$hasil = $crud->createData('supplier', $arrData);
	if($hasil == "Sukses"){
		header("location:../?page=supplier/index");
	}else{
		echo "Data gagal tersimpan";
	}
}
?>