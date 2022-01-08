<?php
include "koneksi.php";

class CrudSupplier extends Koneksi
{
	function __construct()
	{
		parent::__construct();
		$this->db = new PDO("mysql:host=localhost;dbname=haurameri", "root", "");
	}

	public function readData($table, $idtable, $idvalue)
	{	
		$query = "select * from $table ";
		if($idtable != NULL){
			$query .= "where $idtable='".$idvalue."'";
		}
		$hasil = $this->db->prepare($query);
		$hasil->execute();
		if(!$hasil){
			echo "Gagal menampilkan data";
		}
		$data = array();
		while($row = $hasil->fetch(PDO::FETCH_ASSOC)){
			$data[] = $row;
		}
		return $data;
	}

	public function createData($table, $data)
	{
		$field = implode(',', array_keys($data));
		$escaped_values = array_map(mysqli_real_escape_string(), array_values($data));
		foreach ($escaped_values as $index => $data) $escaped_values[$index]="'".$data."'";
		$values = implode(', ', $escaped_values);
		$query = "insert into $table ($field) values($values)";
		$hasil = $this->db->prepare($query);
		$hasil->execute();
		if($hasil){
			return "Sukses";
		}else{
			return "Gagal";
		}
	}

	public function updateData($table, $data=array(), $id, $idvalue)
	{	
		$args = array();
		foreach ($data as $key => $value) {
            $args[] = "$key = '$value'"; 
        }
		$query = "UPDATE $table SET ";
		$query .= implode(', ', $args);
		$query .= " WHERE $id='".$idvalue."'";
		$hasil = $this->db->prepare($query);
		$hasil->execute();
		if($hasil){
			return "Sukses";
		}else{
			return "Gagal";
		}
	}

	public function deleteData($table, $id, $idvalue)
	{
		$query = "delete from $table where $id = '".$idvalue."'";
		$hasil = $this->db->prepare($query);
		$hasil->execute();
		if($hasil){
			return "Sukses";
		}else{
			return "Gagal";
		}
	}
}
?>