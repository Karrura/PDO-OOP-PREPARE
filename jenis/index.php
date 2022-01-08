<div class="pagetitle">
  <h1>DATA JENIS</h1>
  <nav>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="?page=index">Home</a></li>
      <li class="breadcrumb-item active">Jenis</li>
    </ol>
  </nav>
</div><!-- End Page Title -->
<div class="card">
	<div class="card-header">
		<a type="button" class="btn btn-info" href="?page=jenis/create">Tambah Data</a>
	</div>            <!-- /.card-header -->
    <div class="card-body">
    	
      <table id="example1" class="table datatable">
        <thead>
        <tr>
          	<th>No</th>
			<th>Nama Jenis</th>
			<th>Keterangan</th>
			<th>Aksi</th>
        </tr>
        <?php
			include("CrudJenis.php");
			$crud = new CrudJenis();
			$jenis = $crud->readData('jenis', null, null);
			$index = 1;
			foreach ($jenis as $data) {
		?>
        </thead>
        <tbody>
        <tr>
			<td align="center"><?php echo $index?></td>
			<td><?php echo $data['nama_jenis'];?></td>
			<td><?php echo $data['keterangan'];?></td>
			<td>
				<a href="?page=jenis/edit&id=<?php echo $data['id'] ?>"><button class="btn btn-outline-warning btn-sm">Edit</button></a>
				<a href="?page=jenis/delete_proses&id=<?php echo $data['id'] ?>" onclick="return confirm('Anda Yakin Menghapus?')"><button class="btn btn-outline-danger btn-sm">Hapus</button></a>
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
