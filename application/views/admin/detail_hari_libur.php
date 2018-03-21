<?php
	$this->load->view('admin/include/header');
?>

	<!--breadcrumbs-->
    <div id="content-header">
        <div id="breadcrumb">
            <a href="<?php echo base_url().'home' ?>" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a>
            <a href="">Konfigurasi</a>
            <a href="">Hari Libur</a>
            <a href="">Tambah Hari Libur</a>
        </div>
    </div>
    <!--End-breadcrumbs-->

    <div class="container-fluid">
    	<div class="row-fluid">
            <div class="span7">
                <div class="widget-box">
                    <div class="widget-title">
                        <span class="icon"><i class="icon-chevron-down"></i></span>
                        <h5>Latest Posts</h5>
                    </div>
                    <div class="widget-content nopadding">
                        <form action="<?php echo base_url().'hari_libur/update'; ?>" method="post" class="form-horizontal">
                             <div class="form-actions">
                                <button type="submit" class="btn btn-success">
                                    <span class="icon"></span><i class="icon-save"></i> Simpan
                                </button>
                                <a href="<?php echo base_url().'hari_libur' ?>" class="btn btn-danger"> 
                                    <span class="icon"><i class="icon-arrow-left"></i> Back</span>
                                </a>
                            </div>

                            <div class="control-group">
                                <label class="control-label">Tahun</label>
                                <div class="controls">
                                   <input type="text" name="tahun" value="<?php echo $load_data['tahun']; ?>" readonly="">
                                   <input type="hidden" name="id_libur" value="<?php echo $load_data['id_libur']; ?>">
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label">Keterangan</label>
                                <div class="controls">
                                    <input type="text" name="keterangan" required="" class="span11" value="<?php echo $load_data['keterangan']; ?>">
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label">Jenis Hari Libur</label>
                                <div class="controls">
                                    <select name="jenis_libur" class="span11">
                                        <?php
                                            foreach($jenis_hari_libur as $row)
                                            {
                                                ?>
                                                    <option value="<?php echo $row['id_jenis_libur'] ?>" <?php if($load_data['jenis_libur'] == $row['id_jenis_libur']) { ?> selected="select" <?php } ?>><?php echo $row['nama_jenis_libur'] ?></option>
                                                <?php
                                            }
                                        ?>
                                    </select>
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label">Tanggal</label>
                                <div class="controls">
                                    <input type="text" name="tanggal" value="<?php echo $load_data['tanggal']; ?>" class="datepicker span6" data-date-format="yyyy-mm-dd">
                                    <span class="help-block">Format Tanggal Tahun-Bulan-Tanggal</span>
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
    <script>
        $('.textarea_editor').wysihtml5();
    </script>