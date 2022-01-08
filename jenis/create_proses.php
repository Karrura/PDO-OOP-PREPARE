<?php
if(isset($_POST['submit'])){
	include '../koneksi.php';
	include("CrudJenis.php");
	$crud = new CrudJenis();
	$arrData = array(
		'nama_jenis'=>$_POST['nama_jenis'],
		'keterangan'=>$_POST['keterangan']);
	$hasil = $crud->createData('jenis', $arrData);
	if($hasil == "Sukses"){
		header("location:../?page=jenis/index");
	}else{
		echo "Data gagal tersimpan";
	}
}
?>