       <!-- belicode.com -->
<div class="content-wrapper">

    <section class="content">
        <div class="box box-warning box-solid">
            <div class="box-header with-border">
                <h3 class="box-title">INPUT DATA SISWA</h3>
            </div>
            <form action="<?php echo $action; ?>" method="post" enctype="multipart/form-data">

                <table class='table table-bordered>'        

                       <tr><td width='200'>Nama Lengkap <?php echo form_error('nama_siswa') ?></td><td><input type="text" class="form-control" name="nama_siswa" id="nama_siswa" placeholder="Nama Siswa" value="<?php echo $nama_siswa; ?>" /></td></tr>
                    <tr><td width='200'>NIS <?php echo form_error('nis') ?></td><td>

                            <input type="text" class="form-control" name="nis" id="nis" placeholder="NIS Siswa" value="<?php echo $nis; ?>" /></td></tr>
                             <tr><td width='200'>Kode Kelas <?php echo form_error('kode_kelas') ?></td><td>
   <?php echo cmb_dinamis('kode_kelas', 'tbl_kelas', 'kode_kelas', 'kode_kelas', $kode_kelas,'DESC') ?>
                         
                              <tr><td width='200'>Alamat <?php echo form_error('alamat') ?></td><td>

                            <input type="text" class="form-control" name="alamat" id="alamat" placeholder="Alamat Rumah" value="<?php echo $alamat; ?>" /></td></tr>
  
  <tr><td width='200'>No Telp<?php echo form_error('no_telp') ?></td><td>

                            <input type="text" class="form-control" name="no_telp" id="no_telp" placeholder="No Telp" value="<?php echo $no_telp; ?>" /></td></tr>
  <tr><td width='200'>Tgl Lahir <?php echo form_error('tgl_lahir') ?></td><td>

                            <input type="text" class="form-control" name="tgl_lahir" id="tgl_lahir" placeholder="Tanggal Lahir" value="<?php echo $tgl_lahir; ?>" /></td></tr>
  <tr><td width='200'>Password <?php echo form_error('password') ?></td><td>

                            <input type="text" class="form-control" name="password" id="password" placeholder="Password" value="<?php echo $password; ?>" /></td></tr>




                
                    
                    <tr><td></td><td><input type="hidden" name="id_siswa" value="<?php echo $id_siswa; ?>" /> 
                            <button type="submit" class="btn btn-danger"><i class="fa fa-floppy-o"></i> <?php echo $button ?></button> 
                            <a href="<?php echo site_url('siswa') ?>" class="btn btn-info"><i class="fa fa-sign-out"></i> Kembali</a></td></tr>
                </table></form>        </div>
</div>
</div>
       <!-- belicode.com -->