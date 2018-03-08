<?php
	$this->load->view('admin/include/header');
?>

	<!--breadcrumbs-->
    <div id="content-header">
        <div id="breadcrumb">
            <a href="<?php echo base_url().'home' ?>" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a>
            <a href="">Konfigurasi</a>
            <a href="">Daftar Kota</a>
            <a href="">Import Data Kota</a>
        </div>
    </div>
    <!--End-breadcrumbs-->
    
    <div class="container-fluid">
        <div class="row-fluid">
            <div class="span12">
                <a href="<?php echo base_url().'kota' ?>" class="btn btn-danger"><span class="icon"></span><i class="icon-arrow-left"></i> Kembali</a>
            </div>
        </div>
    </div>

    <div class="container-fluid">
    	<div class="row-fluid">
            <div class="span6">
                <div class="widget-box">
                    <div class="widget-title">
                        <span class="icon"><i class="icon-chevron-down"></i></span>
                        <h5>Latest Posts</h5>
                    </div>
                    <div class="widget-content nopadding">
                        <form action="<?php echo base_url().'kota/upload_kota'; ?>" method="post" class="form-horizontal" enctype="multipart/form-data">
                            <div class="control-group">
                                <label class="control-label">Cari Data</label>
                                <div class="controls">
                                    <input type="file" name="file">
                                </div>
                            </div>
                            <div class="form-actions">
                                <button type="submit" class="btn btn-success">
                                    <span class="icon"></span><i class="icon-upload"></i> Import
                                </button>
                                <button type="reset" class="btn btn-info">
                                    <span class="icon"></span><i class="icon-undo"></i> Reset
                                </button>
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