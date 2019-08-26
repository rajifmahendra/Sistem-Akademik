       <!-- belicode.com -->
<div class="content-wrapper">

    <section class="content">
        <div class="box box-warning box-solid">
            <div class="box-header with-border">
                <h3 class="box-title">INPUT DATA KELAS</h3>
            </div>
            <form action="<?php echo $action; ?>" method="post" enctype="multipart/form-data">

                <table class='table table-bordered>'        

                       <tr><td width='200'>Kode  <?php echo form_error('nama_guru') ?></td><td><input type="text" class="form-control" name="kode_kelas" id="kode_kelas" placeholder="Kode kelas" value="<?php echo $kode_kelas; ?>" /></td></tr>
                    <tr><td width='200'>KELAS <?php echo form_error('nip') ?></td><td>

                            <input type="text" class="form-control" name="kelas" id="kelas" placeholder="Nama kelas" value="<?php echo $kelas; ?>" /></td></tr>
                            
                         
                              <tr><td width='200'>Sub Kelas <?php echo form_error('alamat') ?></td><td>

                            <input type="text" class="form-control" name="sub_kelas" id="sub_kelas" placeholder="A/B/C/D/F/G" value="<?php echo $sub_kelas; ?>" /></td></tr>
  
  
 
                
                    
                    <tr><td></td><td><input type="hidden" name="id_kelas" value="<?php echo $id_kelas; ?>" /> 
                            <button type="submit" class="btn btn-danger"><i class="fa fa-floppy-o"></i> <?php echo $button ?></button> 
                            <a href="<?php echo site_url('kelas') ?>" class="btn btn-info"><i class="fa fa-sign-out"></i> Kembali</a></td></tr>
                </table></form>        </div>
</div>
</div>
       <!-- belicode.com -->