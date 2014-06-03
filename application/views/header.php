<!DOCTYPE html>
<html lang="en">
<head>
	
	<meta charset="utf-8">
	<title>CityHunter Admin</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	

	<!-- The styles -->
	<link id="" href="<?php echo $this->config->base_url(); ?>css/bootstrap-classic.css" rel="stylesheet">
	<style type="text/css">
	  body {
		padding-bottom: 40px;
	  }
	  .sidebar-nav {
		padding: 9px 0;
	  }
	</style>
	<link href="<?php echo $this->config->base_url(); ?>css/bootstrap-responsive.css" rel="stylesheet">
	<link href="<?php echo $this->config->base_url(); ?>css/charisma-app.css" rel="stylesheet">
	<link href="<?php echo $this->config->base_url(); ?>css/jquery-ui-1.8.21.custom.css" rel="stylesheet">
	<link href='<?php echo $this->config->base_url(); ?>css/fullcalendar.css' rel='stylesheet'>
	<link href='<?php echo $this->config->base_url(); ?>css/fullcalendar.print.css' rel='stylesheet'  media='print'>
	<link href='<?php echo $this->config->base_url(); ?>css/chosen.css' rel='stylesheet'>
	<link href='<?php echo $this->config->base_url(); ?>css/uniform.default.css' rel='stylesheet'>
	<link href='<?php echo $this->config->base_url(); ?>css/colorbox.css' rel='stylesheet'>
	<link href='<?php echo $this->config->base_url(); ?>css/jquery.cleditor.css' rel='stylesheet'>
	<link href='<?php echo $this->config->base_url(); ?>css/jquery.noty.css' rel='stylesheet'>
	<link href='<?php echo $this->config->base_url(); ?>css/noty_theme_default.css' rel='stylesheet'>
	<link href='<?php echo $this->config->base_url(); ?>css/elfinder.min.css' rel='stylesheet'>
	<link href='<?php echo $this->config->base_url(); ?>css/elfinder.theme.css' rel='stylesheet'>
	<link href='<?php echo $this->config->base_url(); ?>css/jquery.iphone.toggle.css' rel='stylesheet'>
	<link href='<?php echo $this->config->base_url(); ?>css/opa-icons.css' rel='stylesheet'>
	<link href='<?php echo $this->config->base_url(); ?>css/uploadify.css' rel='stylesheet'>
	<link href="<?php echo $this->config->base_url(); ?>css/jPages.css" rel="stylesheet">
	<link href="<?php echo $this->config->base_url(); ?>css/loitd-style.css" rel="stylesheet">

	<!-- The HTML5 shim, for IE6-8 support of HTML5 elements -->
	<!--[if lt IE 9]>
	  <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->

	<!-- The fav icon -->
	<link rel="shortcut icon" href="img/favicon.ico">
		
</head>

<body>
		<!-- topbar starts -->
	<div class="navbar">
		<div class="navbar-inner">
			<div class="container-fluid">
				<a class="btn btn-navbar" data-toggle="collapse" data-target=".top-nav.nav-collapse,.sidebar-nav.nav-collapse">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</a>
				<a class="brand" href="index.html"> <span>CityHunter</span></a>
				
				
				
				<!-- user dropdown starts -->
				<div class="btn-group pull-right" >
                
                    <button id="toggle-fullscreen" class="btn btn-white"><i class="icon-fullscreen"></i></button>

					<a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
						<i class="icon-user"></i><span class="hidden-phone"> <?php echo $user_login; ?></span>
						<span class="caret"></span>
					</a>
					<ul class="dropdown-menu">
						<li><a href="#">Profile</a></li>
						<li class="divider"></li>
						<li><a href="<?php echo $this->config->site_url(); ?>/login/logout">Logout</a></li>
					</ul>
                      
                
               
                
                
				</div>
				<!-- user dropdown ends -->
                
				
				<div class="top-nav nav-collapse">
					<ul class="nav">
						
						<li>
							<form class="navbar-search pull-left">
								<input placeholder="Search" class="search-query span2" name="query" type="text">
							</form>
						</li>
					</ul>
				</div><!--/.nav-collapse -->
                
              
                
                
			</div>
		</div>
	</div>
	<!-- topbar ends -->