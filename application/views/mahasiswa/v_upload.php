<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Upload Berkas TA</title>
  <script>
  $(document).ready(function() {
  $('select').material_select('destroy');
  });
  </script>
    <link rel="stylesheet" href="<?php echo base_url() ?>asset/css/bootstrap.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>asset/css/style.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css">
  
  <link href="<?php echo base_url() ?>asset/materialize.min.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  </head>
<body>
              
  <nav class="indigo darken-4" role="navigation">
    <div class="nav-wrapper container"><a id="logo-container" href="<?php echo base_url(); ?>mahasiswa/Index_mahasiswa" class="brand-logo">Teknologi Informasi</a>
  <ul class="right hide-on-med-and-down">
    <li><a href="#" data-activates="slide-out" class="button-collapse" style="display: initial !important;"">Menu</a></li>
  </ul>

  <ul id="slide-out" class="side-nav">
    <li><div class="user-view">
      <div class="background">
        <img src="<?php echo base_url() ?>asset/img/bg.jpg">
      </div>
      <a href="<?php echo base_url(); ?>mahasiswa/Index_mahasiswa"><img class="circle" src="<?php echo base_url() ?>asset/img/logo.png"></a>
      <a href="#!name"><span class="white-text name">Polije | polije.ac.id</span></a>
      <a href="#!email"><span class="white-text email">Hey user, <?php echo $this->session->userdata("nama") ?>
    <a href="<?php echo base_url(); ?>index.php/login/logout">Log Out</a>
    </span></a>
    </div></li>
    <li><div class="divider"></div></li>
    <li><a href="#!">Pengajuan Judul</a></li>
    <li><div class="divider"></div></li>
    <li><a href="#!">Pendaftaran Seminar Proposal</a></li>
    <li><div class="divider"></div></li>
    <li><a href="<?php echo base_url(); ?>mahasiswa/Index_mahasiswa/getsidang">Pendaftaran Sidang TA</a></li>
    <li><div class="divider"></div></li>
    <li><a href="<?php echo base_url(); ?>mahasiswa/Index_mahasiswa/getberkas">Upload Berkas TA</a></li>
    <li><div class="divider"></div></li>
    <li><a class="waves-effect" href="#!">Pendaftaran Wisuda</a></li>
    <li><div class="divider"></div></li>
    <li><a href="<?php echo base_url(); ?>mahasiswa/Index_mahasiswa/getstudytracer">Pendaftaran Tracer Study</a></li>
    <li><div class="divider"></div></li>
    <li><a href="<?php echo base_url(); ?>mahasiswa/Index_mahasiswa/getyudisium">Pendaftaran Yudisium</a></li>
    <li><div class="divider"></div></li>
  </ul>
  <a href="#" data-activates="slide-out" class="button-collapse"><i class="material-icons">menu</i></a>

    </div>
  </nav>

      <br><br>
      <h3 class="header center">UPLOAD BERKAS TA</h3>

      <div class="row center">
        <h6 class="header col s12 light">Form ini digunakan untuk mengupload berkas revisi TA sebagai syarat untuk Yudisium & Wisuda</h6>
      </div>
      <br><br>

    </div>
  </div>

  <div class="container">
    <div class="section">

      <div class="row">
        <div class="input-field col s12">
          <input value="Aplikasi Diagnosis Penyakit Utama Tanaman Kopi dengan Metode Naive Bayes Berbasis Android" id="Judul" type="text" class="validate" disabled>
          <label class="active" for="Judul">Judul</label>
        </div>
      </div>

      <?php echo form_open_multipart('Upload/multiple_upload'); ?>
      <table class="bordered highlight">
        <tbody>
          <tr>
            <td>1. File scan Berita Acara</td>
            <td class="waves-effect waves-light blue darken-1 btn"><?php echo form_upload('file1'); ?></td>
            <td><input type="checkbox" class="filled-in" id="1" disabled/><label for="1">Terupload</label></td>
          </tr>
          <tr>
            <td>2. File Sampul</td>
            <td class="waves-effect waves-light blue darken-1 btn"><?php echo form_upload('file2'); ?></td>
            <td><input type="checkbox" class="filled-in" id="2" disabled/><label for="2">Terupload</label></td>
          </tr>
          <tr>
            <td>3. File scan Pengesahan TA</td>
            <td class="waves-effect waves-light blue darken-1 btn"><?php echo form_upload('file3'); ?></td>
            <td><input type="checkbox" class="filled-in" id="3" disabled/><label for="3">Terupload</label></td>
          </tr>
          <tr>
            <td>4. File Persembahan</td>
            <td class="waves-effect waves-light blue darken-1 btn"><?php echo form_upload('file4'); ?></td>
            <td><input type="checkbox" class="filled-in" id="4" disabled/><label for="4">Terupload</label></td>
          </tr>
          <tr>
            <td>5. File Motto</td>
            <td class="waves-effect waves-light blue darken-1 btn"><?php echo form_upload('file5'); ?></td>
            <td><input type="checkbox" class="filled-in" id="5" disabled/><label for="5">Terupload</label></td>
          </tr>
          <tr>
            <td>6. File scan Pernyataan TA</td>
            <td class="waves-effect waves-light blue darken-1 btn"><?php echo form_upload('file6'); ?></td>
            <td><input type="checkbox" class="filled-in" id="6" disabled/><label for="6">Terupload</label></td>
          </tr>
          <tr>
            <td>7. File Abstrak</td>
            <td class="waves-effect waves-light blue darken-1 btn"><?php echo form_upload('file7'); ?></td>
            <td><input type="checkbox" class="filled-in" id="7" disabled/><label for="7">Terupload</label></td>
          </tr>
          <tr>
            <td>8. File Ringkasan</td>
            <td class="waves-effect waves-light blue darken-1 btn"><?php echo form_upload('file8'); ?></td>
            <td><input type="checkbox" class="filled-in" id="8" disabled/><label for="8">Terupload</label></td>
          </tr>
          <tr>
            <td>9. File Prakata</td>
            <td class="waves-effect waves-light blue darken-1 btn"><?php echo form_upload('file9'); ?></td>
            <td><input type="checkbox" class="filled-in" id="9" disabled/><label for="9">Terupload</label></td>
          </tr>
          <tr>
            <td>10. File Daftar Isi</td>
            <td class="waves-effect waves-light blue darken-1 btn"><?php echo form_upload('file10'); ?></td>
            <td><input type="checkbox" class="filled-in" id="10" disabled/><label for="10">Terupload</label></td>
          </tr>
          <tr>
            <td>11. File Daftar Tabel</td>
            <td class="waves-effect waves-light blue darken-1 btn"><?php echo form_upload('file11'); ?></td>
            <td><input type="checkbox" class="filled-in" id="11" disabled/><label for="11">Terupload</label></td>
          </tr>
          <tr>
            <td>12. File Daftar Gambar</td>
            <td class="waves-effect waves-light blue darken-1 btn"><?php echo form_upload('file12'); ?></td>
            <td><input type="checkbox" class="filled-in" id="12" disabled/><label for="12">Terupload</label></td>
          </tr>
          <tr>
            <td>13. File Daftar Lampiran</td>
            <td class="waves-effect waves-light blue darken-1 btn"><?php echo form_upload('file13'); ?></td>
            <td><input type="checkbox" class="filled-in" id="13" disabled/><label for="13">Terupload</label></td>
          </tr>
          <tr>
            <td>14. File Bab 1</td>
            <td class="waves-effect waves-light blue darken-1 btn"><?php echo form_upload('file14'); ?></td>
            <td><input type="checkbox" class="filled-in" id="14" disabled/><label for="14">Terupload</label></td>
          </tr>
          <tr>
            <td>15. File Bab 2</td>
            <td class="waves-effect waves-light blue darken-1 btn"><?php echo form_upload('file15'); ?></td>
            <td><input type="checkbox" class="filled-in" id="15" disabled/><label for="15">Terupload</label></td>
          </tr>
          <tr>
            <td>16. File Bab 3</td>
            <td class="waves-effect waves-light blue darken-1 btn"><?php echo form_upload('file16'); ?></td>
            <td><input type="checkbox" class="filled-in" id="16" disabled/><label for="16">Terupload</label></td>
          </tr>
          <tr>
            <td>17. File Bab 4</td>
            <td class="waves-effect waves-light blue darken-1 btn"><?php echo form_upload('file17'); ?></td>
            <td><input type="checkbox" class="filled-in" id="17" disabled/><label for="17">Terupload</label></td>
          </tr>
          <tr>
            <td>18. File Bab 5</td>
            <td class="waves-effect waves-light blue darken-1 btn"><?php echo form_upload('file18'); ?></td>
            <td><input type="checkbox" class="filled-in" id="18" disabled/><label for="18">Terupload</label></td>
          </tr>
          <tr>
            <td>19. File Daftar Pustaka</td>
            <td class="waves-effect waves-light blue darken-1 btn"><?php echo form_upload('file19'); ?></td>
            <td><input type="checkbox" class="filled-in" id="19" disabled/><label for="19">Terupload</label></td>
          </tr>
          <tr>
            <td>20. File Lampiran</td>
            <td class="waves-effect waves-light blue darken-1 btn"><?php echo form_upload('file20'); ?></td>
            <td><input type="checkbox" class="filled-in" id="20" disabled/><label for="20">Terupload</label></td>
          </tr>
        </tbody>
      </table>
      <br><br>

      <div class="row">
      	<div class="col s3">*File berupa PDF</div>
      	<div class="col s3"></div>
      	<div class="col s3"></div>
      	<div class="col s3 waves-effect waves-light indigo darken-4 btn"><?php echo form_submit('upload', 'Upload Berkas'); ?></div>
      </div>
      <?php echo form_close() ?>

    </div>
    <br><br>

  <script src="<?php echo base_url() ?>asset/js/jquery-2.1.1.min.js"></script>
  <script src="<?php echo base_url() ?>asset/js/materialize.min.js"></script>
  <script>
    (function($){
      $(function(){
        $('.button-collapse').sideNav();
      });
  })(jQuery);
  </script>
  <script>
    $(document).ready(function() {
      Materialize.updateTextFields();
    });
  </script>
  
 
</body>
</html>