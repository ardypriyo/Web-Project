<?php
	$this->load->view('admin/include/header');
?>

	<!--breadcrumbs-->
    <div id="content-header">
        <div id="breadcrumb">
            <a href="<?php echo base_url().'home' ?>" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a>
            <a href="">Konfigurasi</a>
            <a href="">Daftar Absensi</a>
            <a href="">TEdit Master Absensi</a>
        </div>
    </div>
    <!--End-breadcrumbs-->

    <div class="container-fluid">
    	<div class="row-fluid">
    		<div class="span6">
    			<div class="widget-box">
    				<div class="widget-title">
    					<h5>Tambah Master Absensi</h5>
    				</div>

    				<div class="widget-content">
    					<form method="post" action="<?php echo base_url().'absensi/rubah_data' ?>" class="form-horizontal">
    						<div class="form-action">
                                <button type="submit" class="btn btn-success">
                                    <span class="icon"></span><i class="icon-save"></i> Simpan
                                </button>
                                <a href="<?php echo base_url().'absensi' ?>" class="btn btn-danger">
                                    <span class="icon"></span><i class="icon-arrow-left"></i> Kembali
                                </a>
                            </div>

                            <div class="control-group">
                            	<label class="control-label">Kode Absensi</label>
                            	<div class="controls">
                            		<input type="text" name="kode_absensi" class="span4" maxlength="5" required="" value="<?php echo $kode_absen ?>">
                                    <input type="hidden" name="id" value="<?php echo $id ?>">
                            		<span class="help-block">Kode terdiri dari 5 Digit Huruf dan Angka</span>
                            	</div>
                            </div>

                            <div class="control-group">
                            	<label class="control-label">Keterangan</label>
                            	<div class="controls">
                            		<input type="text" name="keterangan" class="span11" maxlength="100" value="<?php echo $keterangan ?>">
                            		<!--<span class="help-block">Keterangan untuk kode absen maksimal 100 digit</span>-->
                            	</div>
                            </div>
                            <div class="control-group">
                            	<label class="control-label">Tipe Absensi</label>
                            	<div class="controls">
                            		<select name="tipe" class="span11">
                            			<option value="0" <?php if($tipe == 0){ ?> selected="select" <?php } ?>>False - Hitung Alpha</option>
                            			<option value="1" <?php if($tipe == 1){ ?> selected="select" <?php } ?>>True - Hitung Hadir</option>
                            		</select>
                            	</div>
                            </div>

                            <div class="control-group">
                            	<label class="control-label">Status</label>
                            	<div class="controls">
                            		<select name="status" class="span11">
                            			<option value="0" <?php if($status == 0){ ?> selected="select" <?php } ?>>Tidak Aktif</option>
                            			<option value="1" <?php if($status == 1){ ?> selected="select" <?php } ?>>Aktif</option>
                            		</select>
                            	</div>
                            </div>
    					</form>
    				</div>
    			</div>
    		</div>
    	</div>
    </div>

<?php
	$this->load->view('admin/include/footer');
?>
	<script src="<?php echo base_url().'assets/admin/js/jquery.min.js' ?>"></script>
    <script src="<?php echo base_url().'assets/admin/js/jquery.ui.custom.js' ?>"></script>
    <script src="<?php echo base_url().'assets/admin/js/bootstrap.min.js' ?>"></script>
    <script src="<?php echo base_url().'assets/admin/js/bootstrap-colorpicker.js' ?>"></script> 
    <script src="<?php echo base_url().'assets/admin/js/bootstrap-datepicker.js' ?>"></script>
    <script src="<?php echo base_url().'assets/admin/js/jquery.toggle.buttons.js' ?>"></script>
    <script src="<?php echo base_url().'assets/admin/js/masked.js' ?>"></script>
    <script src="<?php echo base_url().'assets/admin/js/jquery.uniform.js' ?>"></script>
    <script src="<?php echo base_url().'assets/admin/js/select2.min.js' ?>"></script>
    <script src="<?php echo base_url().'assets/admin/js/matrix.js' ?>"></script>
    <script src="<?php echo base_url().'assets/admin/js/matrix.form_common.js' ?>"></script>
    <script src="<?php echo base_url().'assets/admin/js/wysihtml5-0.3.0.js' ?>"></script>
    <script src="<?php echo base_url().'assets/admin/js/jquery.peity.min.js' ?>"></script>
    <script src="<?php echo base_url().'assets/admin/js/bootstrap-wysihtml5.js' ?>"></script>
    <script type="text/javascript" src="<?php echo base_url().'assets/sweetalert-master/dist/sweetalert.min.js' ?>"></script>
    <script>
        $('.textarea_editor').wysihtml5();
    </script>
    <?php
      if($this->session->flashdata('pesan6'))
      {
        ?>
          <!--<script type="text/javascript">alert("<?php echo $this->session->flashdata('pesan3') ?>");</script>-->
          <script type="text/javascript">
            swal("<?php echo $this->session->flashdata('pesan6') ?>", {
              className: "red-bg",
            });
          </script>
        <?php
      }
    ?>