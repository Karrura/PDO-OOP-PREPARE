<div class="pagetitle">
  <h1>FORM DATA SUPPLIER</h1>
  <nav>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="?page=index">Home</a></li>
      <li class="breadcrumb-item active">Supplier</li>
    </ol>
  </nav>
</div><!-- End Page Title -->
<body>
	<div class="container">
		<div class="container-fluid">
			<div class="card">
				<div class="card-header">
					<a type="button" class="btn btn-info" href="?page=supplier/index">Kembali</a>
				</div>
				<div class="card-body">
					<form method="POST" action="supplier/create_proses.php">
						<div class="form-group">
						    <label>Nama Supplier</label>
						    <input type="text" name="nama_supplier" class="form-control" placeholder="Masukkan nama supplier">
					  	</div>
					  	<div class="form-group">
						    <label>No Telp</label>
						    <input type="text" name="notelp" class="form-control" placeholder="Masukkan nomor telpon supplier">
					  	</div>
					  	<div class="form-group">
						    <label>Email</label>
						    <input type="email" name="email" class="form-control" placeholder="Masukkan email supplier">
					  	</div>
					  	<div class="form-group">
						    <label>Alamat</label>
						    <textarea class="form-control" name="alamat" rows="3"></textarea>
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