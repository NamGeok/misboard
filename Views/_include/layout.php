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
		<!-- STR: ms_sticky { -->
		<div id="ms_sticky" class="mb-md-3">
			<!-- STR: ms_lnb { -->
			<aside id="ms_lnb" class="d-none d-md-block fw-normal">
				<h3 class="sr-only">상단 네비</h3>
				<div class="ms-container clearfix px-xl-0 px-3 px-sm-4">
					<ul class="float-start">
					<li class="logo"><img src="/asset/img/logo2.png" alt="Power Logo" /></li>
					<li class="notice"><i class="fa fa-volume-up"></i></li>
					<li class="rolling">
						<div class="roll">
							<a href="javascript:void(0)">[공지] 공지사항 테스트 글 입니다.</a>
						</div>
					</li>
					</ul>
					<ul class="float-end">
					<li><a href="javascript:void(0)"><i class="fa fa-key"></i> 로그인</a></li>
					<li><a href="javascript:void(0)"><i class="fa fa-user-plus"></i> 회원가입</a></li>
					</ul>
				</div>
			</aside>
			<!-- } END: ms_lnb -->

			<!-- STR: nt_sticky_wrap { -->
			<div id="nt_sticky_wrap" class="bg-white">
				<!-- STR: header_pc { -->
				<div id="header_pc" class="d-none d-md-block border">
					<div class="ms-container px-xl-0 px-3 px-sm-4">
						<div class="d-flex">
							<div class="align-self-center w-100">
								<nav id="ms_menu" class="ms-menu d-none d-md-block fw-normal">
									<h3 class="sr-only">메인 메뉴</h3>
									<div class="d-flex justify-content-between">
										<div class="flex-grow-1">
											<ul class="clearfix m-0">
											<li class="float-start on">
												<a class="d-block" href="javascript:void(0)" target="_self">
													<span class="me-a text-nowrap f-md en px-4 px-lg-5">
														<i class="fa empty" aria-hidden="true"></i>
														파워볼
													</span>
												</a>
												<div class="arr"></div>
											</li>
											<li class="float-start">
												<a class="d-block" href="javascript:void(0)" target="_self">
													<span class="me-a text-nowrap f-md en px-4 px-lg-5">
														<i class="fa empty" aria-hidden="true"></i>
														파워볼
													</span>
												</a>
												<div class="arr"></div>
											</li>
											<li class="float-start">
												<a class="d-block" href="javascript:void(0)" target="_self">
													<span class="me-a text-nowrap f-md en px-4 px-lg-5">
														<i class="fa empty" aria-hidden="true"></i>
														파워볼
													</span>
												</a>
												<div class="arr"></div>
											</li>
											<li class="float-start">
												<a class="d-block" href="javascript:void(0)" target="_self">
													<span class="me-a text-nowrap f-md en px-4 px-lg-5">
														<i class="fa empty" aria-hidden="true"></i>
														파워볼
													</span>
												</a>
												<div class="arr"></div>
											</li>
											<li class="float-start">
												<a class="d-block" href="javascript:void(0)" target="_self">
													<span class="me-a text-nowrap f-md en px-4 px-lg-5">
														<i class="fa empty" aria-hidden="true"></i>
														파워볼
													</span>
												</a>
												<div class="arr"></div>
											</li>
											<li class="float-start">
												<a class="d-block" href="javascript:void(0)" target="_self">
													<span class="me-a text-nowrap f-md en px-4 px-lg-5">
														<i class="fa empty" aria-hidden="true"></i>
														커뮤니티
													</span>
												</a>
												<div class="arr"></div>
											</li>

											</ul>
										</div>
									</div>
								</nav>
							</div>
						</div>
					</div>
				</div>
				<!-- } END: header_pc -->
			</div>
			<!-- } END: nt_sticky_wrap -->
		</div>
		<!-- } END: ms_sticky -->
	</header>
	<!-- } END: ms_header -->


	<!-- STR: ms_body { -->
	<div id="ms_body">
		<div class="ms-container px-0 px-sm-4 px-xl-0 pt-4">
			<div class="row row-cols-1 row-cols-md-2">
				<div class="col-md-3" style="background:#ff99ff">
					<div class="d-none d-md-block mb-4 pb-2">
						<div class="f-de font-weight-normal">
						<form id="basic_outlogin" name="basic_outlogin" method="post" action="https://amina.co.kr/nariya/bbs/login_check.php" autocomplete="off">

							<div class="form-group">
				<label for="outlogin_mb_id" class="sr-only">아이디<strong class="sr-only"> 필수</strong></label>
				<div class="input-group">
					<div class="input-group-prepend">
						<span class="input-group-text"><i class="fa fa-user text-muted"></i></span>
					</div>
					<input type="text" name="mb_id" id="outlogin_mb_id" class="form-control required" placeholder="아이디">
				</div>
			</div>
			<div class="form-group">
				<label for="outlogin_mb_password" class="sr-only">비밀번호<strong class="sr-only"> 필수</strong></label>
				<div class="input-group">
					<div class="input-group-prepend">
						<span class="input-group-text"><i class="fa fa-lock text-muted"></i></span>
					</div>
					<input type="password" name="mb_password" id="outlogin_mb_password" class="form-control required" placeholder="비밀번호">
				</div>
			</div>
			<div class="form-group">
				<button type="submit" class="btn btn-primary btn-block btn-lg en">
					로그인
				</button>
			</div>

			<div class="clearfix f-sm">
				<div class="float-left">
					<div class="form-group mb-0">
						<div class="custom-control custom-switch">
						  <input type="checkbox" name="auto_login" class="custom-control-input remember-me" id="outlogin_remember_me">
						  <label class="custom-control-label float-left" for="outlogin_remember_me">자동로그인</label>
						</div>
					</div>
				</div>
				<div class="float-right">
					<a href="https://amina.co.kr/nariya/bbs/register.php">
						회원가입
					</a>
					<span class="na-bar"></span>
					<a href="https://amina.co.kr/nariya/bbs/password_lost.php" class="win_password_lost">
						정보찾기
					</a>
				</div>
			</div>


						</form>
						</div>
					</div>
				</div>

				<div class="col-md-9">
<?= $this->renderSection('content') ?>
				</div>
			</div>
		</div>
	</div>
	<!-- } END: ms_body -->

	<!-- STR: ms_footer { -->
	<footer id="ms_footer" class="position-relative fw-normal bg-light">
		<div class="border-top border-bottom">
			<div class="ms-container px-0 px-sm-4 px-xl-0">
				<nav class="ms-links clearfix">
					<div class="nt-container px-xl-0">
						<ul class="float-md-start d-none d-md-block">
						<li><a href="javascript:void(0)" target="_blank">이용약관</a></li>
						<li><a href="javascript:void(0)" target="_blank">개인정보취급방침</a></li>
						<li><a href="javascript:void(0)">청소년보호정책</a></li>
						<li><a href="javascript:void(0)">이메일주소수집거부</a></li>
						<li><a href="javascript:void(0)">고객센터</a></li>
						</ul>
						<ul class="float-md-end text-center text-md-start">
						<li><a class="topbtn" href="#"><i class="fa fa-arrow-up"></i></a></li>
						</ul>
					</div>
				</nav>
			</div>
		</div>
		<div class="ms-container py-4 px-0 px-sm-4 px-xl-0">
			<ul class="d-flex justify-content-center flex-wrap">
				<li class="pr-4">
					<b>LOGO</b>
				</li>
				<li>
					주소 : 서울특별시 중구 홍길동BD, 1호, 대표 : 홍길동<br />
					사업자 등록번호 : 000-00-00000<br />
					통신판매등록번호 : 제2099-서울중구-0000호<br />
					개인정보관리책임자 : 홍길동<br />
					대표전화 : 0000-0000<br />
					이메일 : help@soft.co<br />
					<br />
					<span class="text-danger">소프트는 분석 커뮤니티 입니다.</span><br />
					컨텐츠 자료를 무단도용시 법적 불이익을 받을 수 있습니다.<br />
					<span class="text-muted">© 2021 Soft. All Rights Reserved.</span>
				</li>
				<li>
					<strong>콘텐츠산업진흥법에 의한 표시</strong><br />
					제작년원일 : 2099년 12월 31일 (또는 그 콘텐츠가 업그레이드 된 경우 그 갱신일)<br />
					제작자명 : 서울특별시 중구 홍길동BD, 1호 소프트<br>
					대표전화 :  0000-0000, 이메일 : help@soft.co<br>
					<br />
					<strong>저작권보호안내</strong><br />
					소프트(https://soft.co) 홈페이지 내의 모든 컨텐츠는 [컨텐츠산업진흥법]에 따라 제작일 또는 그 갱신일로부터 5년간 보호됩니다. (제작자의 동의 없는 무단 복제 및 이용 등을 금함) 단, 본 컨텐츠는 지속적으로 업그레이드 되는 컨텐츠로서 본 컨텐츠가 업그레이드 된 시점을 기준으로 보호기간이 갱신 됩니다.<br />
					<br />
					<a href="https://www.freepik.com/psd/logo" target="_blank">Logo psd created by ferdibtk - www.freepik.com</a><br />
					<a href="https://www.freepik.com/vectors/menu" target="_blank">Menu vector created by jcomp - www.freepik.com</a>
				</li>
			</ul>
		</div>
	</footer>
	<!-- } END: ms_footer -->

</div>
<!-- } END: wrapper -->

</body>
</html>