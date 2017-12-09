<html lang="en">
<head>
	<meta charset="utf-8">
	<title></title>
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
    <li><a class="subheader" href="mahasiswa/Index_mahasiswa">Pengajuan Judul</a></li>
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
      <br><br>

    </div>
  </div>
   <div class="container">
    <div class="section">
	<form action="<?php echo base_url().'Index_mahasiswa/add';?>" method="post" id="form_studytracer">
      <table class="table">
		<thead>
			<tr>
				<th>Judul</th>
				<th>Deskripsi</th>
				<th>Dosen Pembimbing 1</th>
				<th>Dosen Pembimbing 2</th>
				<th>Referensi</th>
				<th>Status</th>				
				<th>Operasi</th>				

			</tr>
		</thead>
		<tbody>
		<?php
		foreach($render->result() as $row)
		{
			?>
			<tr>
				<td><?= $row->judul_TA;?></td>
				<td><?= $row->deskripsi;?></td>
				<td><?= $row->nm_dosen;?></td>
				<td><?= $row->dospem_2;?></td>
				<td><?= $row->berkas_dokumen;?></td>
				<td><?= $row->status;?></td>				
				<?php
				if($row->status == "Belum Dikonfirmasi")
				{
					?>
				<td>
				<a href="<?= site_url();?>mahasiswa/Index_mahasiswa/add/<?= $row->id;?>"  class="btn btn-success">Edit
				</a>
				</td>
				<?php
				}
				?>

			</tr>
			<?php
		}
		?>
		<?php
		
		if($render->num_rows()==0)
		{
		?>
		<tr>
		<td colspan=8>
		
		<div class="col-sm-offset-4 col-sm-8">
		<a href="<?= site_url();?>mahasiswa/Daftar_judul/add"<button type="submit" class="btn btn-success">Daftar</a>	
        </div>
		
		</td>
		</tr>
		<?php
		}
		?>
		</tbody>
	
		</table>
		<div class="form-group">
	</div>
	
		</form>
		
		
	</div>	
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