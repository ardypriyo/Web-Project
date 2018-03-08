<?php
	$this->load->view('include/header');
?>

	<div id="content-header">
        <div id="breadcrumb">
        	<a href="<?php echo base_url().'home' ?>" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a>
        	<a href="">Content</a>
            <a href="<?php echo base_url().'kategori' ?>" >Kategori</a>
            <a href="<?php echo base_url().'kategori/detail/'.$id_kategori ?>">Detail Kategori</a> 
            <a href="">Edit Kategori</a> 
        </div>
    </div>

    <div class="container-fluid">
    	<div class="row-fluid">
    		<div class="span6">
    			<div class="widget-box">
    				<div class="widget-title"> <span class="icon"> <i class="icon-pencil"></i> </span>
                        <h5>Edit Kategori</h5>
                    </div>
                    <div class="widget-content nopadding">
                    	<form action="<?php echo base_url().'kategori/update'; ?>" method="post" class="form-horizontal">
                    		<div class="form-actions">
                                <button type="submit" class="btn btn-success">
                                    <span class="icon"></span><i class="icon-save"></i> Save
                                </button>
                                <a href="<?php echo base_url().'kategori/detail/'.$id_kategori ?>" class="btn btn-danger"> <span class="icon"><i class="icon-arrow-left"></i> Back</span></a>
                            </div>
                    		<div class="control-group">
                                <label class="control-label">Nama Kategori</label>
                                <div class="controls">
                                    <input type="text" name="nama_kategori" class="span11" required="" value="<?php echo $nama_kategori ?>";>
                                    <input type="hidden" name="id_kategori" value="<?php echo $id_kategori; ?>">
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label">Status</label>
                                <div class="controls">
                                    <select name="status" class="span4">
                                        <option value="1" <?php if($status=='1'){ ?> selected="select" <?php } ?>>Active</option>
                                        <option value="0" <?php if($status=='0'){ ?> selected="select" <?php } ?>>Deactive</option>
                                        <option value="1" <?php if($status=='2'){ ?> selected="select" <?php } ?>>Archieve</option>
                                    </select>
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label">Deskripsi</label>
                                <div class="controls">
                                    <textarea class="span11" name="deskirpsi" rows="5">
                                        <?php
                                            echo $deskripsi;
                                        ?>
                                    </textarea>
                                </div>
                            </div>
                    	</form>
                    </div>
    			</div>
    		</div>
    	</div>
    </div>

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