<!DOCTYPE html>
<html>
<head>

 <title>E-learning</title>
 <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    <link href="<?php echo base_url("assets/css/bootstrap.css"); ?>" rel="stylesheet">
    <style>
      body {
        padding-top: 60px; /* 60px to make the container go all the way to the bottom of the topbar */
      }
    </style>
    <link href="<?php echo base_url("assets/css/bootstrap-responsive.css"); ?>" rel="stylesheet">

    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo base_url("assets/ico/apple-touch-icon-144-precomposed.png"); ?>">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo base_url("assets/ico/apple-touch-icon-114-precomposed.png"); ?>">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo base_url("assets/ico/apple-touch-icon-72-precomposed.png"); ?>">
    <link rel="apple-touch-icon-precomposed" href="<?php echo base_url("assets/ico/apple-touch-icon-57-precomposed.png"); ?>">
	<script src="<?php echo base_url("assets/js/jquery.js"); ?>"></script>

	
	
 </head>
 <body>
	<header>
	</header>
	<div class="container">
		<div class="row-fluid">
			<div class="span12 well" id="background">
				<div class="row-fluid">
					<div class="span6">
						<p><h3>Welcome to E-Learning System</h3></p>
					</div>
					<div class="span6">
						<?php echo $this->session->flashdata('msg'); ?>
						<form class="form-inline well" method="POST" action="<?php echo site_url('home/validasi_login'); ?>">
							<input name="user_id" type="text" class="input-small" placeholder="User Id">
							<input name="password" type="password" class="input-small" placeholder="Password">
							<label class="checkbox">
							  <input type="checkbox"> Remember me
							</label>
							<button type="submit" class="btn">Sign in</button>
						</form>
					</div>
				</div>
				<div class="row-fluid">
					<div class="span12" id="gambar">
						<img src="<?php echo base_url('assets/img/Lighthouse.jpg'); ?>">
					</div>
				</div>
					
					
			</div>
		</div>
	</div>
	<footer>
	<div>
	<center><i>Copyright 2012 - E-Learning</i></center>
	</div>
		<script src="<?php echo base_url("assets/js/jquery-ui-1.8.21.custom.min.js"); ?>"></script>
		<script src="<?php echo base_url("assets/js/bootstrap-transition.js"); ?>"></script>
		<script src="<?php echo base_url("assets/js/bootstrap-alert.js"); ?>"></script>
		<script src="<?php echo base_url("assets/js/bootstrap-modal.js"); ?>"></script>
		<script src="<?php echo base_url("assets/js/bootstrap-dropdown.js"); ?>"></script>
		<script src="<?php echo base_url("assets/js/bootstrap-scrollspy.js"); ?>"></script>
		<script src="<?php echo base_url("assets/js/bootstrap-tab.js"); ?>"></script>
		<script src="<?php echo base_url("assets/js/bootstrap-tooltip.js"); ?>"></script>
		<script src="<?php echo base_url("assets/js/bootstrap-popover.js"); ?>"></script>
		<script src="<?php echo base_url("assets/js/bootstrap-button.js"); ?>"></script>
		<script src="<?php echo base_url("assets/js/bootstrap-collapse.js"); ?>"></script>
		<script src="<?php echo base_url("assets/js/bootstrap-carousel.js"); ?>"></script>
		<script src="<?php echo base_url("assets/js/bootstrap-typeahead.js"); ?>"></script>
	</footer>
 </body>
 </html>