<div class="pagetitle">
  <h1>FORM DATA JENIS</h1>
  <nav>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="?page=index">Home</a></li>
      <li class="breadcrumb-item active">Jenis</li>
    </ol>
  </nav>
</div><!-- End Page Title -->
<body>
	<div class="container">
		<div class="container-fluid">
			<div class="card">
				<div class="card-header">
					<a type="button" class="btn btn-info" href="?page=jenis/index">Kembali</a>
				</div>
				<div class="card-body">
					<form method="POST" action="jenis/create_proses.php">
						<div class="form-group">
						    <label>Nama Jenis</label>
						    <input type="text" name="nama_jenis" class="form-control" placeholder="Masukkan nama jenis">
					  	</div>
					  	<div class="form-group">
						    <label>Keterangan</label>
						    <textarea class="form-control" name="keterangan" rows="3"></textarea>
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