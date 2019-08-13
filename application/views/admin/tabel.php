<script src="<?= base_url() ?>assets/bower_components/jquery/dist/jquery.min.js"></script>
<?php if ($content == "data-admin") { ?>
	<div class="box">
		<div class="box-header">
			<h3 class="box-title"><?= $subtitle ?></h3>
			<div class="box-tools">
				<div class="btn-group">
                  <a href="#" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#modal-tambah"><i class="fa fa-plus"></i> Tambah</a>
                </div>
			</div>
			<div class="modal fade" id="modal-tambah">
				<div class="modal-dialog">
					<div class="modal-content">
					  <div class="modal-header">
					    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
					      <span aria-hidden="true">&times;</span></button>
					    <h4 class="modal-title">Tambah admin</h4>
					  </div>
					  <div class="modal-body">
					    <form id="FormUser" class="form-horizontal" action="<?= site_url('admin/admin/insert') ?>" method="POST" style="padding: 20px">
					    	<div class="form-group">
					    		<label>Nama admin</label>
					    		<input type="text" name="nama_admin" required placeholder="Nama admin" class="form-control">
					    	</div>
					    	<div class="form-group">
					    		<label>Alamat</label>
					    		<input type="text" name="alamat_admin" required placeholder="Alamat" class="form-control">
					    	</div>
					    	<div class="form-group">
					    		<label>No. Telepon</label>
					    		<input type="text" name="wa_admin" required placeholder="No. Telepon" class="form-control">
					    	</div>
					    	<div class="form-group">
					    		<label>Password</label>
					    		<input type="password" name="password" required placeholder="Password" class="form-control">
					    	</div>
					  </div>
					  <div class="modal-footer">
					    <button type="button" class="btn btn-danger pull-left btn-sm" data-dismiss="modal">Batal</button>
					    <button type="submit" class="btn btn-success btn-sm">Simpan</button>
					  </div>
					  </form>
					</div>
					<!-- /.modal-content -->
					</div>
					<!-- /.modal-dialog -->
				</div>
				<!-- /.modal -->
		</div>
	<!-- /.box-header -->
		<div class="box-body table-responsive">
			<table id="example1" class="table table-bordered table-striped">
				<thead>
					<tr>
						<th>No</th>
						<th>Nama</th>
						<th>Alamat</th>
						<th>No. Telepon</th>
						<th>Status</th>
						<th>Dibuat</th>
						<th>Aksi</th>
					</tr>
				</thead>
				<tbody>
				<?php $no = 1; foreach ($data as $key) { ?>
					<tr>
						<td><?= $no++ ?></td>
						<td><?= $key->nama_admin ?></td>
						<td><?= $key->alamat_admin ?></td>
						<td><?= $key->wa_admin ?></td>
						<td><?= $key->aktif == 1 ? "<label class='label label-info'>Aktif</label>":"<label class='label label-danger'>Non Aktif</label>" ?></td>
						<td><?= $key->dibuat ?></td>
						<td>
							<div class="btn-group">
								<a href="#" class="btn btn-info btn-xs" role="button" data-toggle="modal" data-target="#modal-edit<?= $key->id_admin ?>">
								    <span data-toggle="tooltip" data-placement="top" title="Lihat/ubah data"><i class="fa fa-eye"></i></span>
								 </a>
								<!-- <a href="#" class="btn btn-info btn-sm" data-toggle="modal" data-target="#modal-edit<?= $key->id_admin ?>"><i class="fa fa-pencil"></i></a> -->
								<a href="<?= site_url('admin/admin/delete/'.$key->id_admin) ?>" onclick="return confirm('Apakah anda yakin akan menghapus admin ini?\n<?= $key->nama_admin ?>')" class="btn btn-danger btn-xs"  data-toggle="tooltip" data-placement="top" title="Hapus Data"><i class="fa fa-trash-o"></i></a>
							    <?php if ($key->aktif == 1) { ?>
							    	<a href="<?= site_url('admin/admin/non-aktifkan/'.$key->id_admin) ?>" onclick="return confirm('Apakah anda yakin akan menonaktifkan admin ini?\n<?= $key->nama_admin ?>')" class="btn btn-warning btn-xs" data-toggle="tooltip" data-placement="top" title="Non Aktifkan"><i class="fa fa-lock"></i></a>
							    <?php }else{ ?>
							    	<a href="<?= site_url('admin/admin/aktifkan/'.$key->id_admin) ?>" onclick="return confirm('Apakah anda yakin akan mengaktifkan admin ini?\n<?= $key->nama_admin ?>')" class="btn btn-warning btn-xs" data-toggle="tooltip" data-placement="top" title="Aktifkan"><i class="fa fa-unlock"></i></a>
							    <?php } ?>
			                </div>
						</td>
					</tr>
					<!-- Modal -->
					<div class="modal fade" id="modal-edit<?= $key->id_admin?>">
						<div class="modal-dialog">
							<div class="modal-content">
							  <div class="modal-header">
							    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
							      <span aria-hidden="true">&times;</span></button>
							    <h4 class="modal-title">Tambah admin</h4>
							  </div>
							  <div class="modal-body">
							    <form id="FormUser" class="form-horizontal" action="<?= site_url('admin/admin/update') ?>" method="POST">
							    	<div class="form-group">
							    		<label>Nama admin</label>
							    		<input type="text" name="nama_admin" value="<?= $key->nama_admin ?>" required placeholder="Nama admin" class="form-control">
							    	</div>
							    	<div class="form-group">
							    		<label>Alamat</label>
							    		<input type="text" name="alamat_admin" value="<?= $key->alamat_admin ?>" required placeholder="Alamat" class="form-control">
							    	</div>
							    	<div class="form-group">
							    		<label>No. Telepon</label>
							    		<input type="text" name="wa_admin" value="<?= $key->wa_admin ?>" required placeholder="No. Telepon" class="form-control">
							    	</div>
							    	<div class="form-group">
							    		<label>Password</label>
							    		<input type="password" name="password" value="" required placeholder="Password" class="form-control">
							    		<input type="hidden" name="id_admin" value="<?= $key->id_admin ?>" class="form-control">
							    	</div>
							  </div>
							  <div class="modal-footer">
							    <button type="button" class="btn btn-danger pull-left btn-sm" data-dismiss="modal">Batal</button>
							    <button type="submit" class="btn btn-success btn-sm">Simpan</button>
							  </div>
							  </form>
							</div>
							<!-- /.modal-content -->
							</div>
							<!-- /.modal-dialog -->
						</div>
						<!-- /.modal -->
				<?php } ?>
				</tfoot>
			</table>
		</div>
		<!-- /.box-body -->
	</div>
	<!-- /.box -->
<?php } ?>

