<!--
author: W3layouts
author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html lang="pt-br">

<head>
	<title>Explo Expo 2018 - Imagens</title>
	<!-- custom-theme -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="Megapixel Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
	Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />

	<!-- //custom-theme -->
	<link href="<?=site_url()?>resources/fotos/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
	<link rel="stylesheet" href="<?=site_url()?>resources/fotos/css/slider.css" type="text/css" media="screen" property="" />
	<link href="<?=site_url()?>resources/fotos/css/style7.css" rel="stylesheet" type="text/css" media="all" />
	<!-- Owl-carousel-CSS -->
	<link href="<?=site_url()?>resources/fotos/css/owl.carousel.css" rel="stylesheet">

	<link rel="stylesheet" href="<?=site_url()?>resources/fotos/css/team.css" type="text/css" media="all" />
	<link href="<?=site_url()?>resources/fotos/css/style.css" rel="stylesheet" type="text/css" media="all" />
	<!-- font-awesome-icons -->
	<link href="<?=site_url()?>resources/fotos/css/font-awesome.css" rel="stylesheet">
	<!-- //font-awesome-icons -->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800"
	rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800" rel="stylesheet">
</head>

<body>

<body>

	<?php require $view.".php"; ?>

	<div class="w3l_footer" style="background-color: #4577B5;">
		<div class="container">
			<div class="col-md-12">
				<center><h2><a href="<?=site_url()?>"><i class="fa fa-camera-retro" aria-hidden="true"></i> Expo Explo</a></h2>
				</center>
			</div>
			<div class="clearfix"> </div>
			<p class="agileits_w3ls_copyright">© 2018 Explo Expo. Todos os direitos reservados | Design by <a href="http://geminiweb.com.br" style="color: #FDC42F;">Gemini Web Floripa.</a></p>
	
		</div>
	</div>
	<!--//footer -->



	<!-- js -->
	<script type="text/javascript" src="<?=site_url()?>resources/fotos/js/jquery-2.1.4.min.js"></script>
	<!-- //js -->
	<!-- Slider script -->
	<script src="<?=site_url()?>resources/fotos/js/slider.js"></script>

	<!-- Kickoff the slider -->
	<script>
		$(document).ready(function () {
			var $gallery = $('.gallery');

			$gallery.vitGallery({
				autoplay: true
			})
		})
	</script>
	<!-- /nav -->
	<script src="<?=site_url()?>resources/fotos/js/modernizr-2.6.2.min.js"></script>
	<script src="<?=site_url()?>resources/fotos/js/classie.js"></script>
	<script src="<?=site_url()?>resources/fotos/js/demo1.js"></script>
	<!-- //nav -->
	<!-- js for portfolio lightbox -->
	<script src="<?=site_url()?>resources/fotos/js/jquery.chocolat.js"></script>
	<link rel="stylesheet " href="<?=site_url()?>resources/fotos/css/chocolat.css" type="text/css" media="all" />
	<!--light-box-files -->
	<script type="text/javascript ">
		$(function () {
		$('.portfolio-grids a').Chocolat();
	});
</script>
<!-- /js for portfolio lightbox -->
<!-- stats -->
<script src="<?=site_url()?>resources/fotos/js/jquery.waypoints.min.js"></script>
<script src="<?=site_url()?>resources/fotos/js/jquery.countup.js"></script>
<script>
	$('.counter').countUp();
</script>
<!-- //stats -->
<!-- start-smoth-scrolling -->
<script type="text/javascript" src="<?=site_url()?>resources/fotos/js/move-top.js"></script>
<script type="text/javascript" src="<?=site_url()?>resources/fotos/js/easing.js"></script>
<script type="text/javascript">
	jQuery(document).ready(function ($) {
		$(".scroll").click(function (event) {
			event.preventDefault();
			$('html,body').animate({
				scrollTop: $(this.hash).offset().top
			}, 1000);
		});
	});
</script>
<!-- start-smoth-scrolling -->
<!-- requried-jsfiles-for owl -->
<script src="<?=site_url()?>resources/fotos/js/owl.carousel.js"></script>
<script>
	$(document).ready(function () {
		$("#owl-demo2").owlCarousel({
			items: 1,
			lazyLoad: false,
			autoPlay: true,
			navigation: false,
			navigationText: false,
			pagination: true,
		});
	});
</script>
<!-- //requried-jsfiles-for owl -->

<script type="text/javascript" src="<?=site_url()?>resources/fotos/js/bootstrap-3.1.1.min.js"></script>


</body>

</html>