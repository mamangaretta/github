<!DOCTYPE html>
<html>
<head>
	<title>Anhiora a Corporate Category Flat Bootstrap Responsive Website Template | Home :: w3layouts</title>
	<link href="<?php echo base_url();?>resources/css/style.css" rel="stylesheet" type="text/css" media="all" />
	<!--fonts-->
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,700,300,600,800,400' rel='stylesheet' type='text/css'>
	<!--//fonts-->
		<link href="<?php echo base_url();?>resources/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
	<!-- for-mobile-apps -->
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="keywords" content="Anhiora Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
		Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
		<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
	<!-- //for-mobile-apps -->
	<!-- js -->
		<script type="text/javascript" src="<?php echo base_url();?>resources/js/jquery.min.js"></script>
	<!-- js -->
	<!-- start-smoth-scrolling -->
		
		<script type="text/javascript" src="<?php echo base_url();?>resources/js/jquery.easing.1.3.js"></script>
		<script type="text/javascript">
			jQuery(document).ready(function($) {
				$(".scroll").click(function(event){		
					event.preventDefault();
					$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
				});
			});
		</script>
	<!-- start-smoth-scrolling -->
</head>
<body>
<!-- header -->
<div id="home" class="header">
	<div class="container">
		<div class="header-grid">
			<div class="logo">
				<a href="#"><img src="<?php echo base_url();?>resources/images/logo.png" alt=""/></a>
			</div>
			<div class="navigation">
				<span class="menu"><img src="<?php echo base_url();?>resources/images/menu.png" alt="" /></span>
					<ul class="nav1">
						<li><a class="scroll" href="#home">HOME</a></li>
						<li><a class="scroll" href="#about">ABOUT</a></li>
						<li><a class="scroll" href="#services">SERVICES</a></li>
						<li><a class="scroll" href="#pricing">PRICES</a></li>
						<li><a class="scroll" href="#contact">CONTACTS</a></li>
					</ul>
					<!-- script for menu -->
						<script> 
							$( "span.menu" ).click(function() {
							$( "ul.nav1" ).slideToggle( 300, function() {
							 // Animation complete.
							});
							});
						</script>
					<!-- //script for menu -->
			</div>
			<div class="social-icons">
				<ul>
					<li><a href="#" class="fb"></a></li>
					<li><a href="#" class="googl"></a></li>
					<li><a href="#" class="twit"></a></li>
				</ul>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
</div>
<!-- //header -->