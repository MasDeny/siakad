<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Pendaftaran Judul</title>
	<script>
	$(document).ready(function() {
	$('select').material_select('destroy');
	});
  </script>
	  <link rel="stylesheet" href="<?php echo base_url() ?>assets/psi/css/bootstrap.css">
	  <link rel="stylesheet" href="<?php echo base_url() ?>assets/psi/css/style.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css">
	
  <link href="<?php echo base_url() ?>assets/psi/materialize.min.css" type="text/css" rel="stylesheet" media="screen,projection"/>
	</head>
<body>
							
	<nav class="indigo darken-4" role="navigation">
    <div class="nav-wrapper container"><a id="logo-container" href="#" class="brand-logo">Teknologi Informasi</a>
  <ul class="right hide-on-med-and-down">
    <li><a href="#" data-activates="slide-out" class="button-collapse" style="display: initial !important;">Menu</a></li>
  </ul>

  <ul id="slide-out" class="side-nav">
    <li><div class="user-view">
      <div class="background">
        <img src="<?php echo base_url() ?>assets/psi/img/bg.jpg">
      </div>
      <a href="#!user"><img class="circle" src="<?php echo base_url() ?>assets/psi/img/logo.png"></a>
      <a href="#!name"><span class="white-text name">Polije</span></a>
      <a href="#!email"><span class="white-text email">polije@gmail.com</span></a>
    </div></li>
    <li><div class="divider"></div></li>
    <li><a class="subheader" href="#!">Pengajuan Judul</a></li>
    <li><div class="divider"></div></li>
    <li><a href="#!">Pendaftaran Sempro</a></li>
    <li><div class="divider"></div></li>
    <li><a href="#!">Pendaftaran Sidang TA</a></li>
    <li><div class="divider"></div></li>
    <li><a href="#">Upload Berkas TA</a></li>
    <li><div class="divider"></div></li>
    <li><a class="waves-effect" href="#!">Pendaftaran Wisuda</a></li>
    <li><div class="divider"></div></li>
    <li><a class="waves-effect">Pendaftaran Studytracer</a></li>
    <li><div class="divider"></div></li>
    <li><a class="waves-effect" href="#!">Pendaftaran Yudisium</a></li>
    <li><div class="divider"></div></li>
  </ul>
  <a href="#" data-activates="slide-out" class="button-collapse"><i class="material-icons">menu</i></a>

    </div>
  </nav>
	
	<div class="section no-pad-bot" id="index-banner">
    <div class="container">
      <br><br>
      <h3 class="header center">Pendaftaran pengajuan judul tugas akhir</h3>

      <div class="row center">
        <h6 class="header col s12 light">Form ini digunakan untuk mendaftarkan usul judul tugas akhir </h6>
      </div>
      <br><br>

    </div>
  </div>
  
  <?php
  
  $nim=$this->session->userdata("codeUser");
  $nama=$this->input->post("nama_mahasiswa");
  $prodi=$this->input->post("program_studi");
  $cbodp1=$this->input->post["id_dp1"];
  $dospem2=$this->input->post("dospem2");
  $cborumpun=$this->input->post["id_rumpun"];
  $judul_TA=$this->input->post("judul_TA");
  $deskripsi=$this->input->post["deskripsi"];
  $cbodokumen=$this->input->post["id_dokumen"];
  
  
  if(isset($datamhs))
  {
	  $nama=$datamhs[1];
	  $prodi=$datamhs[2];
	  $cbodp1=$datamhs[3];
	  $dospem2=$datamhs[4];
	  $cborumpun=$datamhs[5];
	  $judul_TA=$datamhs[6];
	  $deskripsi=$datamhs[7];
	  $cbodokumen=$datamhs[8];
	  
	  
  }
  ?>
   <div class="container">
    <div class="section">
	<?php
	if(isset($isedit))
	{
		?>
		
	<form action="<?php echo base_url().'mahasiswa/Index_mahasiswa/update';?>" method="post" id="form_studytracer">
		<?php
		
	}
	else
	{
		?>
		
	<form action="<?php echo base_url().'mahasiswa/Daftar_judul/save';?>" method="post" id="form_studytracer">
		<?php
	}
	?>
      <div class="row">
		
        <div class="input-field col s12">
          <input value="<?php echo  $nim; ?>" readonly id="nim" name="txt[0] type="text" class="validate" required="required">
			<label class="active" for="nim">Nomer Induk Mahasiswa</label>
		</div>
		
		<div class="input-field col s12">
          <input value="<?php echo $nama; ?>" id="nama_mahasiswa" name="txt[1]" type="text" class="validate" required="required">
          <label class="active" for="nama_mahasiswa">Nama Mahasiswa</label>
		</div>
		<div class="input-field col s12">
          <input value="<?php echo $prodi; ?>" id="program_studi" name="txt[2]" type="text" class="validate" required="required">
          <label class="active" for="program_studi">Program Studi</label>
		</div>

		<div class="form-group">
		<label for="id_dp1" class="col-md-4 control-label">Dosen Pembimbing 1</label>
		<div class="col-md-8">
			<?= $cbodp1?>
		
		</div>
	</div>
		
		<div class="input-field col s12">
          <input value="<?php echo $dospem2; ?>" id="dospem_2" name="txt[4]" type="text" class="validate" required="required">
          <label class="active" for="dospem_2">Dosen Pembimbing 2</label>
		</div>
	<div class="form-group">
		<label for="id_rumpun" class="col-md-4 control-label">Rumpun Mata Kuliah</label>
		<div class="col-md-8">
			<?= $cborumpun?>
			
		</div>
	</div>
		<div class="input-field col s12">
          <input value="<?php echo $judul_TA; ?>" id="judul_TA" name="txt[6]" type="text" class="validate" required="required">
          <label class="active" for="judul_TA">Judul Tugas Akhir</label>
		</div>
		<div class="input-field col s12">
          <input value="<?php echo $deskripsi; ?>" id="deskripsi" name="txt[7]" type="text" class="validate" required="required">
          <label class="active" for="deskripsi">Deskripsi</label>
		</div>
		
		   <input value="<?php echo $this->session->userdata("name"); ?>" id="deskripsi" name="txt[8]" type="hidden" class="validate" required="required">

		<div class="form-group">
		<label for="id_dp1" class="col-md-4 control-label">Referensi</label>
		<div class="col-md-8">
		<?= $cbodokumen ?>
		
		</div>
	<input value=0 id="status" name="txt[10]" type="hidden" class="validate" required="required">
	
	 <input value="1" id="status_alumni" name="txt[11]" type="hidden" class="validate" required="required">
		<div class="form-group">
		<div class="col-sm-offset-4 col-sm-8">
			<button type="submit" class="btn btn-success">Save</button>
        </div>
	</div>
	</div>	
		</form>
		</div>
		</div>
	  
 
		
        
	  
			
  <section id="footer" class="section footer">
    <div class="container">
      <div class="row align-center copyright">
        <div class="col-sm-12">
          <div class="credits">
            <!--
              All the links in the footer should remain intact.
              You can delete the links only if you purchased the pro version.
              Licensing information: https://bootstrapmade.com/license/
              Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Amoeba
            -->
            <a href="">Copyright &copy; 2017 DEVteam_Modul1_PSI</a><a href="https://bootstrapmade.com/">     | Bootstrap Themes</a> <a href="https://bootstrapmade.com/">  by BootstrapMade</a>
          </div>
        </div>
      </div>
    </div>
  </section>
  
  <script src="<?php echo base_url() ?>assets/psi/js/jquery-2.1.1.min.js"></script>
  <script src="<?php echo base_url() ?>assets/psi/js/materialize.min.js"></script>
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