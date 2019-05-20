<section>
	<h1 class="text-center">Tambah Data Barang</h1>
	<form action="<?php echo base_url(). 'web/aksi_tambah'; ?>" method="post">
        <div class="col-md-3 pr-1" style="margin-left: 35%; margin-right: 20%">
            <div class="form-group">
               	<label>Nama Barang</label><label style="color: red">*</label>
                <input name="nama" type="text" class="form-control" placeholder="Nama Barang" required autofocus>
            </div>
        </div>
        <div class="col-md-3 pr-1" style="margin-left: 35%; margin-right: 20%">
            <div class="form-group">
               	<label>Jumlah Barang</label><label style="color: red">*</label>
                <input name="jumlah" type="number" class="form-control" placeholder="Jumlah Barang" required autofocus>
            </div>
        </div>
        <div class="col-md-3 pr-1" style="margin-left: 43%; margin-right: 20%">
            <div class="form-group">
               	<button class="btn btn-primary btn-round" type="submit" name="tambah" onclick="return valid();">Simpan
                <i class="now-ui-icons ui-1_send"></i></button>
            </div>
        </div>
	</form>	
</section>