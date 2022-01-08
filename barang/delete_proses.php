<?php
	include("CrudBarang.php");
	$crud = new CrudBarang();
	if(isset($_GET['id'])){
		$idvalue = $_GET['id'];
		$hasil = $crud->deleteData('barang', 'id', $idvalue);
		if($hasil == "Sukses"){
			echo "<a href=?page=barang/index>Kembali</a>";
		}
	}
?>