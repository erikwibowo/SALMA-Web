<?php if ($content == "pengaturan") {
foreach ($data as $key) { } ?>
	<div class="box">
		<div class="box-header with-border">
          <center><h3 class="box-title">PENGATURAN</h3></center>
        </div>
		<div class="box-body">
			<form action="<?= site_url('admin/pengaturan/simpan') ?>" role="form" class="form-horizontal" data-toggle="validator" method="post" accept-charset="utf-8">
				<div class="form-group" style="margin-bottom: 5px">
					<div class="col-md-8 col-md-offset-2">
						<div class="col-md-3">
							<label>TENGGAT WAKTU (HARI)</label>
		    			</div>
		    			<div class="col-md-9">
							<input type="text" value="<?= $key->tenggat_waktu ?>" id="tenggat_waktu" name="tenggat_waktu" required placeholder="Ketikkan Tenggat Waktu" class="form-control">
		    			</div>
					</div>
				</div>
				<div class="form-group" style="margin-bottom: 5px">
					<div class="col-md-8 col-md-offset-2">
						<div class="col-md-3">
							<label>POTONGAN WARIS</label>
						</div>
		    			<div class="col-md-9">
							<input type="text"  value="<?= $key->potongan_waris ?>"id="potongan_waris" required name="potongan_waris" placeholder="Ketikkan Jumlah Potongan Waris" class="form-control">
						</div>
					</div>
				</div>
				<div class="form-group" style="margin-bottom: 5px">
					<div class="col-md-8 col-md-offset-2">
						<div class="col-md-3">
							<label>POTONGAN SELAIN WARIS</label>
						</div>
		    			<div class="col-md-9">
							<input type="text" value="<?= $key->potongan_selain_waris ?>" id="potongan_selain_waris" required name="potongan_selain_waris" placeholder="Ketikkan Jumlah Potongan Selain Waris" class="form-control">
						</div>
					</div>
				</div>
				<div class="form-group" style="margin-bottom: 5px">
					<div class="col-md-8 col-md-offset-2">
						<div class="col-md-3">

						</div>
						<div class="col-md-9">
							<input type="hidden" name="id_pengaturan" value="<?= $key->id_pengaturan ?>">
							<input type="submit" value="SIMPAN" class="btn btn-success">
						</div>
					</div>
				</div>
			</form>
		</div>
	</div>
<?php } ?>