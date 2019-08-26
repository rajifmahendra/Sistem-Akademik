       <!-- belicode.com -->
<div class="content-wrapper">

    <section class="content">
        <div class="box box-warning box-solid">
            <div class="box-header with-border">
                <h3 class="box-title">INPUT DATA PELAJARAN</h3>
            </div>
            <form action="<?php echo $action; ?>" method="post" enctype="multipart/form-data">

                <table class='table table-bordered>'        

                       <tr><td width='200'>Kode  <?php echo form_error('nama_guru') ?></td><td><input type="text" class="form-control" name="kode_mapel" id="kode_mapel" placeholder="Kode pelajaran" value="<?php echo $kode_mapel; ?>" /></td></tr>
                    <tr><td width='200'>Nama Mapel <?php echo form_error('nip') ?></td><td>

                            <input type="text" class="form-control" name="mapel" id="mapel" placeholder="Nama Mapel" value="<?php echo $mapel; ?>" /></td></tr>
                            
                         
                             
 

                          
 
                
                    
                    <tr><td></td><td><input type="hidden" name="id_mapel" value="<?php echo $id_mapel; ?>" /> 
                            <button type="submit" class="btn btn-danger"><i class="fa fa-floppy-o"></i> <?php echo $button ?></button> 
                            <a href="<?php echo site_url('pelajaran') ?>" class="btn btn-info"><i class="fa fa-sign-out"></i> Kembali</a></td></tr>
                </table></form>        </div>
</div>
</div>
       <!-- belicode.com -->