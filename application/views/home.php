<?php
    $this->load->view('include/header');
?>
    <!--breadcrumbs-->
    <div id="content-header">
        <div id="breadcrumb"> <a href="<?php echo base_url().'home' ?>" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a></div>
    </div>
    <!--End-breadcrumbs-->

    <div class="container-fluid">
        <div class="row-fluid">
            <div class="span6">
                <div class="widget-box">
                    <div class="widget-title bg_ly" data-toggle="collapse" href="#collapseG2">
                        <span class="icon"><i class="icon-chevron-down"></i></span>
                        <h5>Latest Posts</h5>
                    </div>
                    <div class="widget-content nopadding collapse in" id="collapseG2">
                        <ul class="recent-posts">
                            <li>
                                <div class="user-thumb"> <img width="40" height="40" alt="User" src="img/demo/av1.jpg"> </div>
                                <div class="article-post"> <span class="user-info"> By: john Deo / Date: 2 Aug 2012 / Time:09:27 AM </span>
                                    <p>
                                        <a href="#">
                                            This is a much longer one that will go on for a few lines.It has multiple paragraphs and is full of waffle to pad out the comment.
                                        </a>
                                    </p>
                                </div>
                            </li>
                            <li>
                                <div class="user-thumb"> <img width="40" height="40" alt="User" src="img/demo/av2.jpg"> </div>
                                <div class="article-post"> <span class="user-info"> By: john Deo / Date: 2 Aug 2012 / Time:09:27 AM </span>
                                    <p>
                                        <a href="#">
                                            This is a much longer one that will go on for a few lines.It has multiple paragraphs and is full of waffle to pad out the comment.
                                        </a> 
                                    </p>
                                </div>
                            </li>
                            <li>
                                <div class="user-thumb"> <img width="40" height="40" alt="User" src="img/demo/av4.jpg"> </div>
                                <div class="article-post"> <span class="user-info"> By: john Deo / Date: 2 Aug 2012 / Time:09:27 AM </span>
                                    <p>
                                        <a href="#">
                                            This is a much longer one that will go on for a few lines.Itaffle to pad out the comment.
                                        </a>
                                    </p>
                                </div>
                            <li>
                                <button class="btn btn-warning btn-mini">View All</button>
                            </li>
                        </ul>
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