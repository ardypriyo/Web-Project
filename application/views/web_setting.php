<?php
	$this->load->view('include/header');
?>

	<!--breadcrumbs-->
    <div id="content-header">
        <div id="breadcrumb">
        	<a href="<?php echo base_url().'home' ?>" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a>
        	<a href="<?php echo base_url().'Web_setting' ?>" class="tip-bottom">Website Configuration</a>
        </div>
    </div>

    <!--End-breadcrumbs-->
        <div class="container-fluid">
            <div class="row-fluid">
                <div class="span12">
                    <div class="widget-box">
                        <div class="widget-title"> <span class="icon"> <i class="icon-cogs"></i> </span>
                            <h5>Global Website Configuration</h5>
                        </div>
                        <div class="widget-content nopadding">
                            <form action="<?php echo base_url().'web_setting/update' ?>" method="post" class="form-horizontal">
                                <div class="form-actions">
                                    <button type="submin" class="btn btn-success">
                                        <span class="icon"></span> <i class="icon-save"></i> Save
                                    </button>
                                    <a href="<?php echo base_url().'web_setting' ?>" class="btn btn-danger"> <span class="icon"><i class="icon-arrow-left"></i> Back</span></a>
                                </div>

                                <?php
                                    if($this->session->flashdata('pesan1'))
                                    {
                                        ?>
                                            <div class="container-fluid">
                                                <div class="row-fluid">
                                                    <div class="span6">
                                                        <div class="alert alert-block alert-success"> <a class="close" data-dismiss="alert" href="#">×</a>
                                                            <?php
                                                                echo $this->session->flashdata('pesan1');
                                                            ?>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        <?php
                                    }
                                    elseif($this->session->flashdata('pesan2'))
                                    {
                                        ?>
                                            <div class="container-fluid">
                                                <div class="row-fluid">
                                                    <div class="span6">
                                                        <div class="alert alert-block alert-error"> <a class="close" data-dismiss="alert" href="#">×</a>
                                                            <h4>Warning !</h4>
                                                            <?php
                                                                echo $this->session->flashdata('pesan2');
                                                            ?>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        <?php
                                    }
                                ?>

                                <div class="control-group">
                                    <label class="control-label">Nama</label>
                                    <div class="controls">
                                        <input type="text" name="nama" class="span6" placeholder="Nama Website" required="" value="<?php echo $nama; ?>" />
                                    </div>
                                </div>
                                
                                <div class="control-group">
                                    <label class="control-label">Status</label>
                                    <div class="controls">
                                        <select name="status" class="span2">
                                            <option value="1" <?php if($status == 1) { ?> selected="select" <?php } ?>>Active</option>
                                            <option value="0" <?php if($status == 1) { ?> selected="select" <?php } ?>>Deactive</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="control-group">
                                    <label class="control-label">Offline</label>
                                    <div class="controls">
                                        <textarea name="pesan" class="textarea_editor span8" rows="10" placeholder="Enter text ...">
                                            <?php 
                                                echo $pesan;
                                            ?>
                                        </textarea>
                                    </div>
                                </div>
                                
                                <div class="control-group">
                                    <label class="control-label">Default List Limit</label>
                                    <div class="controls">
                                        <select name="list" class="span1">
                                            <option value="5" <?php if($list == '5') { ?> selected="select" <?php } ?>>5</option>
                                            <option value="10" <?php if($list == '10') { ?> selected="select" <?php } ?>>10</option>
                                            <option value="15" <?php if($list == '15') { ?> selected="select" <?php } ?>>15</option>
                                            <option value="20" <?php if($list == '20') { ?> selected="select" <?php } ?>>20</option>
                                            <option value="25" <?php if($list == '25') { ?> selected="select" <?php } ?>>25</option>
                                            <option value="50" <?php if($list == '50') { ?> selected="select" <?php } ?>>50</option>
                                            <option value="100" <?php if($list == '100') { ?> selected="select" <?php } ?>>100</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="control-group">
                                    <label class="control-label">Default Feed Limit</label>
                                    <div class="controls">
                                        <select name="feed" class="span1">
                                            <option value="5" <?php if($feed == '5') { ?> selected="select" <?php } ?>>5</option>
                                            <option value="10" <?php if($feed == '10') { ?> selected="select" <?php } ?>>10</option>
                                            <option value="15" <?php if($feed == '15') { ?> selected="select" <?php } ?>>15</option>
                                            <option value="20" <?php if($feed == '20') { ?> selected="select" <?php } ?>>20</option>
                                            <option value="25" <?php if($feed == '25') { ?> selected="select" <?php } ?>>25</option>
                                            <option value="50" <?php if($feed == '50') { ?> selected="select" <?php } ?>>50</option>
                                            <option value="100" <?php if($feed == '100') { ?> selected="select" <?php } ?>>100</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="control-group">
                                    <label class="control-label">Email</label>
                                    <div class="controls">
                                        <input type="email" name="email" class="span6" placeholder="Alamat Email" required="" value="<?php echo $email; ?>" />
                                    </div>
                                </div>

                                <div class="control-group">
                                    <label class="control-label">Nama Email</label>
                                    <div class="controls">
                                        <input type="text" name="nama_email" class="span6" placeholder="Nama Anda" value="<?php echo $nama_email; ?>" />
                                    </div>
                                </div>

                                <div class="control-group">
                                    <label class="control-label">SMTP Host</label>
                                    <div class="controls">
                                        <input type="text" name="smtp_host" class="span6" placeholder="SMTP Host" value="<?php echo $smtp_host ?>" />
                                    </div>
                                </div>

                                <div class="control-group">
                                    <label class="control-label">SMTP Port</label>
                                    <div class="controls">
                                        <input type="text" name="smtp_port" class="span2" placeholder="SMTP Port" value="<?php echo $smtp_port ?>"/>
                                    </div>
                                </div>

                                <div class="control-group">
                                    <label class="control-label">SMTP User</label>
                                    <div class="controls">
                                        <input type="text" name="smtp_user" class="span6" placeholder="SMTP User" value="<?php echo $smtp_user ?>"/>
                                    </div>
                                </div>

                                <div class="control-group">
                                    <label class="control-label">SMTP Password</label>
                                    <div class="controls">
                                        <input type="password" name="smtp_password" class="span6" placeholder="SMTP Password" value="<?php echo $smtp_password ?>"/>
                                    </div>
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