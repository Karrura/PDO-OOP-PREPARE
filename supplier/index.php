<div class="pagetitle">
  <h1>DATA SUPPLIER</h1>
  <nav>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="?page=index">Home</a></li>
      <li class="breadcrumb-item active">Supplier</li>
    </ol>
  </nav>
</div><!-- End Page Title -->
<div class="card">
	<div class="card-header">
		<a type="button" class="btn btn-info" href="?page=supplier/create">Tambah Data</a>
	</div>            <!-- /.card-header -->
    <div class="card-body">
    	
      <table class="table datatable">
        <thead>
        <tr>
          	<th>No</th>
			<th>Nama Supplier</th>
			<th>No Telpon</th>
			<th>Email</th>
			<th>Alamat</th>
			<th>Aksi</th>
        </tr>
        <?php
			include("CrudSupplier.php");
			$crud = new CrudSupplier();
			$supplier = $crud->readData('supplier', null, null);
			$index = 1;
			foreach ($supplier as $data) {
		?>
        </thead>
        <tbody>
        <tr>
			<td align="center"><?php echo $index?></td>
			<td><?php echo $data['nama_supplier'];?></td>
			<td><?php echo $data['notelp'];?></td>
			<td><?php echo $data['email'];?></td>
			<td><?php echo $data['alamat'];?></td>
			<td>
				<a href="?page=supplier/edit&id=<?php echo $data['id'] ?>"><button class="btn btn-outline-warning btn-sm">Edit</button></a>
				<a href="?page=supplier/delete_proses&id=<?php echo $data['id'] ?>" onclick="return confirm('Anda Yakin Menghapus?')"><button class="btn btn-outline-danger btn-sm">Hapus</button></a>
			</td>
		</tr>
		<?php
			$index++;}
		?>
        </tbody>
      </table>
    </div>
    <!-- /.card-body -->
</div>
