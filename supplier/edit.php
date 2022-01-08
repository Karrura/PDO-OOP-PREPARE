<div class="pagetitle">
  <h1>FORM UBAH DATA SUPPLIER</h1>
  <nav>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="?page=index">Home</a></li>
      <li class="breadcrumb-item active">Supplier</li>
    </ol>
  </nav>
</div><!-- End Page Title -->
<?php
include 'supplier/CrudSupplier.php';
$crud = new CrudSupplier();
if(isset($_GET['id'])){
	$idvalue = $_GET['id'];
	$update = $crud->readData('supplier', 'id', $idvalue);
	foreach ($update as $data) {
		$id = $data['id'];
		$nama_supplier = $data['nama_supplier'];
		$notelp = $data['notelp'];
		$email = $data['email'];
		$alamat = $data['alamat'];
	}
}else{
	$id = '';
	$nama_supplier = '';
	$notelp = '';
	$email = '';
	$alamat = '';
}
?>
<body>
	<div class="container">
		<div class="container-fluid">
			<div class="card">
				<div class="card-header">
					<a type="button" class="btn btn-info" href="?page=supplier/index">Kembali</a>
				</div>
				<div class="card-body">
					<form method="POST" action="supplier/edit_proses.php">
						<div class="form-group">
						    <label>Nama Supplier</label>
						    <input type="text" hidden name="id" class="form-control" value="<?php echo "$id";?>">
						    <input type="text" name="nama_supplier" class="form-control" placeholder="Masukkan nama supplier" value="<?php echo "$nama_supplier";?>">
					  	</div>
					  	<div class="form-group">
						    <label>No Telp</label>
						    <input type="text" name="notelp" class="form-control" placeholder="Masukkan nomor telpon supplier" value="<?php echo "$notelp";?>">
					  	</div>
					  	<div class="form-group">
						    <label>Email</label>
						    <input type="email" name="email" class="form-control" placeholder="Masukkan email supplier" value="<?php echo "$email";?>">
					  	</div>
					  	<div class="form-group">
						    <label>Alamat</label>
						    <textarea class="form-control" name="alamat" rows="3"><?php echo "$alamat";?></textarea>
					  	</div>
						<div class="form-group">
							<button type="submit" name="submit" value="Submit" class="btn btn-primary">Submit</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</body>