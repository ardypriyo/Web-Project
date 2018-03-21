<?php
	$this->load->view('admin/include/header');
?>
	
	 <div id="content-header">
        <div id="breadcrumb">
            <a href="<?php echo base_url().'home' ?>" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a>
            <a href="">Konfigurasi</a>
            <a href="">Hari Libur</a>
        </div>
    </div>

    <div class="container-fluid">
    	<div class="row-fluid">
    		<div class="span12">
    			<a href="<?php echo base_url().'hari_libur/tambah' ?>" class="btn btn-success">
    				<span class="icon"><i class="icon-plus"></i> Tambah Baru</span>
    			</a>
    			<a href="<?php echo base_url().'admin' ?>" class="btn btn-danger">
    				<span class="icon"></span><i class="icon-arrow-left"> Kembali</i>
    			</a>
    		</div>
    	</div>
    </div>

    <div class="container-fluid">
    	<div class="row-fluid">
    		<div class="span12">
    			<div class="widget-box">
    				<div class="widget-title">
    					<span class="icon"><i class="icon-chevron-down"></i></span>
                        <h5>Daftar Hari Libur</h5>
    				</div>
    				<div class="widget-content">
    					<table id="DataTable" class="table table-bordered data-table">
    						<thead>
                				<tr>
                  					<th>Tahun</th>
                  					<th>Tanggal</th>
                  					<th>Keterangan</th>
                  					<th>Jenis Libur</th>
                  					<th>Action</th>
                				</tr>
              				</thead>
              				<tbody>
              					<?php
              						foreach($libur as $row)
              						{
              							?>
              								<tr>
              									<td><?php echo $row['tahun']; ?></td>
              									<td><?php echo date("D, d/M/Y", strtotime($row['tanggal'])) ?></td>
              									<td><?php echo $row['keterangan']; ?></td>
              									<td><?php echo $row['nama_jenis_libur']; ?></td>
              									<td>
                                    <a href="<?php echo base_url().'hari_libur/edit/'.$row['id_libur'] ?>" class="btn btn-mini btn-warning">
                                      <span class="icon"></span><i class="icon-pencil"></i>
                                    </a>

                                    <a href="" class="btn btn-mini btn-danger AlertaEliminarCliente" data-id="<?php echo $row['id_libur'] ?>">
                                      <span class="icon"></span><i class="icon-remove"></i>
                                    </a>
                                </td>
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
                          url:"<?php echo base_url().'hari_libur/hapus' ?>",
                          data:"id_libur="+url,
                          success:function(html){
                              swal({
                                title:"Sukses", 
                                text:"Data Berhasil Dihapus", 
                                type:"success"},
                                function()
                                {
                                  window.location = "<?php echo base_url().'hari_libur' ?>";
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
    <?php
      if($this->session->flashdata('pesan3'))
      {
        ?>
          <!--<script type="text/javascript">alert("<?php echo $this->session->flashdata('pesan3') ?>");</script>-->
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
      elseif($this->session->flashdata('pesan5'))
      {
        ?>
          <script type="text/javascript">
            swal("<?php echo $this->session->flashdata('pesan5') ?>", {
              className: "red-bg",
            });
          </script>
        <?php
      }
    ?>