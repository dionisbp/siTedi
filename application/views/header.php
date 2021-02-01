<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<head>
<title>Penelitian</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Colored Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- bootstrap-css -->
<link rel="stylesheet" href="<?= base_url('assets/penelitian/css/bootstrap.css');?>">
<!-- //bootstrap-css -->
<!-- Custom CSS -->
<link href="<?= base_url('assets/penelitian/css/style.css');?>" rel='stylesheet' type='text/css' />
<!-- font CSS -->
<link href='//fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
<!-- font-awesome icons -->
<link rel="stylesheet" href="<?= base_url('assets/penelitian/css/font.css');?>" type="text/css"/>
<link href="<?= base_url('assets/penelitian/css/font-awesome.css');?>" rel="stylesheet"> 
<!-- //font-awesome icons -->
<script src="<?= base_url('assets/penelitian/js/jquery2.0.3.min.js');?>"></script>
<script src="<?= base_url('assets/penelitian/js/modernizr.js');?>"></script>
<script src="<?= base_url('assets/penelitian/js/jquery.cookie.js');?>"></script>
<script src="<?= base_url('assets/penelitian/js/screenfull.js');?>"></script>
		<script>
		$(function () {
			$('#supported').text('Supported/allowed: ' + !!screenfull.enabled);

			if (!screenfull.enabled) {
				return false;
			}

			

			$('#toggle').click(function () {
				screenfull.toggle($('#container')[0]);
			});	
		});
		</script>
<!-- charts -->
<script src="<?= base_url('assets/penelitian/js/raphael-min.js');?>"></script>
<script src="<?= base_url('assets/penelitian/js/morris.js');?>"></script>
<link rel="stylesheet" href="<?= base_url('assets/penelitian/css/morris.css');?>">
<!-- //charts -->
<!--skycons-icons-->
<script src="<?= base_url('assets/penelitian/js/skycons.js');?>"></script>
<!--//skycons-icons-->
</head>
<body class="dashboard-page">
	<script>
	        var theme = $.cookie('protonTheme') || 'default';
	        $('body').removeClass (function (index, css) {
	            return (css.match (/\btheme-\S+/g) || []).join(' ');
	        });
	        if (theme !== 'default') $('body').addClass(theme);
        </script>
        
	<section class="wrapper scrollable">
		<nav class="user-menu">
			<a href="javascript:;" class="main-menu-access">
			<i class="icon-proton-logo"></i>
			<i class="icon-reorder"></i>
			</a>
		</nav>
		<section class="title-bar">
			<div class="logo">
				<h1><img src="<?= base_url('assets/undip.png');?>" alt="logo" width="60" height="70" /><a href="<?= base_url('/');?>"><br>Profile</a></h1>
			</div>
			
			
			<div class="header-right">
				<div class="profile_details_left">
					
					<div class="profile_details">		
						<ul>
							<li class="dropdown profile_details_drop">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
									<div class="profile_img">	
										<span class="prfil-img"><i class="fa fa-user" aria-hidden="true"></i></span> 
										<div class="clearfix"></div>	
									</div>	
								</a>
								<ul class="dropdown-menu drp-mnu">
									<li> <a href="<?= base_url('login/profile/');?>"><i class="fa fa-user"></i> Profile</a> </li> 
									<li> <a href="<?= base_url('login/logout');?>"><i class="fa fa-sign-out"></i> Logout</a> </li>
								</ul>
							</li>
						</ul>
					</div>
					<div class="profile_details">		
						<ul>
							<li class="dropdown profile_details_drop">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
								<?php 
                        			foreach($nama as $v) { ?>
								<?= $v->nama ?>
								<?php }?>
								</a>
							</li>
						</ul>
					</div>
					<div class="clearfix"> </div>
				</div>
			</div>
			<div class="clearfix"> </div>
		</section>