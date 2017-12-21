      <br><br>
      <h3 class="header center">PENDAFTARAN SIDANG TA</h3>

      <div class="row center">
        <h6 class="header col s12 light">Form ini digunakan untuk mengupload berkas pendaftaran sidang TA</h6>
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

      <?php echo form_open("mahasiswa/C_sidang/proses_upload_berkas", array('enctype'=>'multipart/form-data')); ?>
      <table class="bordered highlight">

        <tbody>
          <tr>
            <td>1. Upload scan KHS semester 1</td>
            <td><input type="file" name="file1" class="waves-effect waves-light blue darken-1 btn"></td>
            <td> <i>(*File berupa JPG atau PNG)</i></td>
          </tr>
          <tr>
            <td>2. Upload scan KHS semester 2</td>
            <td><input type="file" name="file2" class="waves-effect waves-light blue darken-1 btn"></td>
            <td> <i>(*File berupa JPG atau PNG)</i></td>
          </tr>
          <tr>
            <td>3. Upload scan KHS semester 3</td>
            <td><input type="file" name="file3" class="waves-effect waves-light blue darken-1 btn"></td>
            <td> <i>(*File berupa JPG atau PNG)</i></td>
          </tr>
          <tr>
            <td>4. Upload scan KHS semester 4</td>
            <td><input type="file" name="file4" class="waves-effect waves-light blue darken-1 btn"></td>
            <td> <i>(*File berupa JPG atau PNG)</i></td>
          </tr>
          <tr>
            <td>5. Upload scan KHS semester 5</td>
            <td><input type="file" name="file5" class="waves-effect waves-light blue darken-1 btn"></td>
            <td> <i>(*File berupa JPG atau PNG)</i></td>
          </tr>
          <tr>
            <td>6. Upload Dokumen Proposal</td>
            <td><input type="file" name="file6" class="waves-effect waves-light blue darken-1 btn"></td>
            <td> <i>(*File berupa PDF)</i></td>
          </tr>
          <tr>
            <td>7. Upload scan kartu kendali</td>
            <td><input type="file" name="file7" class="waves-effect waves-light blue darken-1 btn"></td>
            <td> <i>(*File berupa JPG atau PNG)</i></td>
          </tr>
          <tr>
            <td>8. Upload scan bukti SPP terakhir</td>
            <td><input type="file" name="file8" class="waves-effect waves-light blue darken-1 btn"></td>
            <td> <i>(*File berupa JPG atau PNG)</i></td>
          </tr>
         
        </tbody>
      </table>
      <br><br>

      <div class="row">
        <div class="col s3"></div>
        <div class="col s3"></div>
        <div class="col s3"></div>
        <div class="col s3 waves-effect waves-light indigo darken-4 btn">
            <input type="submit" value="upload berkas" class="btn btn-success">
      </div>
      <?php echo form_close() ?>

    </div>
    <br><br>