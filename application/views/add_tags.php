<?php
	$this->load->view('include/header');
?>

	<!--breadcrumbs-->
    <div id="content-header">
        <div id="breadcrumb">
        	<a href="<?php echo base_url().'home' ?>" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a>
        	<a href="<?php echo base_url().'user' ?>" title="Go to User List" class="tip-bottom">Content</a>
            <a href="">Tambah Tags Baru</a> 
        </div>
    </div>
    <!--End-breadcrumbs-->
        <div class="container-fluid">
            <div class="row-fluid">
                <div class="span6">
                    <div class="widget-box">
                        <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
                            <h5>Tambah Tags Baru</h5>
                        </div>
                        <div class="widget-content nopadding">
                            <form action="<?php echo base_url().'tags/simpan'; ?>" method="post" class="form-horizontal">
                                <div class="control-group">
                                    <label class="control-label">tags</label>
                                    <div class="controls">
                                        <input type="text" name="tags" class="span11" required="" />
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label">Slug</label>
                                    <div class="controls">
                                        <input type="text" name="slug" class="span11" />
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label">Deskripsi</label>
                                    <div class="controls">
                                        <textarea rows="5" name="deskripsi" class="span11"></textarea>
                                    </div>
                                </div>
                               
                                
                                <div class="form-actions">
                                    <button type="submit" class="btn btn-success"> 
                                        <span class="icon"> <i class="icon-save"></i> Save</span>
                                    </button>
                                    <a href="<?php echo base_url().'tags' ?>" class="btn btn-danger"> <span class="icon"><i class="icon-arrow-left"></i> Back</span></a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
<?php
	$this->load->view('include/footer');
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