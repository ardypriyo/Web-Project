<!DOCTYPE html>
<html lang="en">
<head>
	<title>Open Source System</title>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link rel="stylesheet" href="<?php echo base_url().'assets/admin/css/bootstrap.min.css' ?>" />
	<link rel="stylesheet" href="<?php echo base_url().'assets/admin/css/bootstrap-responsive.min.css' ?>" />
	<link rel="stylesheet" href="<?php echo base_url().'assets/admin/css/fullcalendar.css' ?>" />
	<link rel="stylesheet" href="<?php echo base_url().'assets/admin/css/matrix-style.css' ?>" />
	<link rel="stylesheet" href="<?php echo base_url().'assets/admin/css/matrix-media.css' ?>" />
	<link rel="stylesheet" href="<?php echo base_url().'assets/admin/font-awesome/css/font-awesome.css' ?>"  />
	<link rel="stylesheet" href="<?php echo base_url().'assets/admin/css/jquery.gritter.css' ?>" />
	<link rel='stylesheet' href="<?php echo base_url().'assets/css/google-apis.css '?>"  type='text/css'>
  <link rel="stylesheet" href="<?php echo base_url().'assets/admin/css/colorpicker.css '?>" />
  <link rel="stylesheet" href="<?php echo base_url().'assets/admin/css/datepicker.css' ?>" />
  <link rel="stylesheet" href="<?php echo base_url().'assets/admin/css/uniform.css' ?>" />
  <link rel="stylesheet" href="<?php echo base_url().'assets/admin/css/select2.css' ?>" />
  <link rel="stylesheet" href="<?php echo base_url().'assets/admin/css/bootstrap-wysihtml5.css' ?>" />
  <link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/sweetalert-master/dist/sweetalert.css' ?>">
</head>
<body>

	<!--Header-part-->
	<div id="header">
  		<h1><a href="dashboard.html">Open Source</a></h1>
	</div>
	<!--close-Header-part--> 


	<!--top-Header-menu-->
	<div id="user-nav" class="navbar navbar-inverse">
  		<ul class="nav">
    		<li class="dropdown" id="menu-messages">
    			<a href="#" data-toggle="dropdown" data-target="#menu-messages" class="dropdown-toggle">
    				<i class="icon icon-envelope"></i> <span class="text">Messages</span> <span class="label label-important">5</span> <b class="caret"></b>
    			</a>
      			<ul class="dropdown-menu">
        			<li><a class="sAdd" title="" href="#"><i class="icon-plus"></i> new message</a></li>
        			<li class="divider"></li>
        			<li><a class="sInbox" title="" href="#"><i class="icon-envelope"></i> inbox</a></li>
        			<li class="divider"></li>
        			<li><a class="sOutbox" title="" href="#"><i class="icon-arrow-up"></i> outbox</a></li>
        			<li class="divider"></li>
        			<li><a class="sTrash" title="" href="#"><i class="icon-trash"></i> trash</a></li>
      			</ul>
    		</li>
    		<li class=""><a title="" href="#"><i class="icon icon-cog"></i> <span class="text">Settings</span></a></li>
    		<li class=""><a title="" href="<?php echo base_url().'Admin/logout' ?>"><i class="icon icon-share-alt"></i> <span class="text">Logout</span></a></li>
    		<li  class="dropdown" id="profile-messages" >
    			<a title="" href="#" data-toggle="dropdown" data-target="#profile-messages" class="dropdown-toggle">
    				<i class="icon icon-user"></i>  <span class="text"><?php echo $this->session->userdata('nama'); ?></span><b class="caret"></b>
    			</a>
      			<ul class="dropdown-menu">
        			<li><a href="#"><i class="icon-user"></i> My Profile</a></li>
        			<li class="divider"></li>
        			<li><a href="#"><i class="icon-check"></i> My Tasks</a></li>
        			<li class="divider"></li>
        			<li><a href="<?php echo base_url().'Admin/logout' ?>"><i class="icon-key"></i> Log Out</a></li>
      			</ul>
    		</li>
  		</ul>
	</div>
	<!--close-top-Header-menu-->

	

	<!--sidebar-menu-->
	<div id="sidebar"><a href="#" class="visible-phone"><i class="icon icon-home"></i> Dashboard</a>
  		<ul>
    		<li><a href="<?php echo base_url().'admin' ?>"><i class="icon icon-home"></i> <span>Dashboard</span></a> </li>
        <li class="submenu">
          <a href="#">
            <i class="icon icon-pencil"></i> <span>Content</span>
          </a>
          <ul>
            <li><a href="<?php echo base_url().'artikel' ?>">Semua Tulisan</a>
            <li><a href="<?php echo base_url().'artikel/tambah' ?>">Tambah Artikel</a></li>
            <li><a href="<?php echo base_url().'kategori' ?>">Kategori</a></li>
            <li><a href="<?php echo base_url().'tags' ?>">Tags</a></li>
            <li><a href="<?php echo base_url().'media' ?>">Media</a></li>
          </ul>
        </li>
    		<li class="submenu">
    			<a href="#">
    				<i class="icon icon-cog"></i> <span>Confguration</span>
    			</a>
      			<ul>
        			<li><a href="<?php echo base_url().'admin/email_config' ?>"><i class="icon icon-user"></i> <span>Konfigurasi Email</span></a></li>
              <li><a href="<?php echo base_url().'admin/kebangsaan' ?>"><i class="icon icon-user"></i> <span>Kebangsaan</span></a></li>
              <li><a href="<?php echo base_url().'admin/provinsi' ?>"><i class="icon icon-user"></i> <span>Provinsi</span></a></li>
              <li><a href="<?php echo base_url().'kota' ?>"><i class="icon icon-user"></i> <span>Kota</span></a></li>
      			</ul>
    		</li>
  		</ul>
	</div>
	<!--sidebar-menu-->
	<div id="content">