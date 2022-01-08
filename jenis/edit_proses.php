<?php
if(isset($_POST['submit'])){
	include '../koneksi.php';
	include("CrudJenis.php");
	$crud = new CrudJenis();
	$idvalue = $_POST['id'];
	$arrData = array(
		'nama_jenis'=>$_POST['nama_jenis'],
		'keterangan'=>$_POST['keterangan']);
	$hasil = $crud->updateData('jenis', $arrData, 'id', $idvalue);
	if($hasil == "Sukses"){
		header("location:../?page=jenis/index");
	}else{
		echo "Data gagal terubah";
	}
}
?>