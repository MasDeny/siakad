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
        <label class="active" for="Judul">Judul :  </label>
          <input id="Judul" type="text" class="validate" value="<?php 
            foreach ($mahasiswa->result() as $m) {
              echo $m->judul_TA;
            }
        ?>" disabled>
        </div>
      </div>

      <?php echo form_open("mahasiswa/C_berkas/proses_upload_berkas", array('enctype'=>'multipart/form-data')); ?>
      <table class="bordered highlight">
        <tbody>
          <tr>
            <td>1. File scan Berita Acara</td>
            <td><input type="file" name="file1" class="waves-effect waves-light blue darken-1 btn"></td>
            <td><i class="material-icons" style="color: #26a69a;">check_box</i></td>
          </tr>
          <tr>
            <td>2. File Sampul</td>
            <td><input type="file" name="file2" class="waves-effect waves-light blue darken-1 btn"></td>
            <td><i class="material-icons" style="color: #26a69a;">check_box</i></td>
          </tr>
          <tr>
            <td>3. File scan Pengesahan TA</td>
            <td><input type="file" name="file3" class="waves-effect waves-light blue darken-1 btn"></td>
            <td><i class="material-icons" style="color: #26a69a;">check_box</i></td>
          </tr>
          <tr>
            <td>4. File Persembahan</td>
            <td><input type="file" name="file4" class="waves-effect waves-light blue darken-1 btn"></td>
            <td><i class="material-icons" style="color: #26a69a;">check_box</i></td>
          </tr>
          <tr>
            <td>5. File Motto</td>
            <td><input type="file" name="file5" class="waves-effect waves-light blue darken-1 btn"></td>
            <td><i class="material-icons" style="color: #26a69a;">check_box</i></td>
          </tr>
          <tr>
            <td>6. File scan Pernyataan TA</td>
            <td><input type="file" name="file6" class="waves-effect waves-light blue darken-1 btn"></td>
            <td><i class="material-icons" style="color: #26a69a;">check_box</i></td>
          </tr>
          <tr>
            <td>7. File Abstrak</td>
            <td><input type="file" name="file7" class="waves-effect waves-light blue darken-1 btn"></td>
            <td><i class="material-icons" style="color: #26a69a;">check_box</i></td>
          </tr>
          <tr>
            <td>8. File Ringkasan</td>
            <td><input type="file" name="file8" class="waves-effect waves-light blue darken-1 btn"></td>
            <td><i class="material-icons" style="color: #26a69a;">check_box</i></td>
          </tr>
          <tr>
            <td>9. File Prakata</td>
            <td><input type="file" name="file9" class="waves-effect waves-light blue darken-1 btn"></td>
            <td><i class="material-icons" style="color: #26a69a;">check_box</i></td>
          </tr>
          <tr>
            <td>10. File Daftar Isi</td>
            <td><input type="file" name="file10" class="waves-effect waves-light blue darken-1 btn"></td>
            <td><i class="material-icons" style="color: #26a69a;">check_box</i></td>
          </tr>
          <tr>
            <td>11. File Daftar Tabel</td>
            <td><input type="file" name="file11" class="waves-effect waves-light blue darken-1 btn"></td>
            <td><i class="material-icons" style="color: #26a69a;">check_box</i></td>
          </tr>
          <tr>
            <td>12. File Daftar Gambar</td>
            <td><input type="file" name="file12" class="waves-effect waves-light blue darken-1 btn"></td>
            <td><i class="material-icons" style="color: #26a69a;">check_box</i></td>
          </tr>
          <tr>
            <td>13. File Daftar Lampiran</td>
            <td><input type="file" name="file13" class="waves-effect waves-light blue darken-1 btn"></td>
            <td><i class="material-icons" style="color: #26a69a;">check_box</i></td>
          </tr>
          <tr>
            <td>14. File Bab 1</td>
            <td><input type="file" name="file14" class="waves-effect waves-light blue darken-1 btn"></td>
            <td><i class="material-icons" style="color: #26a69a;">check_box</i></td>
          </tr>
          <tr>
            <td>15. File Bab 2</td>
            <td><input type="file" name="file15" class="waves-effect waves-light blue darken-1 btn"></td>
            <td><i class="material-icons" style="color: #26a69a;">check_box</i></td>
          </tr>
          <tr>
            <td>16. File Bab 3</td>
            <td><input type="file" name="file16" class="waves-effect waves-light blue darken-1 btn"></td>
            <td><i class="material-icons" style="color: #26a69a;">check_box</i></td>
          </tr>
          <tr>
            <td>17. File Bab 4</td>
            <td><input type="file" name="file17" class="waves-effect waves-light blue darken-1 btn"></td>
            <td><i class="material-icons" style="color: #26a69a;">check_box</i></td>
          </tr>
          <tr>
            <td>18. File Bab 5</td>
            <td><input type="file" name="file18" class="waves-effect waves-light blue darken-1 btn"></td>
            <td><i class="material-icons" style="color: #26a69a;">check_box</i></td>
          </tr>
          <tr>
            <td>19. File Daftar Pustaka</td>
            <td><input type="file" name="file19" class="waves-effect waves-light blue darken-1 btn"></td>
            <td><i class="material-icons" style="color: #26a69a;">check_box</i></td>
          </tr>
          <tr>
            <td>20. File Lampiran</td>
            <td><input type="file" name="file20" class="waves-effect waves-light blue darken-1 btn"></td>
            <td><i class="material-icons" style="color: #26a69a;">check_box</i></td>
          </tr>
        </tbody>
      </table>
      <br><br>

      <div class="row">
      	<div class="col s3">*File berupa PDF</div>
      	<div class="col s3"></div>
      	<div class="col s3"></div>
      	<div class="col s3 waves-effect waves-light indigo darken-4 btn">
          <input type="submit" value="upload berkas" class="btn btn-success">
        </div>
      </div>
      <?php echo form_close() ?>

    </div>
    <br><br>