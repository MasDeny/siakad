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
                                <h4 class="title">Berikut Adalah 15 Mahasiswa yang terverifikasi : </h4>
                                <p class="category"> -- Mahasiswa yang ada didaftar berikut bebas menentukan dosen
                                yang hadir dalam sidangnya -- </p>
                            </div>
                            <div class="content table-responsive table-full-width">
                                <table class="table table-striped">
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
                                                    <btn class="btn btn-md btn-info btn-icon">
                                                        <a href="<?php echo base_url()."koordinator/jadwal_sidang/view/". $data->id; ?>">
                                                            <i class="fa fa-check" aria-hidden="true"></i>
                                                        </a>
                                                    </btn>
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
<script>document.body.style.overflow = "hidden";</script>
</div>
    <?php $this->load->view('/koordinator/footer');
