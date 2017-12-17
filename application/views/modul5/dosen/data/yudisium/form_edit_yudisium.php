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
		
          <center><h1>Data Yudisium</h1>
                <?php echo form_open_multipart('modul5/Yudisium/proses_edit_data_yudisium');?>
                <b>berkas untuk persyaratan pendaftaran yudisium</b><hr>
                <table border="1" width="800px" class="table table-bordered table-striped table-hover">
                    <tr>
                    <td><b>File Scan KHS SMT 1</b></td>
                    <td><b>Status : 
                        <select name="status_khs1">
                        <?php  
                        if($data_yudisium_mahasiswa->STATUS_KHS1==""){
                           echo "<option value=''></option>";
                        }else if($data_yudisium_mahasiswa->STATUS_KHS1=="MENUNGGU KONFIRMASI"){
                           echo "<option value='MENUNGGU KONFIRMASI' selected>MENUNGGU KONFIRMASI</option>"; 
                           echo "<option value='TERVERIFIKASI'>TERVERIFIKASI</option>";
                        }else if($data_yudisium_mahasiswa->STATUS_KHS1=="TERVERIFIKASI"){
                           echo "<option value='MENUNGGU KONFIRMASI'>MENUNGGU KONFIRMASI</option>"; 
                           echo "<option value='TERVERIFIKASI' selected>TERVERIFIKASI</option>";
                        }
                        ?>
                        </select>
                        </b>
                    </td>
                    <td><b>
                        <?php if(!$data_yudisium_mahasiswa->FILE_KHS1==""){
                        echo "<a href='".base_url('assets/img/yudisium/').$data_yudisium_mahasiswa->FILE_KHS1."'>Lihat File</a>";
                        }
                        ?>
                        </b>
                    </td>
                    </tr>
                    <tr>
                    <td><b>File Scan KHS SMT 2</b></td>
                    <td><b>Status : 
                        <select name="status_khs2">
                        <?php  
                        if($data_yudisium_mahasiswa->STATUS_KHS2==""){
                           echo "<option value=''></option>";
                        }else if($data_yudisium_mahasiswa->STATUS_KHS2=="MENUNGGU KONFIRMASI"){
                           echo "<option value='MENUNGGU KONFIRMASI' selected>MENUNGGU KONFIRMASI</option>"; 
                           echo "<option value='TERVERIFIKASI'>TERVERIFIKASI</option>";
                        }else if($data_yudisium_mahasiswa->STATUS_KHS2=="TERVERIFIKASI"){
                           echo "<option value='MENUNGGU KONFIRMASI'>MENUNGGU KONFIRMASI</option>"; 
                           echo "<option value='TERVERIFIKASI' selected>TERVERIFIKASI</option>";
                        }
                        ?>
                        </select>
                        </b>
                    </td>
                    <td><b>
                        <?php if(!$data_yudisium_mahasiswa->FILE_KHS2==""){
                        echo "<a href='".base_url('assets/img/yudisium/').$data_yudisium_mahasiswa->FILE_KHS2."'>Lihat File</a>";
                        }
                        ?>
                        </b>
                    </td>
                    </tr>
                    <tr>
                    <td><b>File Scan KHS SMT 3</b></td>
                    <td><b>Status : 
                        <select name="status_khs3">
                        <?php  
                        if($data_yudisium_mahasiswa->STATUS_KHS3==""){
                           echo "<option value=''></option>";
                        }else if($data_yudisium_mahasiswa->STATUS_KHS3=="MENUNGGU KONFIRMASI"){
                           echo "<option value='MENUNGGU KONFIRMASI' selected>MENUNGGU KONFIRMASI</option>"; 
                           echo "<option value='TERVERIFIKASI'>TERVERIFIKASI</option>";
                        }else if($data_yudisium_mahasiswa->STATUS_KHS3=="TERVERIFIKASI"){
                           echo "<option value='MENUNGGU KONFIRMASI'>MENUNGGU KONFIRMASI</option>"; 
                           echo "<option value='TERVERIFIKASI' selected>TERVERIFIKASI</option>";
                        }
                        ?>
                        </select>
                        </b>
                    </td>
                    <td><b>
                        <?php if(!$data_yudisium_mahasiswa->FILE_KHS3==""){
                        echo "<a href='".base_url('assets/img/yudisium/').$data_yudisium_mahasiswa->FILE_KHS3."'>Lihat File</a>";
                        }
                        ?>
                        </b>
                    </td>
                    </tr>
                    <tr>
                    <td><b>File Scan KHS SMT 4</b></td>
                    <td><b>Status : 
                        <select name="status_khs4">
                        <?php  
                        if($data_yudisium_mahasiswa->STATUS_KHS4==""){
                           echo "<option value=''></option>";
                        }else if($data_yudisium_mahasiswa->STATUS_KHS4=="MENUNGGU KONFIRMASI"){
                           echo "<option value='MENUNGGU KONFIRMASI' selected>MENUNGGU KONFIRMASI</option>"; 
                           echo "<option value='TERVERIFIKASI'>TERVERIFIKASI</option>";
                        }else if($data_yudisium_mahasiswa->STATUS_KHS4=="TERVERIFIKASI"){
                           echo "<option value='MENUNGGU KONFIRMASI'>MENUNGGU KONFIRMASI</option>"; 
                           echo "<option value='TERVERIFIKASI' selected>TERVERIFIKASI</option>";
                        }
                        ?>
                        </select>
                        </b>
                    </td>
                    <td><b>
                        <?php if(!$data_yudisium_mahasiswa->FILE_KHS4==""){
                        echo "<a href='".base_url('assets/img/yudisium/').$data_yudisium_mahasiswa->FILE_KHS4."'>Lihat File</a>";
                        }
                        ?>
                        </b>
                    </td>
                    </tr>
                    <tr>
                    <td><b>File Scan KHS SMT 5</b></td>
                    <td><b>Status : 
                        <select name="status_khs5">
                        <?php  
                        if($data_yudisium_mahasiswa->STATUS_KHS5==""){
                           echo "<option value=''></option>";
                        }else if($data_yudisium_mahasiswa->STATUS_KHS5=="MENUNGGU KONFIRMASI"){
                           echo "<option value='MENUNGGU KONFIRMASI' selected>MENUNGGU KONFIRMASI</option>"; 
                           echo "<option value='TERVERIFIKASI'>TERVERIFIKASI</option>";
                        }else if($data_yudisium_mahasiswa->STATUS_KHS5=="TERVERIFIKASI"){
                           echo "<option value='MENUNGGU KONFIRMASI'>MENUNGGU KONFIRMASI</option>"; 
                           echo "<option value='TERVERIFIKASI' selected>TERVERIFIKASI</option>";
                        }
                        ?>
                        </select>
                        </b>
                    </td>
                    <td><b>
                        <?php if(!$data_yudisium_mahasiswa->FILE_KHS5==""){
                        echo "<a href='".base_url('assets/img/yudisium/').$data_yudisium_mahasiswa->FILE_KHS5."'>Lihat File</a>";
                        }
                        ?>
                        </b>
                    </td>
                    </tr>
                    <tr>
                    <td><b>File Scan KHS SMT 6</b></td>
                    <td><b>Status : 
                        <select name="status_khs6">
                        <?php  
                        if($data_yudisium_mahasiswa->STATUS_KHS6==""){
                           echo "<option value=''></option>";
                        }else if($data_yudisium_mahasiswa->STATUS_KHS6=="MENUNGGU KONFIRMASI"){
                           echo "<option value='MENUNGGU KONFIRMASI' selected>MENUNGGU KONFIRMASI</option>"; 
                           echo "<option value='TERVERIFIKASI'>TERVERIFIKASI</option>";
                        }else if($data_yudisium_mahasiswa->STATUS_KHS6=="TERVERIFIKASI"){
                           echo "<option value='MENUNGGU KONFIRMASI'>MENUNGGU KONFIRMASI</option>"; 
                           echo "<option value='TERVERIFIKASI' selected>TERVERIFIKASI</option>";
                        }
                        ?>
                        </select>
                        </b>
                    </td>
                    <td><b>
                        <?php if(!$data_yudisium_mahasiswa->FILE_KHS6==""){
                        echo "<a href='".base_url('assets/img/yudisium/').$data_yudisium_mahasiswa->FILE_KHS6."'>Lihat File</a>";
                        }
                        ?>
                        </b>
                    </td>
                    </tr>
                    <tr>
                    <td><b>Foto Kopi Surat Keterangan Bebas Tanggungan</b></td>
                    <td><b>Status : 
                        <select name="status_surat_tanggungan">
                        <?php  
                        if($data_yudisium_mahasiswa->STATUS_SURAT_BEBAS_TANGGUNGAN==""){
                           echo "<option value=''></option>";
                        }else if($data_yudisium_mahasiswa->STATUS_SURAT_BEBAS_TANGGUNGAN=="MENUNGGU KONFIRMASI"){
                           echo "<option value='MENUNGGU KONFIRMASI' selected>MENUNGGU KONFIRMASI</option>"; 
                           echo "<option value='TERVERIFIKASI'>TERVERIFIKASI</option>";
                        }else if($data_yudisium_mahasiswa->STATUS_SURAT_BEBAS_TANGGUNGAN=="TERVERIFIKASI"){
                           echo "<option value='MENUNGGU KONFIRMASI'>MENUNGGU KONFIRMASI</option>"; 
                           echo "<option value='TERVERIFIKASI' selected>TERVERIFIKASI</option>";
                        }
                        ?>
                        </select>
                        </b>
                    </td>
                    <td><b>
                        <?php if(!$data_yudisium_mahasiswa->FILE_SURAT_BEBAS_TANGGUNGAN==""){
                        echo "<a href='".base_url('assets/img/yudisium/').$data_yudisium_mahasiswa->FILE_SURAT_BEBAS_TANGGUNGAN."'>Lihat File</a>";
                        }
                        ?>
                        </b>
                    </td>
                    </tr>
                    <tr>
                    <td><b>Foto Kopi Bukti Pembayaran SPP Semester Terakhir</b></td>
                    <td><b>Status : 
                        <select name="status_bukti_spp">
                        <?php  
                        if($data_yudisium_mahasiswa->STATUS_SPP==""){
                           echo "<option value=''></option>";
                        }else if($data_yudisium_mahasiswa->STATUS_SPP=="MENUNGGU KONFIRMASI"){
                           echo "<option value='MENUNGGU KONFIRMASI' selected>MENUNGGU KONFIRMASI</option>"; 
                           echo "<option value='TERVERIFIKASI'>TERVERIFIKASI</option>";
                        }else if($data_yudisium_mahasiswa->STATUS_SPP=="TERVERIFIKASI"){
                           echo "<option value='MENUNGGU KONFIRMASI'>MENUNGGU KONFIRMASI</option>"; 
                           echo "<option value='TERVERIFIKASI' selected>TERVERIFIKASI</option>";
                        }
                        ?>
                        </select>
                        </b>
                    </td>
                    <td><b>
                        <?php if(!$data_yudisium_mahasiswa->FILE_SPP==""){
                        echo "<a href='".base_url('assets/img/yudisium/').$data_yudisium_mahasiswa->FILE_SPP."'>Lihat File</a>";
                        }
                        ?>
                        </b>
                    </td>
                    </tr>
                    <tr>
                    <td><b>Foto Kopi Berita Acara Ujian Tugas Akhir</b></td>
                    <td><b>Status : 
                        <select name="status_berita_ta">
                        <?php  
                        if($data_yudisium_mahasiswa->STATUS_BERITA_ACARA_TA==""){
                           echo "<option value=''></option>";
                        }else if($data_yudisium_mahasiswa->STATUS_BERITA_ACARA_TA=="MENUNGGU KONFIRMASI"){
                           echo "<option value='MENUNGGU KONFIRMASI' selected>MENUNGGU KONFIRMASI</option>"; 
                           echo "<option value='TERVERIFIKASI'>TERVERIFIKASI</option>";
                        }else if($data_yudisium_mahasiswa->STATUS_BERITA_ACARA_TA=="TERVERIFIKASI"){
                           echo "<option value='MENUNGGU KONFIRMASI'>MENUNGGU KONFIRMASI</option>"; 
                           echo "<option value='TERVERIFIKASI' selected>TERVERIFIKASI</option>";
                        }
                        ?>
                        </select>
                        </b>
                    </td>
                    <td><b>
                        <?php if(!$data_yudisium_mahasiswa->FILE_BERITA_ACARA_TA==""){
                        echo "<a href='".base_url('assets/img/yudisium/').$data_yudisium_mahasiswa->FILE_BERITA_ACARA_TA."'>Lihat File</a>";
                        }
                        ?>
                        </b>
                    </td>
                    </tr>
                    <tr>
                    <td><b>Foto Kopi Berita Acara Ujian PKL</b></td>
                    <td><b>Status : 
                        <select name="status_berita_pkl">
                        <?php  
                        if($data_yudisium_mahasiswa->STATUS_BERITA_ACARA_PKL==""){
                           echo "<option value=''></option>";
                        }else if($data_yudisium_mahasiswa->STATUS_BERITA_ACARA_PKL=="MENUNGGU KONFIRMASI"){
                           echo "<option value='MENUNGGU KONFIRMASI' selected>MENUNGGU KONFIRMASI</option>"; 
                           echo "<option value='TERVERIFIKASI'>TERVERIFIKASI</option>";
                        }else if($data_yudisium_mahasiswa->STATUS_BERITA_ACARA_PKL=="TERVERIFIKASI"){
                           echo "<option value='MENUNGGU KONFIRMASI'>MENUNGGU KONFIRMASI</option>"; 
                           echo "<option value='TERVERIFIKASI' selected>TERVERIFIKASI</option>";
                        }
                        ?>
                        </select>
                        </b>
                    </td>
                    <td><b>
                        <?php if(!$data_yudisium_mahasiswa->FILE_BERITA_ACARA_PKL==""){
                        echo "<a href='".base_url('assets/img/yudisium/').$data_yudisium_mahasiswa->FILE_BERITA_ACARA_PKL."'>Lihat File</a>";
                        }
                        ?>
                        </b>
                    </td>
                    </tr>
                    <tr>
                    <td><b>Foto Kopi Bukti Penyerahan Laporan Tugas Akhir</b></td>
                    <td><b>Status : 
                        <select name="status_penyerahan_ta">
                        <?php  
                        if($data_yudisium_mahasiswa->STATUS_PENYERAHAN_TA==""){
                           echo "<option value=''></option>";
                        }else if($data_yudisium_mahasiswa->STATUS_PENYERAHAN_TA=="MENUNGGU KONFIRMASI"){
                           echo "<option value='MENUNGGU KONFIRMASI' selected>MENUNGGU KONFIRMASI</option>"; 
                           echo "<option value='TERVERIFIKASI'>TERVERIFIKASI</option>";
                        }else if($data_yudisium_mahasiswa->STATUS_PENYERAHAN_TA=="TERVERIFIKASI"){
                           echo "<option value='MENUNGGU KONFIRMASI'>MENUNGGU KONFIRMASI</option>"; 
                           echo "<option value='TERVERIFIKASI' selected>TERVERIFIKASI</option>";
                        }
                        ?>
                        </select>
                        </b>
                    </td>
                    <td><b>
                        <?php if(!$data_yudisium_mahasiswa->FILE_PENYERAHAN_TA==""){
                        echo "<a href='".base_url('assets/img/yudisium/').$data_yudisium_mahasiswa->FILE_PENYERAHAN_TA."'>Lihat File</a>";
                        }
                        ?>
                        </b>
                    </td>
                    </tr>
                    <tr>
                    <td><b>Foto Kopi Bukti Penyerahan Laporan PKL</b></td>
                    <td><b>Status : 
                        <select name="status_penyerahan_pkl">
                        <?php  
                        if($data_yudisium_mahasiswa->STATUS_PENYERAHAN_PKL==""){
                           echo "<option value=''></option>";
                        }else if($data_yudisium_mahasiswa->STATUS_PENYERAHAN_PKL=="MENUNGGU KONFIRMASI"){
                           echo "<option value='MENUNGGU KONFIRMASI' selected>MENUNGGU KONFIRMASI</option>"; 
                           echo "<option value='TERVERIFIKASI'>TERVERIFIKASI</option>";
                        }else if($data_yudisium_mahasiswa->STATUS_PENYERAHAN_PKL=="TERVERIFIKASI"){
                           echo "<option value='MENUNGGU KONFIRMASI'>MENUNGGU KONFIRMASI</option>"; 
                           echo "<option value='TERVERIFIKASI' selected>TERVERIFIKASI</option>";
                        }
                        ?>
                        </select>
                        </b>
                    </td>
                    <td><b>
                        <?php if(!$data_yudisium_mahasiswa->FILE_PENYERAHAN_PKL==""){
                        echo "<a href='".base_url('assets/img/yudisium/').$data_yudisium_mahasiswa->FILE_PENYERAHAN_PKL."'>Lihat File</a>";
                        }
                        ?>
                        </b>
                    </td>
                    </tr>
                    <tr>
                    <td><b>Foto Kopi Konsep Daftar Nilai Sementara</b></td>
                    <td><b>Status : 
                        <select name="status_daftar_nilai">
                        <?php  
                        if($data_yudisium_mahasiswa->STATUS_KONSEP_DAFTAR_NILAI_SEMENTARA==""){
                           echo "<option value=''></option>";
                        }else if($data_yudisium_mahasiswa->STATUS_KONSEP_DAFTAR_NILAI_SEMENTARA=="MENUNGGU KONFIRMASI"){
                           echo "<option value='MENUNGGU KONFIRMASI' selected>MENUNGGU KONFIRMASI</option>"; 
                           echo "<option value='TERVERIFIKASI'>TERVERIFIKASI</option>";
                        }else if($data_yudisium_mahasiswa->STATUS_KONSEP_DAFTAR_NILAI_SEMENTARA=="TERVERIFIKASI"){
                           echo "<option value='MENUNGGU KONFIRMASI'>MENUNGGU KONFIRMASI</option>"; 
                           echo "<option value='TERVERIFIKASI' selected>TERVERIFIKASI</option>";
                        }
                        ?>
                        </select>
                        </b>
                    </td>
                    <td><b>
                        <?php if(!$data_yudisium_mahasiswa->FILE_KONSEP_DAFTAR_NILAI_SEMENTARA==""){
                        echo "<a href='".base_url('assets/img/yudisium/').$data_yudisium_mahasiswa->FILE_KONSEP_DAFTAR_NILAI_SEMENTARA."'>Lihat File</a>";
                        }
                        ?>
                        </b>
                    </td>
                    </tr>
                    <tr>
                    <td><b>STATUS VALIDASI SEMUA BERKAS</b></td>
                    <td><b>Status : 
                        <select name="status_validasi_berkas">
                        <?php  
                        if($data_yudisium_mahasiswa->STATUS_VALIDASI=="" || $data_yudisium_mahasiswa->STATUS_VALIDASI=="TIDAK VALID"){
                           echo "<option value='TIDAK VALID' selected>TIDAK VALID</option>"; 
                           echo "<option value='VALID'>VALID</option>";
                        }else if($data_yudisium_mahasiswa->STATUS_VALIDASI=="VALID"){
                           echo "<option value='TIDAK VALID'>TIDAK VALID</option>"; 
                           echo "<option value='VALID' selected>VALID</option>";
                        }
                        ?>
                        </select>
                        </b>
                    </td>
                    <td>
                    </td>
                    </tr>
                </table>
                <input type="hidden" name="nim" value="<?php echo $data_yudisium_mahasiswa->NIM;?>" />
                <input type="submit" value="Simpan" class="btn btn-success"/><br><br>
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

