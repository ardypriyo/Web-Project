<?php
	$this->load->view('include/header');
?>

	<div id="content-header">
        <div id="breadcrumb">
        	<a href="<?php echo base_url().'home' ?>" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a>
        	<a href="<?php echo base_url().'artikel' ?>" title="Go to User List" class="tip-bottom">Daftar Post</a>
            <a href="">Tambah Artikel Baru</a> 
        </div>
    </div>

    <div class="container-fluid">
    	<div class="row-fluid">
    		<div class="span12">
    			<div class="widget-box">
    				<div class="widget-title"> <span class="icon"> <i class="icon-pencil"></i> </span>
                        <h5>Tambah Artikel Baru</h5>
                    </div>
                    <div class="widget-content nopadding">
                    	<form action="<?php echo base_url().'artikel/simpan'; ?>" method="post" class="form-horizontal">
                    		<div class="form-actions">
                                <button type="submin" class="btn btn-success">
                            	    <span class="icon"></span> <i class="icon-save"></i> Save
                                </button>
                                <a href="<?php echo base_url().'artikel' ?>" class="btn btn-danger"> <span class="icon"><i class="icon-arrow-left"></i> Back</span></a>
                            </div>
                    		<div class="control-group">
                                <label class="control-label">Judul Artikel</label>
                                <div class="controls">
                                    <input type="text" name="judul" class="span11" placeholder="Judul Artikel" required="" maxlength="100" />
                                </div>
                            </div>
                            <div class="control-group">
                            	<label class="control-label">Isi Artikel</label>
                                <div class="controls">
                                    <div class="span11">
                                        <textarea name="isi_artikel" id="edit" rows="15" cols="10"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="control-group">
                            	<label class="control-label">Kategori</label>
                            	<div class="controls">
                            		<select name="kategori" class="span4">
                                        <option value="0">None</option>
                            			<?php
                                            foreach($kategori as $data)
                                            {
                                                ?>
                                                    <option value="<?php echo $data['id_kategori'] ?>"><?php echo $data['nama_kategori'] ?></option>
                                                <?php
                                            }
                                        ?>
                            		</select>
                            	</div>
                            </div>
                            <div class="control-group">
                            	<label class="control-label">Status</label>
                            	<div class="controls">
                            		<select name="status" class="span2">
                            			<option value="1">Publish</option>
                            			<option value="0">Unpublish</option>
                            			<option value="2" selected="">Draft</option>
                            		</select>
                            	</div>
                            </div>
                            <div class="control-group">
                            	<label class="control-label">Tags</label>
                            	<div class="controls">
                					<select name="tags[]" multiple="">
                  						<option>First option</option>
                  						<option selected>Second option</option>
                  						<option>Third option</option>
                  						<option>Fourth option</option>
                  						<option>Fifth option</option>
                  						<option>Sixth option</option>
                  						<option>Seventh option</option>
                  						<option>Eighth option</option>
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
    <script src="https://cloud.tinymce.com/stable/tinymce.min.js?apiKey=jugzyh4hsuq94m9oizeyu4y4noqk8wkuw0jzk5wsenkg5q30"></script>

    <script>
      tinymce.init({
        selector: '#edit',
        plugins: [
                        "advlist autolink autosave link image lists charmap print preview hr anchor pagebreak spellchecker",
                        "searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking",
                        "table contextmenu directionality emoticons template textcolor paste fullpage textcolor"
                ],
 
                toolbar1: "undo redo | bold italic underline strikethrough | alignleft aligncenter alignright alignjustify | outdent indent blockquote | bullist numlist",
                toolbar2: "forecolor backcolor | styleselect formatselect fontselect fontsizeselect | spellchecker",
                toolbar3: "cut copy paste | table | link unlink anchor image media code charmap emoticons | inserttime preview searchreplace",
                toolbar4: " |  hr removeformat | subscript superscript | print fullscreen | nonbreaking template pagebreak restoredraft",
 
                
 
                style_formats: [
                        {title: 'Bold text', inline: 'b'},
                        {title: 'Red text', inline: 'span', styles: {color: '#ff0000'}},
                        {title: 'Red header', block: 'h1', styles: {color: '#ff0000'}},
                        {title: 'Example 1', inline: 'span', classes: 'example1'},
                        {title: 'Example 2', inline: 'span', classes: 'example2'},
                        {title: 'Table styles'},
                        {title: 'Table row 1', selector: 'tr', classes: 'tablerow1'}
                ],
                
                templates: [
                        {title: 'Test template 1', content: 'Test 1'},
                        {title: 'Test template 2', content: 'Test 2'}
                ]
      });
    </script>