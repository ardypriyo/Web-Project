<?php
	$this->load->view('include/header');
?>

	<!--breadcrumbs-->
    <div id="content-header">
        <div id="breadcrumb">
        	<a href="<?php echo base_url().'home' ?>" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a>
        	<a href="">Content</a>
            <a href="">Daftar Tags</a>
        </div>
    </div>
    <!--End-breadcrumbs-->

    <div class="breadcrumb">
        <a href="<?php echo base_url().'tags/tambah' ?>" class="btn btn-success"><i class="icon icon-plus"></i> Add New</a>
        <a href="<?php echo base_url().'Admin' ?>" class="btn btn-danger"><i class="icon icon-arrow-left"></i> Back</a>
        <div class="pull-right">
            <div class="col-sm-4">
                <form method="post" action="" class="form-horizontal">
                    <input type="text" class="form-control" name="cari" placeholder="Search.....">
                </form>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <hr>
        <div class="row-fluid">
            <div class="span12">
                <div class="widget-box">
                    <div class="widget-title"> <span class="icon"> <i class="icon-user"></i> </span>
                        <h5>Daftar Tags</h5>
                    </div>
                    <div class="widget-content nopadding">
                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>Tags</th>
                                    <th>Deskripsi</th>
                                    <th>Slug</th>
                                    <th>Count</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    foreach ($data as $data)
                                    {
                                        ?>
                                            <tr>
                                                <td><?php echo $data->tags; ?></td>
                                                <td><?php echo $data->deskripsi; ?></td>
                                                <td><?php echo $data->slug; ?></td>
                                                <td class="text-right">
                                                    <?php
                                                        $cari_jumlah = $this->db->query("SELECT * FROM artikel_tags WHERE id_tags = '$data->id_tags' ") ->result_array();
                                                        $jumlah = count($cari_jumlah);
                                                        echo $jumlah;
                                                    ?>
                                                </td>
                                                <td align="center">
                                                    <a href="<?php echo base_url().'tags/detail/'.$data->id_tags; ?>" class="btn btn-mini btn-info">
                                                        <span class="icon"></span><i class="icon-eye-open"></i>
                                                    </a>
                                                    <a href="<?php echo base_url().'tags/edit/'.$data->id_tags; ?>" class="btn btn-mini btn-warning">
                                                        <span class="icon"></span><i class="icon-pencil"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                        <?php
                                    }
                                ?>
                            </tbody>
                        </table>
                    </div>
                    <div class="widget-title">
                        <?php 
                            echo $pages;
                        ?>
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
    <script type="text/javascript" src="<?php echo base_url().'assets/sweetalert-master/dist/sweetalert.min.js' ?>"></script>
    <script type="text/javascript">
        $('.AlertaEliminarCliente').on("click", function(e) {
              e.preventDefault();
              var url = $(this).attr('data-id');
              swal({
                  title: "Apakah Anda Yakin?",
                  text: "Data yang dihapus akan masuk kedalam folder sampah!",
                  type: "warning",
                  showCancelButton: true,
                  confirmButtonColor: '#DD6B55',
                  confirmButtonText: 'Hapus',
                  cancelButtonText: "Batal",
                  confirmButtonClass: "btn-danger",
                  closeOnConfirm: false,
                  closeOnCancel: false
                },
                function(isConfirm) {
                  if (isConfirm) {
                    //var username=$("#username").val();
                    $.ajax({
                        type:"POST",
                        url:"<?php echo base_url().'user/hapus/' ?>",
                        data:"userid="+url,
                        success:function(html){
                            swal({
                                title:"Sukses", 
                                text:"Data Berhasil Dihapus", 
                                type:"success"},
                                function()
                                {
                                    window.location = "<?php echo base_url().'user/' ?>";
                                });
                        }
                    });
                    
                    //window.location.replace(url);
                  } else {
                    swal("Batal", "Operasi dibatalkan :)", "error");
                  }
                });
            });
    </script>