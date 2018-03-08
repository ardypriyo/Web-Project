<?php
	$this->load->view('include/header');
?>
	
	<div id="content-header">
    	<div id="breadcrumb"> 
    		<a href="<?php echo base_url().'home' ?>"> <span class="icon"></span> <i class="icon-home"></i> Home</a>
            <a href="">Content</a>
            <a href="">Kategori</a>
    	</div>
  	</div>

    <div class="container-fluid">
        <div class="row-fluid">
            <div class="span6">
                <div class="widget-box">
                    <div class="widget-title"> <span class="icon"> <i class="icon-user"></i> </span>
                        <h5>Tambah Kategori baru</h5>
                    </div>
                    <div class="widget-content nopadding">
                        <form method="post" action="<?php echo base_url().'kategori/simpan' ?>" class="form-horizontal">
                            <div class="form-actions">
                                <button type="submit" class="btn btn-success">
                                    <span class="icon"></span><i class="icon-save"></i> Save
                                </button>
                                <a href="<?php echo base_url().'home' ?>" class="btn btn-danger"> <span class="icon"><i class="icon-arrow-left"></i> Back</span></a>
                            </div>
                            <div class="control-group">
                                <label class="control-label">Nama Kategori</label>
                                <div class="controls">
                                    <input type="text" name="nama_kategori" class="span11" required="">
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label">Status</label>
                                <div class="controls">
                                    <select name="status" class="span4">
                                        <option value="1">Active</option>
                                        <option value="0">Deactive</option>
                                        <option value="2">Archieve</option>
                                    </select>
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label">Deskripsi</label>
                                <div class="controls">
                                    <textarea class="span11" name="deskirpsi" rows="5"></textarea>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <div class="span6">
                <div class="widget-box">
                    <div class="widget-title"> <span class="icon"> <i class="icon-user"></i> </span>
                        <h5>Daftar Kategori</h5>
                    </div>
                    <div class="widget-content nopadding">
                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>Nama Kategori</th>
                                    <th>Status</th>
                                    <th>Deskripsi</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    foreach($data as $data)
                                    {
                                        ?>
                                            <tr>
                                                <td><?php echo $data->nama_kategori; ?></td>
                                                <td>
                                                    <?php 
                                                        if($data->status == 1)
                                                        {
                                                            ?>
                                                                <span class="label label-success">Active</span>
                                                            <?php
                                                        }
                                                        elseif($data->status == 0)
                                                        {
                                                            ?>
                                                                <span class="label label-important">Deactive</span>
                                                            <?php
                                                        }
                                                        elseif($data->status == 2)
                                                        {
                                                            ?>
                                                                <span class="label label-default" disabled>Archieve</span>
                                                            <?php   
                                                        }
                                                    ?>
                                                </td>
                                                <td>
                                                    <?php 
                                                        $num_char = 20;
                                                        $text = $data->deskripsi;
                                                        if ($text == "")
                                                        {
                                                            echo "----";
                                                        }
                                                        else
                                                        {
                                                            echo substr($text, 0, $num_char);
                                                        }
                                                    ?>
                                                </td>
                                                <td>
                                                    <?php
                                                        if($this->session->userdata('level') == '0' OR $this->session->userdata('level' == '1'))
                                                        {
                                                            ?>
                                                                <a href="<?php echo base_url().'kategori/detail/'.$data->id_kategori; ?>" class="btn btn-mini btn-info"><span class="icon"></span><i class="icon-eye-open"></i></a>
                                                                <a href="<?php echo base_url().'kategori/edit/'.$data->id_kategori; ?>" class="btn btn-mini btn-warning"><span class="icon"></span><i class="icon-pencil"></i></a>
                                                                <a href="<?php echo base_url().'kategori/hapus/'.$data->id_kategori; ?>" class="btn btn-mini btn-danger"><span class="icon"></span><i class="icon-trash"></i></a>
                                                            <?php
                                                        }
                                                        elseif($this->session->userdata('level') == '2')
                                                        {
                                                            ?>
                                                                <a href="<?php echo base_url().'kategori/detail/'.$data->id_kategori; ?>" class="btn btn-mini btn-info"><span class="icon"></span><i class="icon-eye-open"></i></a>
                                                                <a href="<?php echo base_url().'kategori/edit/'.$data->id_kategori; ?>" class="btn btn-mini btn-warning"><span class="icon"></span><i class="icon-pencil"></i></a>
                                                            <?php
                                                        }
                                                        else
                                                        {
                                                            ?>
                                                                <a href="<?php echo base_url().'kategori/detail/'.$data->id_kategori; ?>" class="btn btn-mini btn-info"><span class="icon"></span><i class="icon-eye-open"></i></a>
                                                            <?php
                                                        }
                                                    ?>
                                                </td>
                                            </tr>
                                        <?php
                                    }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
                <hr>
                <?php
                    echo $pages;
                ?>
                <hr>
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