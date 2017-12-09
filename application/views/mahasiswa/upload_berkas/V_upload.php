      <br><br>
      <h3 class="header center">UPLOAD BERKAS TA</h3>

      <div class="row center">
        <h6 class="header col s12 light">Form ini digunakan untuk mengupload berkas revisi TA sebagai syarat untuk Yudisium & Wisuda</h6>
      </div>
      <br><br>

    </div>
  </div>

  <div class="container">
    <div class="section">

      <div class="row">
        <div class="input-field col s12">
        <label class="active" for="Judul">NIM :  </label>
          <input id="Judul" type="text" class="validate" value="<?php echo $this->session->userdata("nama") ?>" disabled>
        </div>
      </div>

      <?php echo form_open_multipart('mahasiswa/C_berkas/multiple_upload'); ?>
      <table class="bordered highlight">
        <tbody>
          <tr>
            <td>1. File scan Berita Acara</td>
            <td class="waves-effect waves-light blue darken-1 btn"><?php echo form_upload('file1'); ?></td>
            <td><input type="checkbox" class="filled-in" id="1" disabled/><label for="1">Terupload</label></td>
          </tr>
          <tr>
            <td>2. File Sampul</td>
            <td class="waves-effect waves-light blue darken-1 btn"><?php echo form_upload('file2'); ?></td>
            <td><input type="checkbox" class="filled-in" id="2" disabled/><label for="2">Terupload</label></td>
          </tr>
          <tr>
            <td>3. File scan Pengesahan TA</td>
            <td class="waves-effect waves-light blue darken-1 btn"><?php echo form_upload('file3'); ?></td>
            <td><input type="checkbox" class="filled-in" id="3" disabled/><label for="3">Terupload</label></td>
          </tr>
          <tr>
            <td>4. File Persembahan</td>
            <td class="waves-effect waves-light blue darken-1 btn"><?php echo form_upload('file4'); ?></td>
            <td><input type="checkbox" class="filled-in" id="4" disabled/><label for="4">Terupload</label></td>
          </tr>
          <tr>
            <td>5. File Motto</td>
            <td class="waves-effect waves-light blue darken-1 btn"><?php echo form_upload('file5'); ?></td>
            <td><input type="checkbox" class="filled-in" id="5" disabled/><label for="5">Terupload</label></td>
          </tr>
          <tr>
            <td>6. File scan Pernyataan TA</td>
            <td class="waves-effect waves-light blue darken-1 btn"><?php echo form_upload('file6'); ?></td>
            <td><input type="checkbox" class="filled-in" id="6" disabled/><label for="6">Terupload</label></td>
          </tr>
          <tr>
            <td>7. File Abstrak</td>
            <td class="waves-effect waves-light blue darken-1 btn"><?php echo form_upload('file7'); ?></td>
            <td><input type="checkbox" class="filled-in" id="7" disabled/><label for="7">Terupload</label></td>
          </tr>
          <tr>
            <td>8. File Ringkasan</td>
            <td class="waves-effect waves-light blue darken-1 btn"><?php echo form_upload('file8'); ?></td>
            <td><input type="checkbox" class="filled-in" id="8" disabled/><label for="8">Terupload</label></td>
          </tr>
          <tr>
            <td>9. File Prakata</td>
            <td class="waves-effect waves-light blue darken-1 btn"><?php echo form_upload('file9'); ?></td>
            <td><input type="checkbox" class="filled-in" id="9" disabled/><label for="9">Terupload</label></td>
          </tr>
          <tr>
            <td>10. File Daftar Isi</td>
            <td class="waves-effect waves-light blue darken-1 btn"><?php echo form_upload('file10'); ?></td>
            <td><input type="checkbox" class="filled-in" id="10" disabled/><label for="10">Terupload</label></td>
          </tr>
          <tr>
            <td>11. File Daftar Tabel</td>
            <td class="waves-effect waves-light blue darken-1 btn"><?php echo form_upload('file11'); ?></td>
            <td><input type="checkbox" class="filled-in" id="11" disabled/><label for="11">Terupload</label></td>
          </tr>
          <tr>
            <td>12. File Daftar Gambar</td>
            <td class="waves-effect waves-light blue darken-1 btn"><?php echo form_upload('file12'); ?></td>
            <td><input type="checkbox" class="filled-in" id="12" disabled/><label for="12">Terupload</label></td>
          </tr>
          <tr>
            <td>13. File Daftar Lampiran</td>
            <td class="waves-effect waves-light blue darken-1 btn"><?php echo form_upload('file13'); ?></td>
            <td><input type="checkbox" class="filled-in" id="13" disabled/><label for="13">Terupload</label></td>
          </tr>
          <tr>
            <td>14. File Bab 1</td>
            <td class="waves-effect waves-light blue darken-1 btn"><?php echo form_upload('file14'); ?></td>
            <td><input type="checkbox" class="filled-in" id="14" disabled/><label for="14">Terupload</label></td>
          </tr>
          <tr>
            <td>15. File Bab 2</td>
            <td class="waves-effect waves-light blue darken-1 btn"><?php echo form_upload('file15'); ?></td>
            <td><input type="checkbox" class="filled-in" id="15" disabled/><label for="15">Terupload</label></td>
          </tr>
          <tr>
            <td>16. File Bab 3</td>
            <td class="waves-effect waves-light blue darken-1 btn"><?php echo form_upload('file16'); ?></td>
            <td><input type="checkbox" class="filled-in" id="16" disabled/><label for="16">Terupload</label></td>
          </tr>
          <tr>
            <td>17. File Bab 4</td>
            <td class="waves-effect waves-light blue darken-1 btn"><?php echo form_upload('file17'); ?></td>
            <td><input type="checkbox" class="filled-in" id="17" disabled/><label for="17">Terupload</label></td>
          </tr>
          <tr>
            <td>18. File Bab 5</td>
            <td class="waves-effect waves-light blue darken-1 btn"><?php echo form_upload('file18'); ?></td>
            <td><input type="checkbox" class="filled-in" id="18" disabled/><label for="18">Terupload</label></td>
          </tr>
          <tr>
            <td>19. File Daftar Pustaka</td>
            <td class="waves-effect waves-light blue darken-1 btn"><?php echo form_upload('file19'); ?></td>
            <td><input type="checkbox" class="filled-in" id="19" disabled/><label for="19">Terupload</label></td>
          </tr>
          <tr>
            <td>20. File Lampiran</td>
            <td class="waves-effect waves-light blue darken-1 btn"><?php echo form_upload('file20'); ?></td>
            <td><input type="checkbox" class="filled-in" id="20" disabled/><label for="20">Terupload</label></td>
          </tr>
        </tbody>
      </table>
      <br><br>

      <div class="row">
      	<div class="col s3">*File berupa PDF</div>
      	<div class="col s3"></div>
      	<div class="col s3"></div>
      	<div class="col s3 waves-effect waves-light indigo darken-4 btn"><?php echo form_submit('upload', 'Upload Berkas'); ?></div>
      </div>
      <?php echo form_close() ?>

    </div>
    <br><br>