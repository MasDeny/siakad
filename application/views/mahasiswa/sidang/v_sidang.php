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
          <input value="Sistem Informasi Pemesanan Lapagan Futsal Berbasis Android" id="Judul" type="text" class="validate" disabled>
          <label class="active" for="Judul">Judul</label>
        </div>
      </div>

      <?php echo form_open_multipart('Upload/multiple_upload'); ?>
      <table class="bordered highlight">
        <tbody>
          <tr>
            <td>1. Upload scan KHS</td>
            <td class="waves-effect waves-light blue darken-1 btn"><?php echo form_upload('file1'); ?></td>
            <td><input type="checkbox" class="filled-in" id="1" disabled/><label for="1">Terupload</label></td>
          </tr>
          <tr>
            <td>2. Upload dokumen proposal</td>
            <td class="waves-effect waves-light blue darken-1 btn"><?php echo form_upload('file2'); ?></td>
            <td><input type="checkbox" class="filled-in" id="2" disabled/><label for="2">Terupload</label></td>
          </tr>
          <tr>
            <td>3. Upload scan bukti SPP terakhir</td>
            <td class="waves-effect waves-light blue darken-1 btn"><?php echo form_upload('file3'); ?></td>
            <td><input type="checkbox" class="filled-in" id="3" disabled/><label for="3">Terupload</label></td>
          </tr>
          <tr>
            <td>4. Upload scan kartu kendali</td>
            <td class="waves-effect waves-light blue darken-1 btn"><?php echo form_upload('file4'); ?></td>
            <td><input type="checkbox" class="filled-in" id="4" disabled/><label for="4">Terupload</label></td>
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