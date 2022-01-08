<div class="pagetitle">
  <h1>FORM UBAH DATA BARANG</h1>
  <nav>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="?page=index">Home</a></li>
      <li class="breadcrumb-item active">Barang</li>
    </ol>
  </nav>
</div><!-- End Page Title -->
<?php
include 'barang/CrudBarang.php';
$crud = new CrudBarang();
if(isset($_GET['id'])){
	$idvalue = $_GET['id'];
	$update = $crud->readData('barang', 'id', $idvalue);
	foreach ($update as $data) {
		$id_barang = $data['id_barang'];
		$kode_barang = $data['kode_barang'];
		$nama_barang = $data['nama_barang'];
		$satuan = $data['satuan'];
		$bid_jenis = $data['id_jenis'];
		$bid_supplier = $data['id_supplier'];
		$harga = $data['harga'];
		$stok = $data['stok'];
	}
}else{
	$id = '';
	$kode_barang = '';
	$nama_barang = '';
	$satuan = '';
	$id_jenis = '';
	$id_supplier = '';
	$harga = '';
	$stok = '';
}
$datajenis = $crud->readDataJenis();
foreach ($datajenis as $jenis) {
	$cekidjenis = $jenis['id_jenis'];
}
$datasupplier = $crud->readDataSupplier();
foreach ($datasupplier as $supplier) {
	$cekidsupplier = $supplier['id_supplier'];
}
?>
<body>
	<div class="container">
		<div class="container-fluid">
			<div class="card">
				<div class="card-header">
					<a type="button" class="btn btn-info" href="?page=barang/index">Kembali</a>
				</div>
				<div class="card-body">
					<form method="POST" action="barang/edit_proses.php">
						<div class="form-group">
						    <label>Kode Barang</label>
						    <input type="text" hidden name="id" class="form-control" value="<?php echo "$id_barang";?>">
						    <input type="text" name="kode_barang" value="<?php echo "$kode_barang";?>" class="form-control" placeholder="Masukkan kode barang">
					  	</div>
					  	<div class="form-group">
						    <label>Barang</label>
						    <input type="text" name="nama_barang" value="<?php echo "$nama_barang";?>" class="form-control" placeholder="Masukkan nama barang">
					  	</div>
					  	<div class="form-group">
						    <label>Satuan</label>
						    <input type="text" name="satuan" value="<?php echo "$satuan";?>" class="form-control" placeholder="Masukkan satuan barang">
					  	</div>
					  	<div class="form-group">
						    <label>Jenis</label>
						    <select class="form-control" name="id_jenis">
                                <option value="">Select Jenis</option>
                                <?php foreach($datajenis as $data): ?>
                                <option value="<?= $data['id_jenis'];?>" <?php $cek = $bid_jenis == $data['id_jenis']; if($cek) echo 'selected';?>><?= $data['nama_jenis'];?></option>
                                <?php endforeach; ?>
                            </select>
					  	</div>
					  	<div class="form-group">
						    <label>Supplier</label>
						    <select class="form-control" name="id_supplier" id="id_supplier" value="id_supplier">
                                <option value="">Select Supplier</option>
                                <?php foreach($datasupplier as $data): ?>
                                <option value="<?= $data['id_supplier'];?>" <?php $cek = $bid_supplier == $data['id_supplier']; if($cek) echo 'selected';?>><?= $data['nama_supplier'];?></option>
                                <?php endforeach; ?>
                            </select>
					  	</div>
					  	<div class="form-group">
						    <label>Harga</label>
						    <input type="number" name="harga" value="<?php echo "$harga";?>" class="form-control" placeholder="Masukkan harga barang">
					  	</div>
					  	<div class="form-group">
						    <label>Stok</label>
						    <input type="number" name="stok" value="<?php echo "$stok";?>" class="form-control" placeholder="Masukkan stok barang">
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