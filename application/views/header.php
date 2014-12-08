<!DOCTYPE html>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <!-- Mobile Specific
    ========================================================================= -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=1" />
    <!-- Bootstrap -->
    <link href="/tmp/static/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
    <link href="/tmp/static/css/doc.css" rel="stylesheet" type="text/css" href="">
    <style type="text/css">
     .white {
     	padding-top: -50px;
     }
     .page-header {
     	padding-top: 0px;
     }
    .form_control {
    	padding-top: 0px;
    	}
    </style>
    <link rel="shortcut icon" href="#" title="Favicon" />

    <!-- WP HEAD
    ========================================================================= -->
    <link href='http://fonts.googleapis.com/css?family=Lato:300,400,700,900' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="/tmp/static/lib/forrest/css/layerslider.css">
    <link rel="stylesheet" href="/tmp/static/lib/forrest/css/style.css">
    <link rel="stylesheet" href="/tmp/static/lib/forrest/css/nanum.css">
    <link rel="stylesheet" href="/tmp/static/lib/forrest/css/layout.css">
    <link rel="stylesheet" href="/tmp/static/lib/forrest/css/font-awesome.css">
    <link rel="stylesheet" href="/tmp/static/lib/forrest/css/magnific-popup.css">
    <!-- pe icon 7 filled-->
    <link rel="stylesheet" href="/tmp/static/lib/forrest/css/pe-icon-7-stroke.css">
    <link rel="stylesheet" href="/tmp/static/lib/forrest/css/pe-icon-7-filled.css">
    <!-- bootstrap -->
    <link rel="stylesheet" href="/tmp/static/lib/forrest/css/grid.css">
    <link rel="stylesheet" href="/tmp/static/lib/forrest/css/responsive.css">
    <!-- flexslider -->
    <link rel="stylesheet" href="/tmp/static/lib/forrest/css/flexslider.css">
    <!-- anamations effect-->
    <link rel="stylesheet" href="/tmp/static/lib/forrest/css/animations.min.css">
    <!-- Portfolio style -->
    <link rel="stylesheet" href="/tmp/static/lib/forrest/css/style-portfolio.css">
    <link rel="stylesheet" href="/tmp/static/lib/forrest/css/skin.css">

    <!-- Browser Specical File-->
    <!--[if IE 8]>
    <link href="css/ie8.css" rel="stylesheet" type="text/css" />
    <![endif]-->
    <!--[if lt IE 9]>
      <script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
      <![endif]-->    

    <link href="/tmp/static/lib/bootstrap/css/bootstrap-responsive.css" rel="stylesheet">             

  </head>
  <body>
  	<?php

  	if($this->session->flashdata('message')){
  		?> 
  		<script type="text/javascript">
  			alert('<?=$this->session->flashdata('message')?>')
  		</script>
  		<?php
  	}
  	?>
  	<div id="page" class="hfeed site">
  		<header id="header" class="site-header" role="banner">
  			<div id="frr-top-bar" class="top-bar-wrap">
  				<div class="container">
  					<div class="left-widget-wrap left">
  						<div class="phone left">
  							<i class="fa fa-phone"></i> (0) 0000 0000
  						</div>
  					</div>
  					<div class="right-widget-wrap right">
  						<div class="top-social">
  							<ul id="social-area-top">
  								<?php if($this->session->userdata('is_login')){ ?>
  								<li><a href="/tmp/auth/logout">Log Out</a></li>
  								<?php } else { ?>
  								<li><a href="/tmp/auth/login">Log In</a></li>
  								<?php } ?>
						        <li><a href="/tmp/auth/register">회원가입</a></li>

               <!-- <li class="facebook"><a href="#"><i class="fa fa-facebook"></i></a></li>
                <li class="google-plus"><a href="#"><i class="fa fa-google-plus"></i></a></li>
                <li class="pinterest"><a href="#"><i class="fa fa-pinterest"></i></a></li>
            -->
        </ul>
    </div>
</div>
</div>
</div>