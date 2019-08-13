<section class="sidebar">
  <!-- Sidebar user panel -->
  <div class="user-panel">
    <div class="pull-left image">
      <img src="<?= base_url() ?>assets/dist/img/avatar-1.png" class="img-circle" alt="User Image">
    </div>
    <div class="pull-left info">
      <p><?= $this->session->userdata('nama_admin'); ?></p>
      <a href="#"><i class="fa fa-circle text-success"></i> <?= $this->session->userdata('wa_admin'); ?></a>
    </div>
  </div>
  <!-- search form -->
  <!-- <form action="#" method="get" class="sidebar-form">
    <div class="input-group">
      <input type="text" name="q" class="form-control" placeholder="Search...">
      <span class="input-group-btn">
            <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
            </button>
          </span>
    </div>
  </form> -->
  <!-- /.search form -->
  <!-- sidebar menu: : style can be found in sidebar.less -->
  <ul class="sidebar-menu" data-widget="tree">
    <li class="header">MENU UTAMA</li>
    <li class="<?= @$dashboard ?>">
      <a href="<?= site_url('admin') ?>">
        <i class="fa fa-dashboard"></i> <span>Dashboard</span>
      </a>
    </li>
    <li class="treeview <?= @$master ?>">
      <a href="#">
        <i class="fa fa-pie-chart"></i>
        <span>Master Data</span>
        <span class="pull-right-container">
          <i class="fa fa-angle-left pull-right"></i>
        </span>
      </a>
      <ul class="treeview-menu">
        <li class="<?= @$admin ?>"><a href="<?= site_url('admin/admin') ?>"><i class="fa fa-circle-o"></i> Admin</a></li>
        <li class="<?= @$pengguna ?>"><a href="<?= site_url('admin/pengguna') ?>"><i class="fa fa-circle-o"></i> Pengguna</a></li>
      </ul>
    </li>
    <li class="treeview <?= @$kegiatan ?>">
      <a href="#">
        <i class="fa fa-cogs"></i>
        <span>Kegiatan</span>
        <span class="pull-right-container">
          <i class="fa fa-angle-left pull-right"></i>
        </span>
      </a>
      <ul class="treeview-menu">
        <li class="<?= @$hari_ini ?>"><a href="<?= site_url('admin/kegiatan/hari-ini') ?>"><i class="fa fa-circle-o"></i> Hari Ini</a></li>
        <li class="<?= @$semua ?>"><a href="<?= site_url('admin/kegiatan') ?>"><i class="fa fa-circle-o"></i> Semua</a></li>
      </ul>
    </li>
    <li class="<?= @$galeri ?>">
      <a href="<?= site_url('admin/galeri') ?>">
        <i class="fa fa-photo"></i> <span>Galeri</span>
      </a>
    </li>
    <li class="<?= @$laporan ?>">
      <a href="<?= site_url('admin/laporan') ?>">
        <i class="fa fa-file"></i> <span>Laporan</span>
      </a>
    </li>
  </ul>
</section>