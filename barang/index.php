<div class="pagetitle">
  <h1>DATA BARANG</h1>
  <nav>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="?page=index">Home</a></li>
      <li class="breadcrumb-item active">Barang</li>
    </ol>
  </nav>
</div><!-- End Page Title -->
<div class="card">
	<div class="card-header">
		<a type="button" class="btn btn-info" href="?page=barang/create">Tambah Data</a>
	</div>            <!-- /.card-header -->
    <div class="card-body">
    	
      <table id="example1" class="table datatable">
        <thead>
        <tr>
          	<th>No</th>
			<th>Kode Barang</th>
			<th>Barang</th>
			<th>Satuan</th>
			<th>Jenis</th>
			<th>Supplier</th>
			<th>Harga</th>
			<th>Stok</th>
			<th>Aksi</th>
        </tr>
        <?php
			include("CrudBarang.php");
			$crud = new CrudBarang();
			$barang = $crud->readData('barang', null, null);
			$index = 1;
			foreach ($barang as $data) {
		?>
        </thead>
        <tbody>
        <tr>
			<td align="center"><?php echo $index?></td>
			<td><?php echo $data['kode_barang'];?></td>
			<td><?php echo $data['nama_barang'];?></td>
			<td><?php echo $data['satuan'];?></td>
			<td><?php echo $data['nama_jenis'];?></td>
			<td><?php echo $data['nama_supplier'];?></td>
			<td><?php echo $data['harga'];?></td>
			<td><?php echo $data['stok'];?></td>
			<td>
				<a href="?page=barang/edit&id=<?php echo $data['id_barang'] ?>"><button class="btn btn-outline-warning btn-sm">Edit</button></a>
				<a href="?page=barang/delete_proses&id=<?php echo $data['id_barang'] ?>" onclick="return confirm('Anda Yakin Menghapus?')"><button class="btn btn-outline-danger btn-sm">Hapus</button></a>
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
