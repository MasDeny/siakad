
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
        Verifikasi Seminar Proposal
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo base_url('admin/c_admin/index'); ?>"><i class="fa fa-dashboard"></i> Home</a></li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container">
          <div class="section">
          <div class="col-md-12">
          <div class="form-group">
            <label>NIM</label>
            <input type="text" class="form-control border-input" disabled placeholder="Judul" value="<?php echo $detail_bks->NIM; ?>">
          </div>
          <div class="form-group">
            <label>Nama Mahasiswa</label>
            <input type="text" class="form-control border-input" disabled placeholder="Judul" value="<?php echo $detail_bks->nama_mahasiswa; ?>">
          </div>
          <div class="form-group">
            <label>Judul Tugas Akhir</label>
            <input type="text" class="form-control border-input" disabled placeholder="Judul" value="<?php echo $detail_bks->judul_TA; ?>">
          </div>
          <div class="form-group">
            <label>Status Berkas TA</label>
            <input type="text" class="form-control border-input" disabled placeholder="Judul" value="<?php echo $detail_bks->statusBerkasTA; ?>">
          </div>
          <div class="form-group">
            <label>Status berkas pendaftaran sempro</label>
            <input type="text" class="form-control border-input" disabled placeholder="Judul" value="<?php 
              if (empty($detail_mhs->proposal_TA) || empty($detail_mhs->kartu_kendali) || empty($detail_mhs->kk_senpro_lalu) || empty($detail_mhs->makalah) || empty($detail_mhs->lembar_berita_acara) || empty($detail_mhs->lembar_pengusulan) || empty($detail_mhs->lembar_revisi) || empty($detail_mhs->lembar_hasil_senpro) || empty($detail_mhs->lembar_daftar_hadir) || empty($detail_mhs->lembar_pengesahan) || empty($detail_mhs->kartu_kontrak_DP)) {
                            echo "Berkas tidak lengkap";
                          }
                          else
                          {
                            echo "Berkas lengkap";
                          }
                         ?>">
          </div>
          <div class="form-group">
                                <div class="col-md-7 col-md-offset-5">
                                <a href="<?php echo site_url("admin/upload_berkas/c_verberkas/acc_berkas_ta/".$detail_bks->NIM); ?> " class="btn btn-success">Konfirmasi</a>
                                <a href="<?php echo site_url('admin/upload_berkas/c_verberkas'); ?> " class="btn btn-danger">Tolak</a>
          </div>
          </div>
          </div>
          </div>
      </div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
<?php $this->load->view('administrasi/footer') ?>
</body>
</html>
