<?php
	include("CrudJenis.php");
	$crud = new CrudJenis();
	if(isset($_GET['id'])){
		$idvalue = $_GET['id'];
		$hasil = $crud->deleteData('jenis', 'id', $idvalue);
		if($hasil == "Sukses"){
			echo "<a href=?page=jenis/index>Kembali</a>";
		}
	}
?>