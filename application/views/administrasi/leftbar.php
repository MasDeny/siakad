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
       
        <li><a href="<?php echo base_url('admin/c_admin/tampil_mhs'); ?> "><i class=""></i> <span>Mahasiswa Sidang</span></a></li>
        <li><a href="<?php echo base_url('admin/upload_berkas'); ?> "><i class=""></i> <span>Upload Berkas TA</span></a></li>
        <li><a href="#"><i class=""></i> <span>Study Tracer</span></a></li>
        <li><a href="#"><i class=""></i> <span>Yudisium</span></a></li>
        <li><a href="<?php echo base_url('admin/c_admin/logout'); ?> "><i class=""></i> <span>Logout</span></a></li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>