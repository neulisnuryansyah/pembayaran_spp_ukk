<h5>Halaman data petugas</h5>
<a href="?url=tambah-petugas" class="btn btn-primary">Tambh petugas</a>
<hr>
<table class="table table-striped table-bordered">
	<tr class="fe-bold">
		<td>No</td>
		<td>Username</td>
		<td>password</td>
		<td>nama_petugas</td>
		<td>Level</td>
		<td>Edit</td>
		<td>Hapus</td>
	</tr>
	<?php 
		include'../koneksi.php';
		$no = 1;
		$sql = "SELECT*FROM petugas ORDER BY id_petugas DESC";
		$query = mysqli_query($koneksi, $sql);
		foreach($query as $data){ ?>
			<tr>
				<td><?= $no++; ?></td>
				<td><?= $data['username'] ?></td>
				<td><?= $data['password'] ?></td>
				<td><?= $data['nama_petugas'] ?></td>
				<td><?= $data['level'] ?></td>
				<td>
					<a href="?url=edit-petugas&id_petugas=<?= $data['id_petugas']?>"class= 'btn btn-warning'>EDIT</a>
				</td>
				<td>
					<a onclick="return confirm('Apakah anda yakin ingin menghapus Data')" href="?url=hapus-petugas&id_petugas=<?= $data['id_petugas']?>"class= 'btn btn-danger'>HAPUS</a>
				</td>
			</tr>

		<?php  }?>

	 
	

</table>