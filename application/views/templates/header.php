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

	
	<link href="<?php echo base_url("assets/css/jquery-ui-1.8.21.custom.css"); ?>" rel="stylesheet">
	
 </head>
<body> 
	 <div id="mulai">
		<div class="container well">
			<div class="row-fluid">
				<div class="span12">
					<div class="navbar-inner">
					<center><h1>ADMIN ZONE</h1></center>
					</div>
				</div>
			
				
				<div class="row-fluid" style="padding-top:100px">
					<div class="span3 well">
						<ul class="nav nav-list">
						  <li class="nav-header">Manage Akademik</li>
						  <li class="navigation <?php if(isset($menu)){ if($menu == 'siswa') {echo 'active';} } ?>"><a href="<?php echo site_url('admin/siswa'); ?>"><i class="icon-pencil"></i> Siswa</a></li>
						  <li class="navigation <?php if(isset($menu)){ if($menu == 'set_siswa_mapel') {echo 'active';} } ?>"><a href="<?php echo site_url('admin/set_siswa_mapel'); ?>"><i class="icon-pencil"></i> Set Siswa Mapel</a></li>
						  <li class="navigation <?php if(isset($menu)){ if($menu == 'guru') {echo 'active';} } ?>"><a href="<?php echo site_url('admin/guru'); ?>"><i class="icon-pencil"></i> Guru</a></li>
						  <li class="navigation <?php if(isset($menu)){ if($menu == 'set_guru_mengajar') {echo 'active';} } ?>"><a href="<?php echo site_url('admin/set_guru_mengajar'); ?>"><i class="icon-pencil"></i> Set Guru Mengajar</a></li>
						  <li class="navigation <?php if(isset($menu)){ if($menu == 'matapelajaran') {echo 'active';} } ?>"><a href="<?php echo site_url('admin/matapelajaran'); ?>"><i class="icon-pencil"></i> Mata Pelajaran</a></li>
						  <li class="navigation <?php if(isset($menu)){ if($menu == 'kelas') {echo 'active';} } ?>"><a href="<?php echo site_url('admin/kelas'); ?>"><i class="icon-pencil"></i> Kelas</a></li>
						  <li class="navigation <?php if(isset($menu)){ if($menu == 'tahunajaran') {echo 'active';} } ?>"><a href="<?php echo site_url('admin/tahunajaran'); ?>"><i class="icon-pencil"></i> Tahun Ajaran</a></li>
						  <li class="nav-header">Admin Account</li>
						  <li><a href="#"><i class="icon-user"></i> Profile</a></li>
						  <li><a href="#"><i class="icon-cog"></i> Settings</a></li>
						  <li class="divider"></li>
						</ul>
					</div>