<?php
	$this->load->view('include/header');
?>
	
	<div id="content-header">
    	<div id="breadcrumb"> 
    		<a href="<?php echo base_url().'Home' ?>" title="Go to Home" class="tip-bottom">
    			<i class="icon-home"></i> Home</a> <a href="#" class="current">Error
    			</a> 
    	</div>
    	<h1>Error 404</h1>
  	</div>

  	<div class="container-fluid">
    	<div class="row-fluid">
      		<div class="span12">
        		<div class="widget-box">
          			<div class="widget-title"> <span class="icon"> <i class="icon-info-sign"></i> </span>
            			<h5>Error 404</h5>
          			</div>
          			<div class="widget-content">
            			<div class="error_ex">
              				<h1>404</h1>
              				<h3>Opps, You're lost.</h3>
              				<p>We can not find the page you're looking for.</p>
              				<a class="btn btn-warning btn-big"  href="<?php echo base_url().'Home' ?>">Back to Home</a> 
              			</div>
          			</div>
        		</div>
      		</div>
    	</div>
  	</div>

<?php
	$this->load->view('include/footer');
?>
  <script src="<?php echo base_url().'assets/admin/js/excanvas.min.js' ?>"></script> 
    <script src="<?php echo base_url().'assets/admin/js/jquery.min.js' ?>"></script> 
    <script src="<?php echo base_url().'assets/admin/js/jquery.ui.custom.js' ?>"></script> 
    <script src="<?php echo base_url().'assets/admin/js/bootstrap.min.js' ?>"></script> 
    <script src="<?php echo base_url().'assets/admin/js/jquery.flot.min.js' ?>"></script> 
    <script src="<?php echo base_url().'assets/admin/js/jquery.flot.resize.min.js' ?>"></script> 
    <script src="<?php echo base_url().'assets/admin/js/jquery.peity.min.js' ?>"></script> 
    <script src="<?php echo base_url().'assets/admin/js/fullcalendar.min.js' ?>"></script> 
    <script src="<?php echo base_url().'assets/admin/js/matrix.js' ?>"></script> 
    <script src="<?php echo base_url().'assets/admin/js/matrix.dashboard.js' ?>"></script> 
    <script src="<?php echo base_url().'assets/admin/js/jquery.gritter.min.js' ?>"></script> 
    <script src="<?php echo base_url().'assets/admin/js/matrix.interface.js' ?>"></script> 
    <script src="<?php echo base_url().'assets/admin/js/matrix.chat.js' ?>"></script> 
    <script src="<?php echo base_url().'assets/admin/js/jquery.validate.js' ?>"></script> 
    <script src="<?php echo base_url().'assets/admin/js/matrix.form_validation.js' ?>"></script> 
    <script src="<?php echo base_url().'assets/admin/js/jquery.wizard.js' ?>"></script> 
    <script src="<?php echo base_url().'assets/admin/js/jquery.uniform.js' ?>"></script> 
    <script src="<?php echo base_url().'assets/admin/js/select2.min.js' ?>"></script> 
    <script src="<?php echo base_url().'assets/admin/js/matrix.popover.js' ?>"></script> 
    <script src="<?php echo base_url().'assets/admin/js/jquery.dataTables.min.js' ?>"></script> 
    <script src="<?php echo base_url().'assets/admin/js/matrix.tables.js' ?>"></script>
    <script src="<?php echo base_url().'assets/admin/js/matrix.tables.js' ?>"></script>
    <script type="text/javascript">
        // This function is called from the pop-up menus to transfer to
        // a different page. Ignore if the value returned is a null string:
        function goPage (newURL) {
            // if url is empty, skip the menu dividers and reset the menu selection to default
            if (newURL != "") {    
                // if url is "-", it is this page -- reset the menu:
                if (newURL == "-" ) {
                    resetMenu();            
                } 
                // else, send page to designated URL            
                else {  
                    document.location.href = newURL;
                }
            }
        }

        // resets the menu selection upon entry to this page:
        function resetMenu() {
            document.gomenu.selector.selectedIndex = 2;
        }
    </script>