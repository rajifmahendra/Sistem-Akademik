       <!-- belicode.com -->
<div class="content-wrapper">

    <section class="content">
        <div class="box box-warning box-solid">
            <div class="box-header with-border">
                <h3 class="box-title">INPUT DATA PENGMUMUMAN</h3>
            </div>
            <form action="<?php echo $action; ?>" method="post" enctype="multipart/form-data">

                <table class='table table-bordered>'        

                       <tr><td width='200'>Judul  <?php echo form_error('nama_guru') ?></td><td><input type="text" class="form-control" name="judul" id="judul" placeholder="Masukan judul" value="<?php echo $judul; ?>" /></td></tr>
                    <tr><td width='200'>Detail Pengumuman <?php echo form_error('nip') ?></td><td>

                            <input type="text" class="form-control" name="detail" id="detail" placeholder="detail" value="<?php echo $detail; ?>" />
                               <input type="hidden" class="form-control" name="tgl" id="tgl" placeholder="tgl" value="<?php 
$tgl  =date("d-m-Y");
                               echo $tgl; ?>" /></td></tr>
                            
                         
                             
  
 
                
                    
                    <tr><td></td><td><input type="hidden" name="id_p" value="<?php echo $id_p; ?>" /> 
                            <button type="submit" class="btn btn-danger"><i class="fa fa-floppy-o"></i> <?php echo $button ?></button> 
                            <a href="<?php echo site_url('pengmumuman') ?>" class="btn btn-info"><i class="fa fa-sign-out"></i> Kembali</a></td></tr>
                </table></form>        </div>
</div>
</div>
       <!-- belicode.com -->