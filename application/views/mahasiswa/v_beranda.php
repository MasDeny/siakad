<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Pendaftaran Tracer Study</title>
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
	
	<div class="section no-pad-bot" id="index-banner">
    <div class="container">
      <br><br>
      <h3 class="header center">Beranda</h3>

      <div class="row center">
        <h6 class="header col s12 light">Teknologi Informasi - POLITEKNIK NEGERI JEMBER</h6>
      </div>
    </div>
  </div>

      <br><br>
      <br><br>
      <br><br>
      <br>

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