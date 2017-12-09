<?php 
$this->load->view('template/head');
?>
<!--tambahkan custom css disini-->
<?php
$this->load->view('template/topbar');
$this->load->view('template/sidebar');
?>
<!-- Content Header (Page header) -->
<section class="content-header">
    <center><h1><b>
        Upload berkas berkas Seminar Proposal
    </b></h1></center>
</section>

<!-- Main content -->
        <div class="container">
        <table class="table table-hover">
        <thead>
        <tr>
           <td><strong>No</strong></td>
           <td><strong>NIM</strong></td>
           <td><strong>Nama Mahasiswa</strong></td>
           <td><strong>Judul Tugas Akhir</strong></td>
        </tr> 
        </thead>
        <tbody>
           <?php
             $no = 1; 
             foreach($mhs as $mhsSempro){
           ?>
           <tr>
               <td><?=$no++;?></td>
               <td><?=$mhsSempro->NIM;?></td>
               <td><?=$mhsSempro->nama_mahasiswa;?></td>
               <td><?=$mhsSempro->judul_TA;?></td>
               <td>
                <div>
                    <a href="<?php echo site_url("admin/c_versempro/konfirmasi/".$mhsSempro->NIM); ?>" class="btn btn-primary">Konfirmasi</a>
                </div>
               </td>
        </tr>
        </tbody>     
      <?php }?>  
    </table>
</div>
</section><!-- /.content -->

<?php 
$this->load->view('template/js');
?>
<!--tambahkan custom js disini-->
<?php
$this->load->view('template/foot');
?>
