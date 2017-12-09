<?php 
$this->load->view('administrasi/head');
?>
<!--tambahkan custom css disini-->
<?php
$this->load->view('administrasi/header');
$this->load->view('administrasi/leftbar');
?>
<!-- Content Header (Page header) -->
<section class="content-header">
    <center><h1><b>
        Konfirmasi Pendaftaran Seminar Proposal
    </b></h1></center>
</section>

<!-- Main content -->
    <div class="col-md-12">
    <div class="form-group">
                  <label>NIM</label>
                  <input type="text" class="form-control border-input" disabled placeholder="Judul" value="<?php echo $detail_mhs->NIM; ?>">
    </div>
    <div class="form-group">
                  <label>Nama Mahasiswa</label>
                  <input type="text" class="form-control border-input" disabled placeholder="Judul" value="<?php echo $detail_mhs->nama_mahasiswa; ?>">
    </div>
    <div class="form-group">
                  <label>Judul Tugas Akhir</label>
                  <input type="text" class="form-control border-input" disabled placeholder="Judul" value="<?php echo $detail_mhs->judul_TA; ?>">
    </div>
    <div class="form-group">
                  <label>Dosen Pembimbing 1</label>
                  <input type="text" class="form-control border-input" disabled placeholder="Judul" value="<?php echo $detail_mhs->nm_dosen; ?>">
    </div>
    <div class="form-group">
                  <label>Status berkas pendaftaran sempro</label>
                  <input type="text" class="form-control border-input" disabled placeholder="Judul" value="<?php 
                    if (empty($detail_mhs->proposal_TA) || empty($detail_mhs->kartu_kendali) || empty($detail_mhs->kk_senpro_lalu) || empty($detail_mhs->makalah) || empty($detail_mhs->lembar_berita_acara) || empty($detail_mhs->lembar_pengusulan) || empty($detail_mhs->lembar_revisi) || empty($detail_mhs->lembar_hasil_senpro) || empty($detail_mhs->lembar_daftar_hadir) || empty($detail_mhs->lembar_pengesahan) || empty($detail_mhs->kartu_kontrak_DP)){

                      echo "Berkas tidak lengkap";
                    }else{
                      echo "Berkas lengkap";
                    }

                   ?>">
    </div>
    <div class="form-group">
                          <div class="col-md-7 col-md-offset-5">
                          <a href="<?php echo site_url("admin/c_versempro/sempro_acc/".$detail_mhs->NIM); ?> " class="btn btn-success">Konfirmasi</a>
                          <a href="<?php echo site_url('admin/c_versempro'); ?> " class="btn btn-danger">Tolak</a>
                          </div>
    </div>
    </div>
<!-- /.content -->

<!--?php 
$this->load->view('administrasi/js');
?-->
<!--tambahkan custom js disini-->
<?php
$this->load->view('administrasi/footer');
?>
