<?php
	$this->load->view('admin/include/header');
?>

	<!--breadcrumbs-->
    <div id="content-header">
        <div id="breadcrumb">
            <a href="<?php echo base_url().'home' ?>" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a>
            <a href="">Konfigurasi</a>
            <a href="">Konfigurasi Email</a>
            <a href="">Edit Konfigurasi Email</a>
        </div>
    </div>
    <!--End-breadcrumbs-->

    <div class="container-fluid">
    	<div class="row-fluid">
            <div class="span6">
                <div class="widget-box">
                    <div class="widget-title">
                        <span class="icon"><i class="icon-chevron-down"></i></span>
                        <h5>Latest Posts</h5>
                    </div>
                    <div class="widget-content nopadding">
                        <form action="<?php echo base_url().'admin/simpan_email_config'; ?>" method="post" class="form-horizontal">
                            <div class="control-group">
                                <label class="control-label">Nama Pengirim</label>
                                <div class="controls">
                                    <input type="text" name="nama" class="span11" placeholder="Nama Pengirim" required="" value="<?php echo $pengirim ?>" />
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label">SMTP Host</label>
                                <div class="controls">
                                    <input type="text" name="smtp_host" class="span11" placeholder="SMTP Host" required="" value="<?php echo $host ?>" />
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label">SMTP User</label>
                                <div class="controls">
                                    <input type="text" name="smtp_user" class="span11" placeholder="SMTP user" required="" value="<?php echo $usr ?>" />
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label">SMTP Password</label>
                                <div class="controls">
                                    <input type="password" name="smtp_password" class="span11" placeholder="SMTP Password" required="" value="<?php echo $pass ?>" />
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label">SMTP Port</label>
                                <div class="controls">
                                    <input type="text" name="smtp_port" class="span3" placeholder="Port" required="" value="<?php echo $port ?>" />
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label">Kemanan</label>
                                <div class="controls">
                                    <select name="keamanan" class="span4">
                                        <option value="" <?php if($keamanan == '') { ?> selected="select" <?php } ?>>None</option>
                                        <option value="ssl" <?php if($keamanan == 'ssl') { ?> selected="select" <?php } ?>>SSL</option>
                                        <option value="tls" <?php if($keamanan == 'tls') { ?> selected="select" <?php } ?>>TLS</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-actions">
                                <button type="submit" class="btn btn-success">
                                    <span class="icon"></span><i class="icon-save"></i> Simpan
                                </button>
                                <a href="<?php echo base_url().'admin' ?>" class="btn btn-danger"> <span class="icon"><i class="icon-arrow-left"></i> Kembali</span></a>
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
    <script>
        $('.textarea_editor').wysihtml5();
    </script>