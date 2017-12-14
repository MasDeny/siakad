
<!DOCTYPE html>
<html>
<?php $this->load->view('administrasi/head') ?>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

<?php $this->load->view('administrasi/header') ?>
  <!-- Left side column. contains the logo and sidebar -->
<?php $this->load->view('administrasi/leftbar') ?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Verifikasi Berkas TA
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo base_url('admin/c_admin/index'); ?>"><i class="fa fa-dashboard"></i> Home</a></li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
    <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title"></h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example2" class="table table-bordered table-hover">
               
                <tr>
                  <th>No</th>
                  <th>NIM</th>
                  <th>Nama</th>
                  <th>Judul</th>
                  <th>Status</th>
                  <th>Verifikasi</th>
                </tr>
                  <?php
                   $no = 1; 
                   foreach($bks as $bksTa){
                  ?>
                 <tr>
                     <td><?=$no++;?></td>
                     <td><?=$bksTa->NIM;?></td>
                     <td><?=$bksTa->nama_mahasiswa;?></td>
                     <td><?=$bksTa->judul_TA;?></td>
                     <td><?=$bksTa->statusBerkasTA;?></td>
                     <td>
                      <div>
                          <a href="<?php echo site_url("admin/upload_berkas/c_verberkas/konfirmasi/".$bksTa->NIM); ?>" class="btn btn-primary">Konfirmasi</a>
                      </div>
                     </td>
                </tr>     
                <?php }?>
             
              </table>
            </div>
            <!-- /.box-body -->
          <!-- /.box -->

          <div class="box">
            
            <!-- /.box-header -->
          
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
    </div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
<?php $this->load->view('administrasi/footer') ?>
</body>
</html>
