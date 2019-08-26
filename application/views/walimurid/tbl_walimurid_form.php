       <!-- belicode.com -->
<div class="content-wrapper">

    <section class="content">
        <div class="box box-warning box-solid">
            <div class="box-header with-border">
                <h3 class="box-title">INPUT DATA WALIMURID</h3>
            </div>
            <form action="<?php echo $action; ?>" method="post" enctype="multipart/form-data">

                <table class='table table-bordered>'        

                       <tr><td width='200'>Nama Lengkap <?php echo form_error('nama_guru') ?></td><td><input type="text" class="form-control" name="nama_ortu" id="nama_ortu" placeholder="Nama Ortu" value="<?php echo $nama_ortu; ?>" /></td></tr>
                    <tr><td width='200'>No Induk Orangtua <?php echo form_error('nip') ?></td><td>

                            <input type="text" class="form-control" name="nio" id="nio" placeholder="Wajib angka" value="<?php echo $nio; ?>" /></td></tr>
                                <tr><td width='200'>Siswa <?php echo form_error('kode_kelas') ?></td><td>
   <?php echo cmb_dinamis('nis', 'tbl_siswa', 'nama_siswa', 'nis', $nis,'DESC') ?>
                         
                              <tr><td width='200'>Alamat <?php echo form_error('alamat') ?></td><td>

                            <input type="text" class="form-control" name="alamat" id="alamat" placeholder="Alamat Rumah" value="<?php echo $alamat; ?>" /></td></tr>
  
  <tr><td width='200'>No Telp<?php echo form_error('no_telp') ?></td><td>

                            <input type="text" class="form-control" name="no_telp" id="no_telp" placeholder="No Telp" value="<?php echo $no_telp; ?>" /></td></tr>
 

                          
  <tr><td width='200'>Password <?php echo form_error('password') ?></td><td>

                            <input type="text" class="form-control" name="password" id="password" placeholder="Password" value="<?php echo $password; ?>" /></td></tr>




                
                    
                    <tr><td></td><td><input type="hidden" name="id_walimurid" value="<?php echo $nio; ?>" /> 
                            <button type="submit" class="btn btn-danger"><i class="fa fa-floppy-o"></i> <?php echo $button ?></button> 
                            <a href="<?php echo site_url('walimurid') ?>" class="btn btn-info"><i class="fa fa-sign-out"></i> Kembali</a></td></tr>
                </table></form>        </div>
</div>
</div>
       <!-- belicode.com -->