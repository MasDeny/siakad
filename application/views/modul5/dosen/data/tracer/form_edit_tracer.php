<?php 
$this->load->view('template/head');
?>
<!--tambahkan custom css disini-->
<?php
$this->load->view('template/topbar');
$this->load->view('template/sidebar');
?>

<html>
<head>
<title>Data Yudisium</title>
    <link href="<?php echo base_url('asset/css/bootstrap.min.css')?>" rel="stylesheet">
    <link href="<?php echo base_url('asset/datatables/css/dataTables.bootstrap.css')?>" rel="stylesheet">
    <link href="<?php echo base_url('asset/bootstrap-datepicker/css/bootstrap-datepicker3.min.css')?>" rel="stylesheet">
</head>
<body>

<section class="content">
	<div class="box">
	<div class="box-body" style="border:1px; #dedede double;width:auto; height:500px;overflow-y:scroll;overflow-x:scroll;">
		
          <center><h1>Validasi Data Akses Mahasiswa menjadi Alumni</h1>
                <?php echo form_open_multipart('modul5/Tracer/proses_edit_data_tracer');?>
                <b>Perubahan akses mahasiswa menjadi alumni</b><hr>
                <table border="1" width="800px" class="table table-bordered table-striped table-hover">
                    <tr>
                    <td><b>File Bukti menjadi Alumni</b></td>
                    <td><b>Status : 
                        <select name="Status_bukti_alumni">
                        <?php  
                        if($data_tracer_mahasiswa->Status_bukti_alumni==""){
                           echo "<option value=''></option>";
                        }else if($data_tracer_mahasiswa->Status_bukti_alumni=="MENUNGGU KONFIRMASI"){
                           echo "<option value='MENUNGGU KONFIRMASI' selected>MENUNGGU KONFIRMASI</option>"; 
                           echo "<option value='TERVERIFIKASI'>TERVERIFIKASI</option>";
                        }else if($data_tracer_mahasiswa->Status_bukti_alumni=="TERVERIFIKASI"){
                           echo "<option value='MENUNGGU KONFIRMASI'>MENUNGGU KONFIRMASI</option>"; 
                           echo "<option value='TERVERIFIKASI' selected>TERVERIFIKASI</option>";
                        }
                        ?>
                        </select>
                        </b>
                    </td>
                    <td><b>
                        <?php if(!$data_tracer_mahasiswa->File_bukti_alumni==""){
                        echo "<a href='".base_url('assets/img/yudisium/').$data_tracer_mahasiswa->File_bukti_alumni."'>Lihat File</a>";
                        }
                        ?>
                        </b>
                    </td>
                    </tr>
                </table>
                <input type="hidden" name="nim" value="<?php echo $data_tracer_mahasiswa->NIM;?>" />
                <input type="submit" value="DATA VALID" class="btn btn-success"/><br><br>
				</center>
            
        </div>
      </div>
</section>
<!-- End Content Section  -->

<script src="<?php echo base_url('asset/jquery/jquery-2.1.4.min.js')?>"></script>
<script src="<?php echo base_url('asset/js/bootstrap.min.js')?>"></script>
<script src="<?php echo base_url('asset/datatables/js/jquery.dataTables.min.js')?>"></script>
<script src="<?php echo base_url('asset/datatables/js/dataTables.bootstrap.js')?>"></script>
<script src="<?php echo base_url('asset/bootstrap-datepicker/js/bootstrap-datepicker.min.js')?>"></script>

<script src="<?php echo base_url('asset/AdminLTE-2.0.5/plugins/slimScroll/jquery.slimScroll.min.js') ?>" type="text/javascript"></script>
<!-- FastClick -->
<script src='<?php echo base_url('asset/AdminLTE-2.0.5/plugins/fastclick/fastclick.min.js') ?>'></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url('asset/AdminLTE-2.0.5/dist/js/app.min.js') ?>" type="text/javascript"></script>

