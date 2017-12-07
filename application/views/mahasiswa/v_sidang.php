<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Pendaftaran Sidang TA</title>
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

    </div>
  </div>

  <div class="container">
    <div class="section">

        <h3>Pendaftaran Sidang</h3>

      <?php echo form_open_multipart('Upload/multiple_upload'); ?>
      <table class="bordered highlight">
        <tbody>
          <tr>
            <td>upload scan kartu hasil studi</td>
            <td class="waves-effect waves-light blue darken-1 btn"><?php echo form_upload('file1'); ?></td>
            <td>*File type .jpg / ,jpeg --max 5mb</td>
          </tr>
          <tr>
            <td>upload dokumen proposal</td>
            <td class="waves-effect waves-light blue darken-1 btn"><?php echo form_upload('file2'); ?></td>
            <td>*File type .docx / .pdf --max 50mb</td>
          </tr>
          <tr>
            <td>upload scan bukti SPP terakhir</td>
            <td class="waves-effect waves-light blue darken-1 btn"><?php echo form_upload('file3'); ?></td>
            <td>*File type .jpg / ,jpeg --max 5mb</td>
          </tr>
          <tr>
            <td>upload scan kartu kendali</td>
            <td class="waves-effect waves-light blue darken-1 btn"><?php echo form_upload('file4'); ?></td>
            <td>*File type .jpg / .jpeg --max 5mb</td>
          </tr>
        </tbody>
      </table>
      <br><br>

      <div class="row">
      	<div class="col s3 waves-effect waves-light indigo darken-4 btn"><?php echo form_submit('upload', 'simpan'); ?></div>
      	<div class="col s3"></div>
      	<div class="col s3 waves-effect waves-light indigo darken-4 btn"><?php echo form_submit('batal', ' batal '); ?></div>
      	<div class="col s3"></div>
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