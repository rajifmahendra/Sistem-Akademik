       <!-- belicode.com -->
<div class="content-wrapper">

    <section class="content">
        <div class="box box-warning box-solid">
            <div class="box-header with-border">
                <h3 class="box-title">INPUT DATA JADWAL UJIAN</h3>
            </div>
            <form action="<?php echo $action; ?>" method="post" enctype="multipart/form-data">

                <table class='table table-bordered>'        

                       <tr><td width='200'>Kode  Kelas<?php echo form_error('nama_guru') ?></td><td>
                       	  <?php echo cmb_dinamis('kode_kelas', 'tbl_kelas', 'kode_kelas', 'kode_kelas', $kode_kelas,'DESC') ?>
                       </td></tr>
                    <tr><td width='200'>Nama Mapel <?php echo form_error('nip') ?></td><td>

                           <?php echo cmb_dinamis('kode_mapel', 'tbl_mapel', 'mapel', 'kode_mapel', $kode_mapel,'DESC') ?>
                          </td></tr>
                            
                         
                              <tr><td width='200'>Jam Mulai <?php echo form_error('alamat') ?></td><td>

                            <input type="text" class="form-control" name="jam_mulai" id="jam_mulai" placeholder="07:00" value="<?php echo $jam_mulai; ?>" /></td></tr>
  
  <tr><td width='200'>Jam Selesai<?php echo form_error('no_telp') ?></td><td>

                            <input type="text" class="form-control" name="jam_selesai" id="jam_selesai" placeholder="09:00" value="<?php echo $jam_selesai; ?>" /></td></tr>
  <tr><td width='200'>Tanggal<?php echo form_error('no_telp') ?></td><td>

                            <input type="text" class="form-control" name="tgl_ujian" id="tgl_ujian" placeholder="2019-12-1" value="<?php echo $tgl_ujian; ?>" /></td></tr>
 <tr><td width='200'>Hari<?php echo form_error('no_telp') ?></td><td>

                            <input type="text" class="form-control" name="hari" id="hari" placeholder="Huruf depan wajib Besar (Senin)" value="<?php echo $hari; ?>" /></td></tr>
                          
  <tr><td width='200'>Keterangan<?php echo form_error('no_telp') ?></td><td>

                            <input type="text" class="form-control" name="ket" id="ket" placeholder="Ujian sekolah" value="<?php echo $ket; ?>" /></td></tr>

                          
 
                
                    
                    <tr><td></td><td><input type="hidden" name="id_ujian" value="<?php echo $id_ujian; ?>" /> 
                            <button type="submit" class="btn btn-danger"><i class="fa fa-floppy-o"></i> <?php echo $button ?></button> 
                            <a href="<?php echo site_url('ujian') ?>" class="btn btn-info"><i class="fa fa-sign-out"></i> Kembali</a></td></tr>
                </table></form>        </div>
</div>
</div>
       <!-- belicode.com -->