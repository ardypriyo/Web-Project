<?php
	$this->load->view('admin/include/header');
?>
	<!--breadcrumbs-->
    <div id="content-header">
        <div id="breadcrumb">
            <a href="<?php echo base_url().'home' ?>" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a>
            <a href="">Konfigurasi</a>
            <a href="">Shift</a>
            <a href="">Tambah Shift</a>
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
                        <form action="<?php echo base_url().'shift/simpan'; ?>" method="post" class="form-horizontal">
                             <div class="form-actions">
                                <button type="submit" class="btn btn-success">
                                    <span class="icon"></span><i class="icon-save"></i> Simpan
                                </button>
                                <a href="<?php echo base_url().'shift' ?>" class="btn btn-danger"> 
                                    <span class="icon"><i class="icon-arrow-left"></i> Back</span>
                                </a>
                            </div>

                            <div class="control-group">
                                <label class="control-label">Kode Shift</label>
                                <div class="controls">
                                   <input type="text" name="kode_shift" class="span4" maxlength="10" required="">
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label">Keterangan</label>
                                <div class="controls">
                                    <input type="text" name="keterangan" required="" class="span11">
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label">Jam Mulai</label>
                                <div class="controls">
                                    <input type="text" name="jam_mulai" class="span4 timepicker">
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label">Jam Selesai</label>
                                <div class="controls">
                                    <input type="text" name="jam_selesai" class="span4 timepicker">
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label">Status</label>
                                <div class="controls">
                                    <select class="span4" name="status">
                                        <option value="0">Tidak Aktif</option>
                                        <option value="1">Aktif</option>
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
    <script src="<?php echo base_url().'assets/jquery-ui-timepicker/jquery.ui.timepicker.js' ?>"></script>
     <script type="text/javascript" src="<?php echo base_url().'assets/sweetalert-master/dist/sweetalert.min.js' ?>"></script>
    <script>
        $('.timepicker').timepicker({
            showPeriodLabels: false,
        });
    </script>

    <?php
      if($this->session->flashdata('pesan1'))
      {
        ?>
          <!--<script type="text/javascript">alert("<?php echo $this->session->flashdata('pesan3') ?>");</script>-->
          <script type="text/javascript">
            swal("<?php echo $this->session->flashdata('pesan1') ?>", {
              className: "red-bg",
            });
          </script>
        <?php
      }
      elseif($this->session->flashdata('pesan2'))
      {
        ?>
          <script type="text/javascript">
            swal("<?php echo $this->session->flashdata('pesan2') ?>", {
              className: "red-bg",
            });
          </script>
        <?php
      }
      elseif($this->session->flashdata('pesan3'))
      {
        ?>
          <script type="text/javascript">
            swal("<?php echo $this->session->flashdata('pesan3') ?>", {
              className: "red-bg",
            });
          </script>
        <?php
      }
      elseif($this->session->flashdata('pesan4'))
      {
        ?>
          <script type="text/javascript">
            swal("<?php echo $this->session->flashdata('pesan4') ?>", {
              className: "red-bg",
            });
          </script>
        <?php
      }
    ?>