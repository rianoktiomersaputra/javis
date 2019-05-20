<div class="container">
	<h1 class="text-center">Data Barang</h1>
	<div class="text-center">
		<button class="btn btn-dark"><a style="text-decoration: none; color: white" href="<?php echo base_url().'web/tambah' ?>">Tambah Data</a></button>
	</div>
	<table class="table table-responsive" style="margin-left: 28%; margin-top: 20px">
		<tr class="text-center">
			<th>No</th>
			<th>Nama Barang</th>
			<th>Jumlah</th>
			<th>Aksi</th>
		</tr>
		<?php $no=1; foreach($user as $u){ ?>
		<tr>
			<td class="text-center"><?php echo $no++; ?></td>
			<td><?php echo $u->nama ?></td>
			<td class="text-center"><?php echo $u->jumlah ?> pcs</td>
			<td class="text-center">
				<a class="btn btn-success" style="width: 100px; height: 35px" <?php echo anchor('web/edit/'.$u->id,'Edit'); ?> </button>
				<a class="btn btn-danger" style="width: 100px; height: 35px"<?php echo anchor('web/hapus/'.$u->id,'Hapus'); ?> </button>
			</td>
		</tr>
		<?php } ?>
	</table>
</div>