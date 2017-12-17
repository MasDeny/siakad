<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!doctype html>
<html lang="en">
    <?php $this->load->view('koordinator/header'); ?>
<body>
<div class="wrapper">
    <?php $this->load->view('koordinator/Pendaftar_senpro/sidebar'); ?>
<div class="main-panel">
    <?php $this->load->view('koordinator/navbar'); ?> 
         <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Berikut adalah daftar mahasiswa yang telah ditentukan jadwal seminar proposal </h4>
                                <br>

                            </div>
                            <div class="content table-responsive table-full-width">
                                <table class="table table-hover table-responsive">
                                    <thead>
                                        <th>No</th>
                                        <th>NIM</th>
                                        <th>Nama</th>
                                        <th>Jam</th>
                                        <th>Tanggal</th>
                                        <th>Ruangan</th>
                                        <th>Panelis 1</th>
                                        <th></th>
                                    </thead>
                                    <tbody>
                                        <?php if (is_null($user_acc) || empty($user_acc)): ?>
                                        <div class="text-center breadcrumb">
                                            <i class="glyphicon glyphicon-alert text-center text-danger"><p>data kosong</p></i>
                                        </div>
                                        <?php else: ?>
                                        <?php 
                                        foreach ($user_acc as $data) {   
                                        ?>
                                        <tr>
                                            <td><?php echo ++$no; ?></td>
                                            <td><?php echo $data->NIM; ?></td>
                                            <td><?php echo $data->nama; ?></td>
                                            <td><?php echo $data->jam; ?></td>
                                            <td><?php echo $data->tanggal; ?></td>
                                            <td><?php echo $data->ruangan; ?></td>
                                            <td><?php echo $data->panelis_1; ?></td>>
                                            <td>
                                                <div class="button-group">                
                                                <a data-toogle="modal" data-target="#myModal" href="<?php echo base_url()."koordinator/Pendaftar_senpro/view/".$data->id; ?>" class="btn btn-md btn-info btn-flat" id="edit"><i class="glyphicon glyphicon-pencil"></i> Edit</a>
                                                <a href="<?php echo base_url()."koordinator/Pendaftar_senpro/unselect_mhs/".$data->id; ?>" class="btn btn-md btn-danger btn-flat"><i class="glyphicon glyphicon-trash"></i> Hapus</a>
                                                </div>
                                            </td>
                                        </tr>
                                        <?php } ?>
                                        <?php endif ?>
                                    </tbody>
                                </table>
                                <div class="text-center">
                                    <?php echo $pagination; ?>
                                </div>    
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