<!DOCTYPE html>
<html lang="en">
<head>
	
	<meta charset="utf-8">
	<title>CityHunter Admin</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	

	<!-- The styles -->
	<link id="bs-css" href="<?php echo $this->config->base_url(); ?>css/bootstrap-classic.css" rel="stylesheet">
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

	<!-- The HTML5 shim, for IE6-8 support of HTML5 elements -->
	<!--[if lt IE 9]>
	  <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->

	<!-- The fav icon -->
	<link rel="shortcut icon" href="img/favicon.ico">
		
</head>

<body>
		<div class="container-fluid">
		<div class="row-fluid">
		
			<div class="row-fluid">
				<div class="span12 center login-header">
					<h2>Welcome to CityHunter</h2>
				</div><!--/span-->
			</div><!--/row-->
			
			<div class="row-fluid">
				<div class="well span5 center login-box">
					<div class="alert alert-info">
						Please login with your Username and Password below:
					</div>
					<form class="form-horizontal" action="" method="post">
						<fieldset>
							<div class="input-prepend" title="Username" data-rel="tooltip">
								<span class="add-on"><i class="icon-user"></i></span><input autofocus class="input-large span10" name="username" id="username" type="text" value="" />
							</div>
							<div class="clearfix"></div>

							<div class="input-prepend" title="Password" data-rel="tooltip">
								<span class="add-on"><i class="icon-lock"></i></span><input class="input-large span10" name="password" id="password" type="password" value="" />
							</div>
							<div class="clearfix"></div>

							<div class="input-prepend">
							<label class="remember" for="remember"><input type="checkbox" id="remember" checked/>Remember me</label>
							</div>
							<div class="clearfix"></div>

							<p class="center span5">
							<button type="submit" class="btn btn-primary">Login</button>
							</p>
						</fieldset>
					</form>

					<?php if(validation_errors()): ?>
					<div class="alert alert-info">
						<?php echo validation_errors(); ?>
					</div>
					<?php endif; ?>

				</div><!--/span-->
			</div><!--/row-->
				</div><!--/fluid-row-->
		
	</div><!--/.fluid-container-->

	<!-- external javascript
	================================================== -->
	<!-- Placed at the end of the document so the pages load faster -->

	<!-- jQuery -->
	<script src="<?php echo $this->config->base_url(); ?>js/jquery-1.7.2.min.js"></script>
	<!-- jQuery UI -->
	<script src="<?php echo $this->config->base_url(); ?>js/jquery-ui-1.8.21.custom.min.js"></script>
	<!-- transition / effect library -->
	<script src="<?php echo $this->config->base_url(); ?>js/bootstrap-transition.js"></script>
	
	
		
</body>
</html>
