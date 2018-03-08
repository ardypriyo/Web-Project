<?php
	$this->load->view('admin/include/header');
?>

	<!--breadcrumbs-->
    <div id="content-header">
        <div id="breadcrumb">
            <a href="<?php echo base_url().'home' ?>" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a>
            <a href="">Konfigurasi</a>
            <a href="">Daftar Kota</a>
        </div>
    </div>
    <!--End-breadcrumbs-->

    <div class="container-fluid">
        <div class="row-fluid">
            <div class="span12">
                <a href="<?php echo base_url().'kota/tambah_kota' ?>" class="btn btn-success"><span class="icon"></span><i class="icon-plus"></i> Tambah Baru</a>
                <a href="<?php echo base_url().'admin' ?>" class="btn btn-danger"><span class="icon"></span><i class="icon-arrow-left"></i> Kembali</a>
                <a href="<?php echo base_url().'kota/import_kota' ?>" class="btn btn-info"><span class="icon"></span><i class="icon-upload"></i> Import Data</a>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div id="exampleModal" class="modal hide">
        <div class="modal-header">
            <button data-dismiss="modal" class="close" type="button">×</button>
            <h3>Tambah Kota Baru</h3>
        </div>
        <div class="modal-body">
            <form action="<?php echo base_url().'kota/simpan'; ?>" method="post" class="form-horizontal">
                <div class="control-group">
                    <label>Nama Provinsi</label>
                    <div class="controls">
                        <select name="provinsi">
                            <?php
                                foreach($provinsi as $provinsi)
                                {
                                    ?>
                                        <option value="<?php echo $provinsi->id_provinsi ?>"><?php echo $provinsi->nama_provinsi ?></option>
                                    <?php
                                }
                            ?>
                        </select>
                    </div>
                </div>
            </form>
        </div>
        <div class="modal-footer"></div>
    </div>



    <?php
        if($this->session->flashdata('pesan_import'))
        {
            ?>
                <div class="container-fluid">
                    <div class="row-fluid">
                        <div class="span12">
                            <div class="container-fluid">
                                <div class="row-fluid">
                                    <div class="span6">
                                        <div class="alert alert-block alert-success"> <a class="close" data-dismiss="alert" href="#">×</a>
                                            <h4 class="alert-heading">Selamat!</h4>
                                            <?php
                                                echo $this->session->flashdata('pesan_import');
                                            ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php
        }
    ?>


    <div class="container-fluid">
    	<div class="row-fluid">
            <div class="span12">
                <div class="widget-box">
                    <div class="widget-title"> 
                        <span class="icon">
                            <input type="checkbox" id="title-checkbox" name="title-checkbox" />
                        </span>
                        <h5>Static table with checkboxes</h5>
                    </div>
                    <div class="widget-content nopadding">
                        <table class="table table-bordered table-striped with-check">
                            <thead>
                                <tr>
                                    <th><i class="icon-resize-vertical"></i></th>
                                    <th>Nama Kota</th>
                                    <th>Provinsi</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    foreach ($data as $data) 
                                    {
                                       ?>
                                            <tr>
                                                <td><input type="checkbox" name="pilih[]" value="<?php echo $data->id_kota ?>" /></td>
                                                <td><?php echo $data->nama_kota; ?></td>
                                                <td>
                                                    <?php
                                                        $provinsi = $this->db->query("SELECT * FROM hrd_master_provinsi WHERE id_provinsi = '$data->id_provinsi'")->result_array();
                                                        foreach($provinsi as $provinsi)
                                                        {
                                                            $nama_provinsi = $provinsi['nama_provinsi'];
                                                        }

                                                        echo $nama_provinsi;
                                                    ?>
                                                </td>
                                                <td>
                                                    <?php
                                                        if ($data->status == '0')
                                                        {
                                                            ?>
                                                                <label class="label">Tidak Aktif</label>
                                                            <?php
                                                        }
                                                        elseif($data->status =='1')
                                                        {
                                                            ?>
                                                                <label class="label label-success">Aktif</label>
                                                            <?php
                                                        }
                                                        elseif($data->status =='2')
                                                        {
                                                            ?>
                                                                <label class="label label-info">Archieve</label>
                                                            <?php
                                                        }
                                                    ?>
                                                </td>
                                                <td>&nbsp;</td>
                                            </tr>
                                       <?php
                                    }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
    	</div>
    </div>

<?php
	$this->load->view('admin/include/footer');
?>
	<script src="<?php echo base_url().'assets/admin/js/jquery.min.js' ?>"></script>
    <script src="<?php echo base_url().'assets/admin/js/jquery.min.js' ?>"></script> 
    <script src="<?php echo base_url().'assets/admin/js/jquery.ui.custom.js' ?>"></script> 
    <script src="<?php echo base_url().'assets/admin/js/bootstrap.min.js' ?>"></script> 
    <script src="<?php echo base_url().'assets/admin/js/jquery.uniform.js' ?>"></script> 
    <script src="<?php echo base_url().'assets/admin/js/select2.min.js' ?>"></script> 
    <script src="<?php echo base_url().'assets/admin/js/jquery.dataTables.min.js' ?>"></script> 
    <script src="<?php echo base_url().'assets/admin/js/matrix.js' ?>"></script> 
    <script src="<?php echo base_url().'assets/admin/js/matrix.tables.js' ?>"></script>