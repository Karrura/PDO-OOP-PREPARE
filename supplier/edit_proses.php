<?php
if(isset($_POST['submit'])){
	include '../koneksi.php';
	include("CrudSupplier.php");
	$crud = new CrudSupplier();
	$idvalue = $_POST['id'];
	$arrData = array(
		'nama_supplier'=>$_POST['nama_supplier'],
		'notelp'=>$_POST['notelp'],
		'email'=>$_POST['email'],
		'alamat'=>$_POST['alamat']);
	$hasil = $crud->updateData('supplier', $arrData, 'id', $idvalue);
	if($hasil == "Sukses"){
		header("location:../?page=supplier/index");
	}else{
		echo "Data gagal terubah";
	}
}
?>