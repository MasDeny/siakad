<?php 
$this->load->view('template/head');
?>
<!--tambahkan custom css disini-->
<?php
$this->load->view('template/topbar');
$this->load->view('template/sidebar');
?>

<!-- Content Header (Page header) -->
<head>
    <link href="<?php echo base_url('asset/css/bootstrap.min.css')?>" rel="stylesheet">
    <link href="<?php echo base_url('asset/datatables/css/dataTables.bootstrap.css')?>" rel="stylesheet">
    <link href="<?php echo base_url('asset/bootstrap-datepicker/css/bootstrap-datepicker3.min.css')?>" rel="stylesheet">
	
</head>
<section class="content">
	
    <div class="box">
    <div class="box-header with-border">
          <center><h1>Validasi Hak Akses</h1></center><hr>
	</div>
    <div class="box-body" style="border:1px; #dedede double;width:auto; height:500px;overflow-y:scroll;overflow-x:scroll;">
          <?php echo form_open_multipart('modul5/Tracer/cari_data_tracer');?>
          <table>
                <tr>
                    <td>Tahun Angkatan</td>
                    <td width="20"></td>
                    <td>
                        <?php

                        echo "<select name='tahun'>";
                        $tahun=2003;
                        $tahun_sekarang=date("Y");
                        for ($i=$tahun; $i<=$tahun_sekarang ; $i++)
                        echo "<option value=$i>$i<br>";
                        echo "</option></select>";

                        ?>
                    </td>
                    <td width="20"></td>
                    <td>Status</td>
                    <td width="20"></td>
                    <td>
                        <select name="status">
                        <option value='Mahasiswa'>Mahasiswa</option>"; 
                        <option value='Alumni'>Alumni</option>";
                        </select>
                    </td>
                    <td width="20"></td>
                    <td>
                        <input type='submit' value='Cari' />
                    </td>
                </tr>
          </table>
          <br>
          
            

          <div class="table-responsive">
            <center>
            <table border="1" class="table table-bordered table-striped table-hover">
                <tr align="center" height="40">
                <td><u>No</u></td>
                <td><u>Nim</u></td>
                <td><u>Nama</u></td>
                <td><u>Prodi</u></td>
                <td><u>Tahun Angkatan</u></td>
                <td><u>Status</u></td>
                <td>Aksi</td>
                </tr>
            <?php 
            $i=1;
            foreach ($data_mahasiswa as $data) {?>
                <tr bgcolor='#FFFFFF' align='center' height='30'  id='tabel'>
                    <td><?php echo $i?></td>
                    <td><?php echo $data->NIM?></td>
                    <td><?php echo $data->nama_mahasiswa?></td>
                    <td><?php echo $data->program_studi?></td>
                    <td><?php echo $data->Angkatan?></td>
                    <td><?php if($data->status_mahasiswa=='Mahasiswa'){
                        echo 'Mahasiswa';
                    }elseif($data->status_mahasiswa=='Alumni'){
                        echo 'Alumni';
                    }
                    ?>
                    </td>
                    <td>
                        <a href="<?php echo site_url('modul5/tracer/edit_data_tracer/'.$data->NIM);?>">Edit</a>
                    </td>
                </tr>
            <?php 
            $i++; } 
            ?>
            </tr>
            </table>
           </center>
        </div>
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
