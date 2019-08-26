       <!-- belicode.com -->
<div class="content-wrapper">

    <section class="content">
        <div class="box box-warning box-solid">
            <div class="box-header with-border">
                <h3 class="box-title">INPUT DATA GURU</h3>
            </div>
            <form action="<?php echo $action; ?>" method="post" enctype="multipart/form-data">

                <table class='table table-bordered>'        

                       <tr><td width='200'>Nama Lengkap <?php echo form_error('nama_guru') ?></td><td><input type="text" class="form-control" name="nama_guru" id="nama_guru" placeholder="Nama Guru" value="<?php echo $nama_guru; ?>" /></td></tr>
                    <tr><td width='200'>NIP <?php echo form_error('nip') ?></td><td>

                            <input type="text" class="form-control" name="nip" id="nip" placeholder="nip guru" value="<?php echo $nip; ?>" /></td></tr>
                            
                         
                              <tr><td width='200'>Alamat <?php echo form_error('alamat') ?></td><td>

                            <input type="text" class="form-control" name="alamat" id="alamat" placeholder="Alamat Rumah" value="<?php echo $alamat; ?>" /></td></tr>
  
  <tr><td width='200'>No Telp<?php echo form_error('no_telp') ?></td><td>

                            <input type="text" class="form-control" name="no_telp" id="no_telp" placeholder="No Telp" value="<?php echo $no_telp; ?>" /></td></tr>
 

                          
  <tr><td width='200'>Password <?php echo form_error('password') ?></td><td>

                            <input type="text" class="form-control" name="password" id="password" placeholder="Password" value="<?php echo $password; ?>" /></td></tr>




                
                    
                    <tr><td></td><td><input type="hidden" name="id_guru" value="<?php echo $id_guru; ?>" /> 
                            <button type="submit" class="btn btn-danger"><i class="fa fa-floppy-o"></i> <?php echo $button ?></button> 
                            <a href="<?php echo site_url('guru') ?>" class="btn btn-info"><i class="fa fa-sign-out"></i> Kembali</a></td></tr>
                </table></form>        </div>
</div>
</div>
       <!-- belicode.com -->