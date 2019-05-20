<h3 class="text-center">Edit Data</h3>
	</center>
	<?php foreach($user as $u){ ?>
	<form action="<?php echo base_url(). 'web/aksi_edit'; ?>" method="post">
		<div class="col-md-3 pr-1" style="margin-left: 35%; margin-right: 20%">
            <div class="form-group">
               	<label>Nama Barang</label><label style="color: red">*</label>
               	<input type="hidden" name="id" value="<?php echo $u->id ?>">
                <input name="nama" type="text" class="form-control" value="<?php echo $u->nama ?>" required autofocus>
            </div>
        </div>
        <div class="col-md-3 pr-1" style="margin-left: 35%; margin-right: 20%">
            <div class="form-group">
               	<label>Jumlah Barang</label><label style="color: red">*</label>
                <input name="jumlah" type="number" class="form-control" value="<?php echo $u->jumlah ?>" required autofocus>
            </div>
        </div>
        <div class="col-md-3 pr-1" style="margin-left: 43%; margin-right: 20%">
            <div class="form-group">
               	<button class="btn btn-primary btn-round" type="submit" name="Simpan" onclick="return valid();">Simpan
                <i class="now-ui-icons ui-1_send"></i></button>
            </div>
        </div>
	</form>	
	<?php } ?>