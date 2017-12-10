<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                        <h4 class="modal-title" id="myModalLabel">Data Jadwal Sidang</h4>
                    </div>
            <div class="modal-body">
                                <form>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>NIM</label>
                                                <input type="text" class="form-control border-input text-center" disabled placeholder="Judul" value="<?php echo $data->NIM; ?>">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Nama Mahasiswa</label>
                                                <input type="text" class="form-control border-input text-center" disabled placeholder="Nama" value="<?php echo $data->nama; ?>">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Judul Tugas Akhir</label>
                                                <input type="text" class="form-control border-input text-center" disabled placeholder="Judul" value="<?php echo $data->judul; ?>">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row" id="penguji">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Ketua</label>
                                                <input type="text" class="form-control border-input text-center" disabled placeholder="ketua" value="<?php echo $penguji->ketua; ?>">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Sekertaris</label>
                                                 <input type="text" class="form-control border-input text-center" disabled placeholder="sekertaris" value="<?php echo $penguji->sekertaris; ?>">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Anggota</label>
                                                 <input type="text" class="form-control border-input text-center" disabled placeholder="anggota" value="<?php echo $penguji->anggota; ?>">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Tanggal</label>
                                                 <input type="text" class="form-control border-input text-center" disabled placeholder="tanggal" value="<?php echo $penguji->tanggal; ?>">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Jam</label>
                                                 <input type="text" class="form-control border-input text-center" disabled placeholder="jam" value="<?php echo $penguji->jam; ?>">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Ruangan</label>
                                                 <input type="text" class="form-control border-input text-center" disabled placeholder="ruangan" value="<?php echo $penguji->ruangan; ?>">
                                            </div>
                                        </div>
                                    </div>
                                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>