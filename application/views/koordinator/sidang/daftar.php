<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<?php $this->load->view('koordinator/header'); ?>
<body>
    <div class="wrapper">
        <?php $this->load->view('koordinator/sidang/sidebar'); ?>
        <div class="main-panel">
            <?php $this->load->view('koordinator/navbar'); ?>
            <div class="content">
                <div class="container-fluid">
                    <div class="row col-xs-8 col-xs-offset-2">
                        <form class="input-group" action="<?php echo base_url()."koordinator/jadwal_sidang/search_details";?>" method="post">
                            <div class="form-group input-group-btn search-panel">
                                <input type="text" class="form-control" name="search" placeholder="Cara mahasiswa berdasarkan NIM" required>
                                <button class="btn btn-default" type="submit"><span class="glyphicon glyphicon-search"></span></button>
                            </div>
                        </form>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
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
                                            <th>Keterangan</th>
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
                                                        <td><?php echo $data->judul; ?></td>
                                                        <?php if ($data->sekertaris === NULL ): ?>
                                                            <td class="text-danger"> Belum Lengkap</td>
                                                        <?php else: ?>
                                                            <td class="text-success"> Lengkap</td>
                                                        <?php endif ?>
                                                        <td>
                                                            <div class="button-group">
                                                                <button class="btn btn-md btn-default btn-flat" data-toggle="modal" data-target="#lihat">
                                                                    <i class="glyphicon glyphicon-eye-open"></i> Lihat
                                                                </button>
                                                                <a data-toogle="modal" data-target="#myModal" href="<?php echo base_url()."koordinator/jadwal_sidang/view/".$data->id; ?>" class="btn btn-md btn-info btn-flat" id="edit"><i class="glyphicon glyphicon-pencil"></i> Edit</a>
                                                                <a href="<?php echo base_url()."koordinator/Jadwal_sidang/unselect_mhs/".$data->id; ?>" class="btn btn-md btn-danger btn-flat"><i class="glyphicon glyphicon-trash"></i> Hapus</a>
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
        <?php $this->load->view('koordinator/sidang/view') ?>
        <script>document.body.style.overflow = "hidden";</script>
        <?php $this->load->view('/koordinator/footer');