<?php if ($content == "data-pengguna") { ?>
	<div class="box">
		<div class="box-header">
			<h3 class="box-title"><?= $subtitle ?></h3>
			<div class="box-tools">
				<div class="btn-group">
                  <a href="#" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#modal-tambah"><i class="fa fa-plus"></i> Tambah</a>
                </div>
			</div>
			<div class="modal fade" id="modal-tambah">
				<div class="modal-dialog">
					<div class="modal-content">
					  <div class="modal-header">
					    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
					      <span aria-hidden="true">&times;</span></button>
					    <h4 class="modal-title">Tambah pengguna</h4>
					  </div>
					  <div class="modal-body">
					    <form id="FormUser" class="form-horizontal" action="<?= site_url('admin/pengguna/insert') ?>" method="POST" style="padding: 20px">
					    	<div class="form-group">
					    		<label>Nama pengguna</label>
					    		<input type="text" name="nama_user" required placeholder="Nama pengguna" class="form-control">
					    	</div>
					    	<div class="form-group">
					    		<label>Alamat</label>
					    		<input type="text" name="alamat_user" required placeholder="Alamat" class="form-control">
					    	</div>
					    	<div class="form-group">
					    		<label>No. Telepon</label>
					    		<input type="text" name="wa_user" required placeholder="No. Telepon" class="form-control">
					    	</div>
					    	<div class="form-group">
					    		<label>Password</label>
					    		<input type="password" name="password" required placeholder="Password" class="form-control">
					    	</div>
					  </div>
					  <div class="modal-footer">
					    <button type="button" class="btn btn-danger pull-left btn-sm" data-dismiss="modal">Batal</button>
					    <button type="submit" class="btn btn-success btn-sm">Simpan</button>
					  </div>
					  </form>
					</div>
					<!-- /.modal-content -->
					</div>
					<!-- /.modal-dialog -->
				</div>
				<!-- /.modal -->
		</div>
	<!-- /.box-header -->
		<div class="box-body table-responsive">
			<table id="example1" class="table table-bordered table-striped">
				<thead>
					<tr>
						<th>No</th>
						<th>Nama</th>
						<th>Alamat</th>
						<th>No. Telepon</th>
						<th>Status</th>
						<th>Dibuat</th>
						<th>Aksi</th>
					</tr>
				</thead>
				<tbody>
				<?php $no = 1; foreach ($data as $key) { ?>
					<tr>
						<td><?= $no++ ?></td>
						<td><?= $key->nama_user ?></td>
						<td><?= $key->alamat_user ?></td>
						<td><?= $key->wa_user ?></td>
						<td><?= $key->aktif == 1 ? "<label class='label label-info'>Aktif</label>":"<label class='label label-danger'>Non Aktif</label>" ?></td>
						<td><?= $key->dibuat ?></td>
						<td>
							<div class="btn-group">
								<a href="#" class="btn btn-info btn-xs" role="button" data-toggle="modal" data-target="#modal-edit<?= $key->id_user ?>">
								    <span data-toggle="tooltip" data-placement="top" title="Lihat/ubah data"><i class="fa fa-eye"></i></span>
								 </a>
								<!-- <a href="#" class="btn btn-info btn-sm" data-toggle="modal" data-target="#modal-edit<?= $key->id_user ?>"><i class="fa fa-pencil"></i></a> -->
								<a href="<?= site_url('admin/pengguna/delete/'.$key->id_user) ?>" onclick="return confirm('Apakah anda yakin akan menghapus pengguna ini?\n<?= $key->nama_user ?>')" class="btn btn-danger btn-xs"  data-toggle="tooltip" data-placement="top" title="Hapus Data"><i class="fa fa-trash-o"></i></a>
							    <?php if ($key->aktif == 1) { ?>
							    	<a href="<?= site_url('admin/pengguna/non-aktifkan/'.$key->id_user) ?>" onclick="return confirm('Apakah anda yakin akan menonaktifkan pengguna ini?\n<?= $key->nama_user ?>')" class="btn btn-warning btn-xs" data-toggle="tooltip" data-placement="top" title="Non Aktifkan"><i class="fa fa-lock"></i></a>
							    <?php }else{ ?>
							    	<a href="<?= site_url('admin/pengguna/aktifkan/'.$key->id_user) ?>" onclick="return confirm('Apakah anda yakin akan mengaktifkan pengguna ini?\n<?= $key->nama_user ?>')" class="btn btn-warning btn-xs" data-toggle="tooltip" data-placement="top" title="Aktifkan"><i class="fa fa-unlock"></i></a>
							    <?php } ?>
			                </div>
						</td>
					</tr>
					<!-- Modal -->
					<div class="modal fade" id="modal-edit<?= $key->id_user?>">
						<div class="modal-dialog">
							<div class="modal-content">
							  <div class="modal-header">
							    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
							      <span aria-hidden="true">&times;</span></button>
							    <h4 class="modal-title">Tambah pengguna</h4>
							  </div>
							  <div class="modal-body">
							    <form id="FormUser" class="form-horizontal" action="<?= site_url('admin/pengguna/update') ?>" method="POST">
							    	<div class="form-group">
							    		<label>Nama pengguna</label>
							    		<input type="text" name="nama_user" value="<?= $key->nama_user ?>" required placeholder="Nama pengguna" class="form-control">
							    	</div>
							    	<div class="form-group">
							    		<label>Alamat</label>
							    		<input type="text" name="alamat_user" value="<?= $key->alamat_user ?>" required placeholder="Alamat" class="form-control">
							    	</div>
							    	<div class="form-group">
							    		<label>No. Telepon</label>
							    		<input type="text" name="wa_user" value="<?= $key->wa_user ?>" required placeholder="No. Telepon" class="form-control">
							    	</div>
							    	<div class="form-group">
							    		<label>Password</label>
							    		<input type="password" name="password" value="" required placeholder="Password" class="form-control">
							    		<input type="hidden" name="id_user" value="<?= $key->id_user ?>" class="form-control">
							    	</div>
							  </div>
							  <div class="modal-footer">
							    <button type="button" class="btn btn-danger pull-left btn-sm" data-dismiss="modal">Batal</button>
							    <button type="submit" class="btn btn-success btn-sm">Simpan</button>
							  </div>
							  </form>
							</div>
							<!-- /.modal-content -->
							</div>
							<!-- /.modal-dialog -->
						</div>
						<!-- /.modal -->
				<?php } ?>
				</tfoot>
			</table>
		</div>
		<!-- /.box-body -->
	</div>
	<!-- /.box -->
<?php } ?>

