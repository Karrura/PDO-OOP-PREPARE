<?php
	include("CrudSupplier.php");
	$crud = new CrudSupplier();
	if(isset($_GET['id'])){
		$idvalue = $_GET['id'];
		$hasil = $crud->deleteData('supplier', 'id', $idvalue);
		if($hasil == "Sukses"){
			echo "<a href=?page=supplier/index>Kembali</a>";
		}
	}
?>