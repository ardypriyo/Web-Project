<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Administrator System Login</title>
	<link rel="stylesheet" href="<?php echo base_url().'assets/admin/css/bootstrap.min.css' ?>" />
	<link rel="stylesheet" href="<?php echo base_url().'assets/admin/css/bootstrap-responsive.min.css' ?>" />
    <link rel="stylesheet" href="<?php echo base_url().'assets/admin/css/matrix-login.css' ?>" />
    <link href="<?php echo base_url().'assets/admin/font-awesome/css/font-awesome.css" rel="stylesheet' ?>" />
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800' rel='stylesheet' type='text/css'>
</head>
<body style="background-color: #FFF;">
	<div id="loginbox">            
        <form id="loginform" class="form-vertical" method="post" action="<?php echo base_url().'login/cek_login' ?>">
			<div class="control-group normal_text"> 
				<?php $this->session->flashdata('result_login'); ?>
				<h3>
					<img src="<?php echo base_url().'assets/admin/img/logo.png' ?>" alt="Logo" />
				</h3>
			</div>
            <div class="control-group">
                <div class="controls">
                    <div class="main_input_box">
                        <span class="add-on bg_lg"><i class="icon-user"> </i></span><input type="text" name="username" placeholder="Username" required="" />
                    </div>
                </div>
            </div>
            <div class="control-group">
                <div class="controls">
                    <div class="main_input_box">
                        <span class="add-on bg_ly"><i class="icon-lock"></i></span><input type="password" name="password" placeholder="Password" required="" />
                    </div>
                </div>
            </div>
            <div class="form-actions">
            	<span class="pull-left">
            		<a href="#" class="flip-link btn btn-info" id="to-recover">Lost password?</a>
            	</span>
                <span class="pull-right">
                	<button type="submit" class="btn btn-success">Login</button>
                </span>
            </div>
        </form>
        
        <form id="recoverform" action="<?php echo base_url().'login/lupa_password' ?>" method="post" class="form-vertical">
			<p class="normal_text">Enter your e-mail address below and we will send you instructions how to recover a password.</p>	
            <div class="controls">
                <div class="main_input_box">
                    <span class="add-on bg_lo"><i class="icon-envelope"></i></span><input type="email" name="email" placeholder="E-mail address" />
                </div>
            </div>
               
            <div class="form-actions">
                <span class="pull-left">
                	<a href="#" class="flip-link btn btn-success" id="to-login">&laquo; Back to login</a>
               	</span>
                <span class="pull-right">
                    <button type="submit" class="btn btn-info">Send to Email</button>
               	</span>
            </div>
        </form>
    </div>
        
    <script src="<?php echo base_url().'assets/admin/js/jquery.min.js' ?>"></script>  
    <script src="<?php echo base_url().'assets/admin/js/matrix.login.js' ?>"></script> 
</body>
</html>