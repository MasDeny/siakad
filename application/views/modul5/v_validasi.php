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
<section class="content-header">
    <h1>
        Study Tracer
        <small>Teknologi Informasi</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Study Tracer</li>
    </ol>
</section>

<!-- Main content -->
<section class="content">

    <!-- Default box -->
    <div class="box">
		</div><!-- /.box -->
	
	
	<div class="box">
	
        <div class="box-header with-border">
            <h3 class="box-title">Data Studytracer</h3>
            <div class="box-tools pull-right">
                <button class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
                <button class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove"><i class="fa fa-times"></i></button>
            </div>
        </div>
        <div class="box-body" style="border:1px; #dedede double;width:auto; height:500px;overflow-y:scroll;overflow-x:scroll;">
				<button class="btn btn-default" onclick="reload_table()"><i class="glyphicon glyphicon-refresh"></i> Reload</button>
				<br />
				<br />
				<table id="table" class="table table-striped table-bordered" cellspacing="0" width="100%">
					<thead>
						<tr>
							<th>NO</th>
							<th>Id Tracer</th>
							<th>NIM</th>
							<th>Timestamp</th>
							<th>Jenis Kelamin</th>
							<th>Angkatan</th>
							<th>Alamat</th>
							<th>No. Telp</th>
							<th>Status Alumni</th>
							<th>Masa Tunggu</th>
							<th>Tingkat Studi</th>
							<th>Jenis Usaha</th>
							<th>Jabatan</th>
							<th>Perusahaan</th>
							<th>Gaji</th>
							<th>Kesesuaian Bidang</th>
							<th>Saran dan Masukan</th>
							<th>Option</th>
								
								</td>
						</tr>
					</thead>
					<tbody>
									<?php
									$i=1;
									foreach($render->result() as $row)
									{
									?>
                                        <tr>
                                            <td><?= $i;?></td>
											<td><?= $row->id;?></td>
											<td><?= $row->mahasiswa_NIM;?></td>
											<td><?= $row->Time_Stamp;?></td>
											<td><?= $row->Jenis_Kelamin;?></td>
											<td><?= $row->Angkatan;?></td>
											<td><?= $row->Alamat_Sekarang;?></td>
											<td><?= $row->No_Telepon;?></td>
											<td><?= $row->Status_Alumni;?></td>
											<td><?= $row->Masa_Tunggu;?></td>
											<td><?= $row->Tingkat_Studi;?></td>
											<td><?= $row->Jenis_Usaha;?></td>
											<td><?= $row->Jabatan;?></td>
											<td><?= $row->Perusahaan;?></td>
											<td><?= $row->Gaji;?></td>
											<td><?= $row->Kesesuaian_Bidang;?></td>
											<td><?= $row->Saran_dan_Masukan;?></td>
                                            <td>
                                                <div class="col-xs-3 text-right">
                                                    <a data-toggle="tooltip" title="Print" href="<?= site_url();?>modul5/validasistudytracer/printing/<?= $row->id?>">
													<i class="fa fa-print fa-fw fa-lg"></i>
													</a>
                                                </div>
												
                                            </td>
                                        </tr>
									<?php
									$i++;
									}
									?>	
								</tbody>
					
				</table>
        </div><!-- /.box-body -->
    </div>

</section><!-- /.content -->



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

