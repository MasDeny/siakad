  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="<?php echo base_url(); ?>assets/dist/img/user-admin.png" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>Admin</p>
        </div>
      </div>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MENU</li>

        <li><a href="<?php echo base_url('admin/daftar_sempro/c_versempro'); ?> "><i class=""></i> <span>Verifikasi Sempro</span></a></li>
        <li><a href="<?php echo base_url('admin/sidang/c_versidang'); ?> "><i class=""></i> <span>Verifikasi Sidang</span></a></li>
        <li><a href="<?php echo site_url('admin/sidang/c_versidang/pasca_sidang'); ?> "><i class=""></i> <span>Mahasiswa Pasca Sidang</span></a></li>
        <li><a href="<?php echo base_url('admin/upload_berkas/c_verberkas'); ?> "><i class=""></i> <span>Verifikasi Berkas TA</span></a></li>
        <li><a href="#"><i class=""></i> <span>Study Tracer</span></a></li>
        <li><a href="#"><i class=""></i> <span>Yudisium</span></a></li>
        <li><a href="<?php echo base_url('admin/c_admin/logout'); ?> "><i class=""></i> <span>Logout</span></a></li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>