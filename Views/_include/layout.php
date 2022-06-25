<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1.0,minimum-scale=1.0,user-scalable=no" />

<title><?php echo $page_title; ?></title>

<link rel="shortcut icon" href="/asset/favicon.ico" />

<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/css/bootstrap.min.css" />
<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" />
<link rel="stylesheet" href="<?php echo base_url('asset/css/theme.css'); ?>" />
<link rel="stylesheet" href="<?php echo base_url('asset/css/common.css'); ?>" />
<style>
.ms-container{max-width:1280px}
.ms-container-wide{max-width:1980px}
.boxed.wrapper,.boxed.wrapper #ms_menu_wrap.me-sticky nav{max-width:1280px}
.no-responsive .wrapper{min-width:1280px}
</style>

<script src="//cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/angular.js/1.8.3/angular.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/angular-route/1.8.3/angular-route.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/angular-resource/1.8.3/angular-resource.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/angular-cookies/1.8.3/angular-cookies.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/angular-animate/1.8.3/angular-animate.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/angular-aria/1.8.3/angular-aria.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/angular-loader/1.8.3/angular-loader.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/angular-messages/1.8.3/angular-messages.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/socket.io/4.5.1/socket.io.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/placeholders/4.0.1/placeholders.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery.imagesloaded/5.0.0/imagesloaded.pkgd.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery-infinitescroll/4.0.1/infinite-scroll.pkgd.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/masonry/4.2.2/masonry.pkgd.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/Sly/1.6.1/sly.min.js"></script>
<script src="<?php echo base_url('asset/js/common.js'); ?>"></script>
<script>
$(window).on('load', function() {
	$("#ms_loader").delay(100).fadeOut("slow");
});

$(document).ready(function() {
	$('#ms_loader').on('click', function() {
		$('#ms_loader').fadeOut();
	});
});
</script>
</head>

<body class="responsive">

<!-- STR: ms_loader { -->
<div id="ms_loader">
	<div class="loader">
		<i class="fa fa-spinner fa-spin text-dark"></i>
		<span class="sr-only">Loading...</span>
	</div>
</div>
<!-- } END: ms_loader -->

<!-- STR: wrapper { -->
<div class="wrapper">
	<!-- STR: ms_header { -->
	<header id="ms_header">
<?= $this->include('_include/header') ?>
	</header>
	<!-- } END: ms_header -->

	<!-- STR: ms_body { -->
	<div id="ms_body">
		<div class="ms-container px-0 px-sm-4 px-xl-0">
			<!-- STR: main-container { -->
			<div class="main-container">
				<!-- STR: main-asid { -->
				<asid class="ms-asid">
<?= $this->include('_include/aside') ?>
				</asid>
				<!-- } END: main-asid -->

				<!-- STR: main-content { -->
				<section class="ms-content">
<?= $this->renderSection('content') ?>
				</section>
				<!-- } END: main-content -->
			</div>
			<!-- } END: main-container -->
		</div>
	</div>
	<!-- } END: ms_body -->

	<!-- STR: ms_footer { -->
	<footer id="ms_footer" class="position-relative fw-normal">
<?= $this->include('_include/footer') ?>
	</footer>
	<!-- } END: ms_footer -->

</div>
<!-- } END: wrapper -->

</body>
</html>