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
					<center><h1>GURU ZONE</h1></center>
					</div>
				</div>
			
				
				<div class="row-fluid" style="padding-top:100px">
					<div class="span3 well">
					<center><h4>Welcome</h4></center>
					<img src="<?php echo base_url('assets/img/contoh.jpg')?>">
					<center><h5>Drs. Sudjiwotedjo.S pd</h5></center>
						<ul class="nav nav-list">
						  <li class="nav-header">Manage Guru</li>
						  <li class="navigation <?php if(isset($menu)){ if($menu == 'materi') {echo 'active';} } ?>"><a href="<?php echo site_url('materi'); ?>"><i class="icon-pencil"></i>Materi</a></li>
						  <li class="navigation <?php if(isset($menu)){ if($menu == 'tugas') {echo 'active';} } ?>"><a href="<?php echo site_url('tugas'); ?>"><i class="icon-pencil"></i> Tugas</a></li>
						  <li class="navigation <?php if(isset($menu)){ if($menu == 'ujian') {echo 'active';} } ?>"><a href="<?php echo site_url('ujian'); ?>"><i class="icon-pencil"></i>Ujian</a></li>
						  <li class="navigation <?php if(isset($menu)){ if($menu == 'laporan_ujian') {echo 'active';} } ?>"><a href="<?php echo site_url('laporan_ujian'); ?>"><i class="icon-pencil"></i> Laporan Hasil Ujian</a></li>
						  <li class="navigation <?php if(isset($menu)){ if($menu == 'laporan_tugas') {echo 'active';} } ?>"><a href="<?php echo site_url('laporan_tugas'); ?>"><i class="icon-pencil"></i>Laporan Hasil Tugas</a></li>
						  <li class="nav-header">Akun Guru</li>
						  <li><a href="#"><i class="icon-user"></i> Profil Guru</a></li>
						  <li><a href="#"><i class="icon-cog"></i> Pengaturan</a></li>
						  <li class="divider"></li>
						</ul>
					</div>