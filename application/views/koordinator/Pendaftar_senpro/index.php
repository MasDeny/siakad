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
                                <h4 class="title">Berikut mahasiswa yang telah melengkapi persyaratan seminar proposal </h4>
                            </div>
                            <<div class="content table-responsive table-full-width">
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
                                                <a href="<?php echo base_url()."koordinator/Pendaftar_senpro/view/". 
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
                    </div>
                </div>
            </div>
        </div>
</div>
</div>
    <?php $this->load->view('/koordinator/footer');
