<div class="pagetitle">
  <h1>FORM DATA BARANG</h1>
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
$hasil = $crud->readData('barang', null, null);
$datajenis = $crud->readDataJenis();
$datasupplier = $crud->readDataSupplier();
?>
<body>
	<div class="container">
		<div class="container-fluid">
			<div class="card">
				<div class="card-header">
					<a type="button" class="btn btn-info" href="?page=barang/index">Kembali</a>
				</div>
				<div class="card-body">
					<form method="POST" action="barang/create_proses.php">
						<div class="form-group">
						    <label>Kode Barang</label>
						    <input type="text" name="kode_barang" class="form-control" placeholder="Masukkan kode barang">
					  	</div>
					  	<div class="form-group">
						    <label>Barang</label>
						    <input type="text" name="nama_barang" class="form-control" placeholder="Masukkan nama barang">
					  	</div>
					  	<div class="form-group">
						    <label>Satuan</label>
						    <input type="text" name="satuan" class="form-control" placeholder="Masukkan satuan barang">
					  	</div>
					  	<div class="form-group">
						    <label>Jenis</label>
						    <select class="form-control" name="id_jenis" id="id_jenis">
                                <option value="">Select Jenis</option>
                                <?php foreach($datajenis as $data){ ?>
                                <option value="<?= $data['id'];?>"><?= $data['nama_jenis'];?></option>
                                <?php } ?>
                            </select>
					  	</div>
					  	<div class="form-group">
						    <label>Supplier</label>
						    <select class="form-control" name="id_supplier" id="id_supplier">
                                <option value="">Select Supplier</option>
                                <?php foreach($datasupplier as $data){ ?>
                                <option value="<?= $data['id'];?>"><?= $data['nama_supplier'];?></option>
                                <?php } ?>
                            </select>
					  	</div>
					  	<div class="form-group">
						    <label>Harga</label>
						    <input type="number" name="harga" class="form-control" placeholder="Masukkan harga barang">
					  	</div>
					  	<div class="form-group">
						    <label>Stok</label>
						    <input type="number" name="stok" class="form-control" placeholder="Masukkan stok barang">
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