<?php if ($content == "data-kegiatan") { ?>
	<div class="box">
		<div class="box-header">
			<h3 class="box-title"><?= $subtitle ?></h3>
		</div>
	<!-- /.box-header -->
		<div class="box-body table-responsive">
			<table id="example1" class="table table-bordered table-striped">
				<thead>
					<tr>
						<th>No.</th>
						<th>Nama User</th>
						<th>Kegiatan</th>
						<th>Uraian</th>
						<th>Foto</th>
						<th>Dibuat</th>
						<th>Aksi</th>
					</tr>
				</thead>
				<tbody>
				<?php $no = 1; foreach ($data as $key) { ?>
					<tr>
						<td><?= $no++ ?></td>
						<td><?= $key->nama_user ?></td>
						<td><?= $key->nama_kegiatan ?></td>
						<td><?= $key->keterangan_kegiatan ?></td>
						<td><?= $key->jml_foto ?></td>
						<td><?= $key->dibuat ?></td>
						<td>
							<div class="btn-group">
								<a href="<?= site_url('admin/kegiatan/delete/'.$key->id_kegiatan) ?>" onclick="return confirm('Apakah anda yakin akan menghapus kegiatan ini?\n<?= $key->nama_kegiatan ?>')" class="btn btn-danger btn-xs"  data-toggle="tooltip" data-placement="top" title="Hapus Data"><i class="fa fa-trash-o"></i></a>
			                </div>
						</td>
					</tr>
				<?php } ?>
				</tfoot>
			</table>
		</div>
		<!-- /.box-body -->
	</div>
	<!-- /.box -->
<?php } ?>