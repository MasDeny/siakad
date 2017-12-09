<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!doctype html>
<html lang="en">
    <?php $this->load->view('koordinator/header'); ?>
<body>
<div class="wrapper">
    <?php $this->load->view('koordinator/sidang/sidebar'); ?>
<div class="main-panel">
    <?php $this->load->view('koordinator/navbar'); ?>
         <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Berikut adalah daftar mahasiswa yang telah terverifikasi oleh admin : </h4>
                                <br>
                                <p class="category">Tabel ini untuk memilih mahasiswa yang akan disetujui melakukan sidang, sehingga nantinya akan di tentukan jadwal sidangnya</p>
                            </div>
                            <div class="content table-responsive table-full-width">
                                <table class="table table-hover">
                                    <thead>
                                        <th>No</th>
                                        <th>NIM</th>
                                        <th>Nama</th>
                                        <th>Judul Tugas Akhir</th>
                                        <th>Pembimbing 1</th>
                                        <th></th>
                                    </thead>
                                    <tbody>
                                        <?php 
                                        $no = 1 ;
                                        foreach ($user as $data) {
                                            
                                        ?>
                                        <tr>
                                            <td><?php echo $no++; ?></td>
                                            <td><?php echo $data->NIM; ?></td>
                                            <td><?php echo $data->nama; ?></td>
                                            <td><?php echo $data->judul; ?></td>
                                            <td><?php echo $data->dospem; ?></td>
                                            <td>
                                                <div class="col-xs-3 text-right">        
                                                <a href="<?php echo base_url()."koordinator/jadwal_sidang/view/". 
                                                $data->id; ?>" class="btn btn-md btn-info btn-icon">
                                                <i class="fa fa-check" aria-hidden="true"></i>
                                                </a>
                                                 
                                                </div>
                                            </td>
                                        </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Berikut adalah daftar mahasiswa yang telah ditentukan jadwal sidangnya : </h4>
                                <br>
                                <p class="category">Pada tabel ini anda berhak untuk mengganti jadwal sidang ataupun menghapus mahasiswa dari jadwal sidang yang ditentukan</p>
                            </div>
                            <div class="content table-responsive table-full-width">
                                <table class="table table-hover table-responsive">
                                    <thead>
                                        <th>No</th>
                                        <th>NIM</th>
                                        <th>Nama</th>
                                        <th>Judul Tugas Akhir</th>
                                        <th>Status</th>
                                        <th></th>
                                    </thead>
                                    <tbody>
                                        <?php 
                                        $no = 1 ;
                                        foreach ($user as $data) {
                                            
                                        ?>
                                        <tr>
                                            <td><?php echo $no++; ?></td>
                                            <td><?php echo $data->NIM; ?></td>
                                            <td><?php echo $data->nama; ?></td>
                                            <td><?php echo $data->judul; ?></td>
                                            <td></td>
                                            <td>
                                                <div class="button-group">        
                                                <a href="<?php echo base_url()."koordinator/jadwal_sidang/view/". 
                                                $data->id; ?>" class="btn btn-md btn-default btn-flat">Lihat</a>        
                                                <a href="<?php echo base_url()."koordinator/jadwal_sidang/view/". 
                                                $data->id; ?>" class="btn btn-md btn-info btn-flat">Edit</a>
                                                 <a href="<?php echo base_url(); ?>koordinator/Jadwal_sidang" class="btn btn-md btn-danger btn-flat">Hapus</a>
                                                </div>
                                            </td>
                                        </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</div>
</div>
<script>document.body.style.overflow = "hidden";</script>
    <?php $this->load->view('/koordinator/footer');