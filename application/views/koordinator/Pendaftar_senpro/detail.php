<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!doctype html>
<html lang="en">
    <?php $this->load->view('koordinator/header'); ?>
<body>
<div class="wrapper">
<div class="main-panel">
    <?php $this->load->view('koordinator/navbar'); ?>
         <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Mahasiswa ini Adalah 15 Mahasiswa yang terverifikasi : </h4>
                                <p class="category"> -- Mahasiswa yang ada didaftar berikut bebas menentukan dosen
                                yang hadir dalam sidangnya -- </p>
                            </div>
                            <div class="content">
                                <form>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>NIM</label>
                                                <input type="text" class="form-control border-input" disabled placeholder="Judul" value="<?php echo $user_details->NIM; ?>">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Nama Mahasiswa</label>
                                                <input type="text" class="form-control border-input" disabled placeholder="Nama" value="<?php echo $user_details->nama; ?>">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Judul Tugas Akhir</label>
                                                <input type="text" class="form-control border-input" disabled placeholder="Judul" value="<?php echo $user_details->judul; ?>">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row" id="penguji">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Panelis 1</label>
                                                <input type="text" class="form-control border-input" disabled placeholder="ketua" name="ketua" value="<?php echo $user_details->dospem; ?>">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Panelis 2</label>
                                                <input type="text" class="form-control border-input" placeholder="sekertaris" name="sekertaris">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Panelis 3</label>
                                                <input type="text" class="form-control border-input" placeholder="anggota" name="anggota">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Tanggal</label>
                                                <input type="text" class="form-control border-input" id="tanggal" placeholder="tanggal" name="tanggal">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Jam</label>
                                                <input type="text" class="form-control border-input" id="jam" placeholder="jam"  name="jam" >
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Ruangan</label>
                                                <input type="text" class="form-control border-input" placeholder="ruangan" name="ruangan">
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
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
