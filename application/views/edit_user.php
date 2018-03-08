<?php
	$this->load->view('include/header');
?>

	<!--breadcrumbs-->
    <div id="content-header">
        <div id="breadcrumb">
        	<a href="<?php echo base_url().'home' ?>" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a>
        	<a href="<?php echo base_url().'user' ?>" title="Go to User List" class="tip-bottom">User List</a>
            <a href="">Add New User</a> 
        </div>
    </div>

    <!--End-breadcrumbs-->
        <div class="container-fluid">
            <div class="row-fluid">
                <div class="span6">
                    <div class="widget-box">
                        <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
                            <h5>Personal-info</h5>
                        </div>
                        <div class="widget-content nopadding">
                            <form action="<?php echo base_url().'user/update' ?>" method="post" class="form-horizontal">
                                <div class="control-group">
                                    <label class="control-label">Full Name</label>
                                    <div class="controls">
                                        <input type="text" name="nama" class="span11" placeholder="First name" required="" value="<?php echo $nama; ?>" />
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label">Password input</label>
                                    <div class="controls">
                                        <input type="password" readonly="" name="password" class="span11" placeholder="Enter Password" required="" value="<?php echo $password ?>"  />
                                        <input type="hidden" value="<?php echo $userid ?>" name="userid">
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label">Email Address</label>
                                    <div class="controls">
                                        <input type="email" readonly="" name="email" class="span11" placeholder="Email Address" required="" value="<?php echo $email ?>" />
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label">Status</label>
                                    <div class="controls">
                                        <select name="status">
                                            <option value="1" <?php if ($status == 1) { ?> selected = "select" <?php } ?>>Active</option>
                                            <option value="2" <?php if ($status == 2) { ?> selected = "select" <?php } ?>>Deactive</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label">Level</label>
                                    <div class="controls">
                                        <select name="level">
                                            <option value="0" <?php if ($level == 0) { ?> selected = "select" <?php } ?>>Super Administrator</option>
                                            <option value="1" <?php if ($level == 1) { ?> selected = "select" <?php } ?>>Administrator</option>
                                            <option value="2" <?php if ($level == 2) { ?> selected = "select" <?php } ?>>Moderator</option>
                                            <option value="3" <?php if ($level == 3) { ?> selected = "select" <?php } ?>>User</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-actions">
                                    <button type="submin" class="btn btn-success">
                                        <span class="icon"></span> <i class="icon-save"></i> Save
                                    </button>
                                    <a href="<?php echo base_url().'user/detail/'.$userid ?>" class="btn btn-danger"> <span class="icon"><i class="icon-arrow-left"></i> Back</span></a>
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