<?php
	//KONEKSI BIASA
	// $konek=mysqli_connect('localhost','root','','haurameri');
	// if(!$konek){
	// 	die("Koneksi Dengan Database Gagal : " . mysqli_connect_error());
	// }

class Koneksi
{	
	protected $conn;
	function __construct()
	{
		if(!isset($conn)){
			// $this->conn = new mysqli('localhost','root','','haurameri');
			try {
				$conn = new PDO('mysql:host=localhost;dbname=haurameri', "root", "");
			} catch (PDOException $e) {
				print "Koneksi atau query gagal: ".$e->getMessage()."<br/>";
				die();
			}
		}		
		return $conn;
	}
}
?>