<?php
	$this->load->view('admin/include/header');
?>
	<!--breadcrumbs-->
    <div id="content-header">
        <div id="breadcrumb">
            <a href="<?php echo base_url().'home' ?>" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a>
            <a href="">Konfigurasi</a>
            <a href="">Konfigurasi Global</a>
        </div>
    </div>
    <!--End-breadcrumbs-->

    <div class="container-fluid">
    	<div class="row-fluid">
    		<div class="span8">
    			<div class="widget-box">
    				<div class="widget-title">
                        <span class="icon"><i class="icon-cogs"></i></span>
                        <h5>Konfigurasi Global</h5>
                    </div>
                    <div class="widget-content nopadding">
                    	<form method="post" action="<?php echo base_url().'konfigurasi/simpan' ?>" class="form-horizontal">
                    		<div class="form-actions">
                                <button class="btn btn-success">
                                	<span class="icon"></span><i class="icon-save"></i> Simpan
                                </button>
                                <a href="<?php echo base_url().'admin' ?>" class="btn btn-danger"> <span class="icon"><i class="icon-arrow-left"></i> Kembali</span></a>
                            </div>
                            <div class="control-group">
                            	<label class="control-label">Periode Bulan</label>
                            	<div class="controls">
                            		<select name="bulan" class="span6">
                            			<option value="01">Januari</option>
                            			<option value="02">Februari</option>
                            			<option value="03">Maret</option>
                            			<option value="04">April</option>
                            			<option value="05">Mei</option>
                            			<option value="06">Juni</option>
                            			<option value="07">Juli</option>
                            			<option value="08">Agustus</option>
                            			<option value="09">September</option>
                            			<option value="10">Oktober</option>
                            			<option value="11">Nopember</option>
                            			<option value="12">Desember</option>
                            		</select>
                            	</div>
                            </div>
                            <div class="control-group">
                            	<label class="control-label">Periode Tahun</label>
                            	<div class="controls">
                            		<select name="tahun" class="span4">
                            			<?php
                            				$tahun = date("Y");
                            				for ($x = $tahun; $x >= 2015; $x--)
                            				{
                            					?>
                            						<option><?php echo $x ?></option>
                            					<?php
                            				}
                            			?>
                            		</select>
                            	</div>
                            </div>
                            <div class="control-group">
                                <label class="control-label">Jam Masuk</label>
                                <div class="controls">
                                    <input type="time" class="timepicker span3" name="jam_masuk"/>
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label">Toleransi Jam Masuk</label>
                                <div class="controls">
                                    <input type="time" name="toleransi" class="span3">
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label">Jam Pulang</label>
                                <div class="controls">
                                    <input type="time" name="jam_keluar" class="span3">
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label">Jam Mulai Lembur</label>
                                <div class="controls">
                                    <input type="time" name="jam_mulai_lembur" class="span3">
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label">Perhitungan Lembur</label>
                                <div class="controls">
                                    <select name="hitung_lembur" class="span6">
                                        <option>Flat Per Jam</option>
                                        <option>Fleksibel</option>
                                        <option>Tidak Ada Lembur</option>
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
    <script src="<?php echo base_url().'assets/timepicker/jquery.timepicker.min.js' ?>"></script>
    <script>
        $(document).ready(function(){
            $('input.timepicker').timepicker({ timeFormat: 'HH:mm' });
        });
    </script>