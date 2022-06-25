<!DOCTYPE html>
<html lang="ko">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>CIBoard Admin</title>
<link rel="stylesheet" type="text/css" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
<link rel="stylesheet" type="text/css" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" />
<link rel="stylesheet" type="text/css" href="//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
<link rel="stylesheet" type="text/css" href="http://ciboard.test.com/assets/css/datepicker3.css" />
<link rel="stylesheet" type="text/css" href="http://ciboard.test.com/views/admin/basic/css/style.css" />
<link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/earlyaccess/nanumgothic.css" />

<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script type="text/javascript" src="http://ciboard.test.com/assets/js/bootstrap-datepicker.js"></script>
<script type="text/javascript" src="http://ciboard.test.com/assets/js/bootstrap-datepicker.kr.js"></script>

<script type="text/javascript" src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script type="text/javascript" src="http://ciboard.test.com/assets/js/jquery.validate.min.js"></script>
<script type="text/javascript" src="http://ciboard.test.com/assets/js/jquery.validate.extension.js"></script>
<script type="text/javascript" src="http://ciboard.test.com/assets/js/common.js"></script>
<!--[if lt IE 9]>
<script type="text/javascript" src="http://ciboard.test.com/assets/js/html5shiv.min.js"></script>
<script type="text/javascript" src="http://ciboard.test.com/assets/js/respond.min.js"></script>
<![endif]-->
<script type="text/javascript">
// 자바스크립트에서 사용하는 전역변수 선언
var cb_url = "http://ciboard.test.com";
var cb_admin_url = "http://ciboard.test.com/admin/";
var cb_charset = "UTF-8";
var cb_time_ymd = "2022-06-25";
var cb_time_ymdhis = "2022-06-25 19:58:52";
var admin_skin_path = "admin/basic";
var admin_skin_url = "http://ciboard.test.com/views/admin/basic";
var is_member = "1";
var is_admin = "super";
var cb_admin_url = cb_url + "/admin";
var cb_board = "";
var cb_csrf_hash = "724952f092d9060c9e4e06f74100fbe7";
var cookie_prefix = "";
</script>
<script type="text/javascript" src="http://ciboard.test.com/assets/js/sideview.js"></script>
</head>
<body>
<!-- start wrapper -->
<div class="wrapper">
	<!-- start nav -->
	<nav class="nav-default">
		<h1 class="nav-header"><a href="http://ciboard.test.com/admin/">Admin</a></h1>
		<ul class="nav">
							<li class="nav-first-level nav_menuname_config ">
					<a data-toggle="menu_collapse" href="#collapseconfig" aria-expanded="false" aria-controls="menu_collapseconfig" onClick="changemenu('config');" class="collapsed">
						<i class="fa fa-gears"></i>
						<span class="nav-label">환경설정</span>
						<i class="fa fa-angle-left menu-arrow-icon config"></i>
					</a>
					<ul class="nav nav-second-level menu_collapse collapse " id="menu_collapseconfig" style="height:0;">
													<li ><a href="http://ciboard.test.com/admin/config/cbconfigs"  >기본환경설정</a></li>
													<li ><a href="http://ciboard.test.com/admin/config/layoutskin"  >레이아웃/메타태그</a></li>
													<li ><a href="http://ciboard.test.com/admin/config/memberconfig"  >회원가입설정</a></li>
													<li ><a href="http://ciboard.test.com/admin/config/emailform"  >메일/쪽지발송양식</a></li>
													<li ><a href="http://ciboard.test.com/admin/config/rssconfig"  >RSS 피드 / 사이트맵</a></li>
													<li ><a href="http://ciboard.test.com/admin/config/testemail"  >메일발송테스트</a></li>
													<li ><a href="http://ciboard.test.com/admin/config/scheduler"  >스케쥴러 관리</a></li>
													<li ><a href="http://ciboard.test.com/admin/config/cbversion"  >버전정보</a></li>
													<li ><a href="http://ciboard.test.com/admin/config/dbupgrade"  >DB 업그레이드</a></li>
													<li ><a href="http://ciboard.test.com/admin/config/browscapupdate"  >Browscap 업데이트</a></li>
													<li ><a href="http://ciboard.test.com/admin/config/optimize"  >복구/최적화</a></li>
													<li ><a href="http://ciboard.test.com/admin/config/cleanlog"  >오래된로그삭제</a></li>
													<li ><a href="http://ciboard.test.com/admin/config/phpinfo" target="_blank" >phpinfo</a></li>
											</ul>
				</li>
							<li class="nav-first-level nav_menuname_page ">
					<a data-toggle="menu_collapse" href="#collapsepage" aria-expanded="false" aria-controls="menu_collapsepage" onClick="changemenu('page');" class="collapsed">
						<i class="fa fa-laptop"></i>
						<span class="nav-label">페이지설정</span>
						<i class="fa fa-angle-left menu-arrow-icon page"></i>
					</a>
					<ul class="nav nav-second-level menu_collapse collapse " id="menu_collapsepage" style="height:0;">
													<li ><a href="http://ciboard.test.com/admin/page/pagemenu"  >메뉴관리</a></li>
													<li ><a href="http://ciboard.test.com/admin/page/document"  >일반페이지</a></li>
													<li ><a href="http://ciboard.test.com/admin/page/popup"  >팝업관리</a></li>
													<li ><a href="http://ciboard.test.com/admin/page/faqgroup"  >FAQ관리</a></li>
													<li ><a href="http://ciboard.test.com/admin/page/banner"  >배너관리</a></li>
													<li ><a href="http://ciboard.test.com/admin/page/bannerclick"  >배너클릭로그</a></li>
											</ul>
				</li>
							<li class="nav-first-level nav_menuname_member ">
					<a data-toggle="menu_collapse" href="#collapsemember" aria-expanded="false" aria-controls="menu_collapsemember" onClick="changemenu('member');" class="collapsed">
						<i class="fa fa-users"></i>
						<span class="nav-label">회원설정</span>
						<i class="fa fa-angle-left menu-arrow-icon member"></i>
					</a>
					<ul class="nav nav-second-level menu_collapse collapse " id="menu_collapsemember" style="height:0;">
													<li ><a href="http://ciboard.test.com/admin/member/members"  >회원관리</a></li>
													<li ><a href="http://ciboard.test.com/admin/member/membergroup"  >회원그룹관리</a></li>
													<li ><a href="http://ciboard.test.com/admin/member/points"  >포인트관리</a></li>
													<li ><a href="http://ciboard.test.com/admin/member/memberfollow"  >팔로우현황</a></li>
													<li ><a href="http://ciboard.test.com/admin/member/nickname"  >닉네임변경이력</a></li>
													<li ><a href="http://ciboard.test.com/admin/member/memberlevelhistory"  >레벨히스토리</a></li>
													<li ><a href="http://ciboard.test.com/admin/member/loginlog"  >로그인현황</a></li>
													<li ><a href="http://ciboard.test.com/admin/member/dormant"  >휴면계정관리</a></li>
											</ul>
				</li>
							<li class="nav-first-level nav_menuname_board ">
					<a data-toggle="menu_collapse" href="#collapseboard" aria-expanded="false" aria-controls="menu_collapseboard" onClick="changemenu('board');" class="collapsed">
						<i class="fa fa-pencil-square-o"></i>
						<span class="nav-label">게시판설정</span>
						<i class="fa fa-angle-left menu-arrow-icon board"></i>
					</a>
					<ul class="nav nav-second-level menu_collapse collapse " id="menu_collapseboard" style="height:0;">
													<li ><a href="http://ciboard.test.com/admin/board/boards"  >게시판관리</a></li>
													<li ><a href="http://ciboard.test.com/admin/board/boardgroup"  >게시판그룹관리</a></li>
													<li ><a href="http://ciboard.test.com/admin/board/trash"  >휴지통</a></li>
													<li ><a href="http://ciboard.test.com/admin/board/posthistory"  >게시물변경로그</a></li>
													<li ><a href="http://ciboard.test.com/admin/board/naversyndilog"  >네이버신디케이션로그</a></li>
													<li ><a href="http://ciboard.test.com/admin/board/post"  >게시물관리</a></li>
													<li ><a href="http://ciboard.test.com/admin/board/comment"  >댓글관리</a></li>
													<li ><a href="http://ciboard.test.com/admin/board/tag"  >태그 관리</a></li>
													<li ><a href="http://ciboard.test.com/admin/board/fileupload"  >파일업로드</a></li>
													<li ><a href="http://ciboard.test.com/admin/board/filedownload"  >파일다운로드</a></li>
													<li ><a href="http://ciboard.test.com/admin/board/editorimage"  >에디터이미지</a></li>
													<li ><a href="http://ciboard.test.com/admin/board/linkclick"  >링크클릭</a></li>
													<li ><a href="http://ciboard.test.com/admin/board/like"  >추천/비추</a></li>
													<li ><a href="http://ciboard.test.com/admin/board/blame"  >신고</a></li>
											</ul>
				</li>
							<li class="nav-first-level nav_menuname_stat ">
					<a data-toggle="menu_collapse" href="#collapsestat" aria-expanded="false" aria-controls="menu_collapsestat" onClick="changemenu('stat');" class="collapsed">
						<i class="fa fa-bar-chart-o"></i>
						<span class="nav-label">통계관리</span>
						<i class="fa fa-angle-left menu-arrow-icon stat"></i>
					</a>
					<ul class="nav nav-second-level menu_collapse collapse " id="menu_collapsestat" style="height:0;">
													<li ><a href="http://ciboard.test.com/admin/stat/statcounter"  >접속자통계</a></li>
													<li ><a href="http://ciboard.test.com/admin/stat/boardcounter"  >게시판별접속자</a></li>
													<li ><a href="http://ciboard.test.com/admin/stat/registercounter"  >회원가입통계</a></li>
													<li ><a href="http://ciboard.test.com/admin/stat/searchkeyword"  >인기검색어현황</a></li>
													<li ><a href="http://ciboard.test.com/admin/stat/currentvisitor"  >현재접속자</a></li>
													<li ><a href="http://ciboard.test.com/admin/stat/registerlog"  >회원가입경로</a></li>
											</ul>
				</li>
					</ul>
	</nav>
	<script type="text/javascript">
	//<![CDATA[
	$('#menu_collapse').collapse('show');
	function changemenu( menukey) {
		if ($('#menu_collapse' + menukey).parent().hasClass('active')) {
			close_admin_menu();
		} else {
			open_admin_menu(menukey);
		}
	}
	function close_admin_menu() {
		$('.menu_collapse').collapse('hide');
		$('.nav-first-level').removeClass('active');
		$('.menu-arrow-icon').removeClass('fa-angle-down').addClass('fa-angle-left');
	}
	function open_admin_menu(menukey) {
		close_admin_menu();
		$('.nav-first-level.nav_menuname_' + menukey).addClass('active');
		$('.menu-arrow-icon.' + menukey).removeClass('fa-angle-left').addClass('fa-angle-down');
		$('#menu_collapse' + menukey).collapse('toggle');
	}
	//]]>
	</script>
	<!-- end nav -->

	<!-- start content_wrapper -->
	<div class="content_wrapper">
		<!-- start header -->
		<div class="row header">
			<div class="navbar-minimalize"><a href="#" class="btn btn-primary btn-mini"><i class="fa fa-bars"></i></a></div>
			<script type="text/javascript">
			//<![CDATA[
			$(document).on('click', '.navbar-minimalize>a', function() {
				if ($('.nav-default').is(':visible') === true) {
					$('.nav-default').hide();
					$('.content_wrapper').css('margin-left', '0px');
				} else {
					$('.nav-default').show();
					$('.content_wrapper').css('margin-left', '220px');
				}
			});
			//]]>
			</script>
			<ul class="nav-top">
				<li>
					<a href="http://ciboard.test.com/" target="_blank">홈페이지로 이동</a>
				</li>
				<li><a href="http://ciboard.test.com/login/logout"><i class="fa fa-sign-out"></i> Log out</a></li>
			</ul>
		</div>
		<!-- end header -->
		<div class="contents">

			<!-- 여기까지 레이아웃 상단입니다 -->

			<div class="col-sm-6">
	<div class="panel panel-default">
		<!-- Default panel contents -->
		<div class="panel-heading">최근등록회원
			<div class="view-all">
				<a href="http://ciboard.test.com/admin/member/members">More <i class="fa fa-angle-right"></i></a>
			</div>
		</div>
		<!-- Table -->
		<table class="table table-hover table-striped">
			<colgroup>
				<col class="col-md-6">
				<col class="col-md-3">
				<col class="col-md-3">
			</colgroup>
			<tbody>
							<tr>
					<td>admin</td>
					<td><a href="javascript:;"
				onClick="getSideView(this, 'admin');"
				title="[admin]관리자" style="text-decoration:none;">관리자</a></td>
					<td class="text-right">06-23</td>
				</tr>
						</tbody>
		</table>
	</div>
</div>
<div class="col-sm-6">
	<div class="panel panel-default">
		<!-- Default panel contents -->
		<div class="panel-heading">최근포인트
			<div class="view-all">
				<a href="http://ciboard.test.com/admin/member/points">More <i class="fa fa-angle-right"></i></a>
			</div>
		</div>
		<!-- Table -->
		<table class="table table-hover table-striped">
			<colgroup>
				<col class="col-md-4">
				<col class="col-md-2">
				<col class="col-md-3">
				<col class="col-md-3">
			</colgroup>
			<tbody>
							<tr>
					<td>2022-06-25 첫로그인</td>
					<td>5 P</td>
					<td><a href="javascript:;"
				onClick="getSideView(this, 'admin');"
				title="[admin]관리자" style="text-decoration:none;">관리자</a></td>
					<td class="text-right">19:46</td>
				</tr>
						</tbody>
		</table>
	</div>
</div>

<div class="clearfix"></div>

<div class="col-sm-6">
	<div class="panel panel-default">
		<!-- Default panel contents -->
		<div class="panel-heading">최근게시물
			<div class="view-all">
				<a href="http://ciboard.test.com/admin/board/post">More <i class="fa fa-angle-right"></i></a>
			</div>
		</div>
		<!-- Table -->
		<table class="table table-hover table-striped">
			<colgroup>
				<col class="col-md-6">
				<col class="col-md-3">
				<col class="col-md-3">
			</colgroup>
			<tbody>
						</tbody>
		</table>
	</div>
</div>
<div class="col-sm-6">
	<div class="panel panel-default">
		<!-- Default panel contents -->
		<div class="panel-heading">최근댓글
			<div class="view-all">
				<a href="http://ciboard.test.com/admin/board/comment">More <i class="fa fa-angle-right"></i></a>
			</div>
		</div>
		<!-- Table -->
		<table class="table table-hover table-striped">
			<colgroup>
				<col class="col-md-6">
				<col class="col-md-3">
				<col class="col-md-3">
			</colgroup>
			<tbody>
						</tbody>
		</table>
	</div>
</div>

			<!-- 여기부터 레이아웃 하단입니다 -->

		</div>
	</div>
	<!-- end content_wrapper -->
</div>
<!-- end wrapper -->
<footer class="footer">
	Powered by <a href="http://www.ciboard.co.kr/" target="_blank">CIBoard</a>,
	Your Version 3.0.4,
    Latest Version 3.0.3 <a href="http://www.ciboard.co.kr/b/lite" target="_blank"><i class="fa fa-share-square-o"></i></a>
	<span class="btn_top"><a href="#">Top <i class="fa fa-arrow-circle-o-up fa-lg"></i></a></span>
</footer>
<script type="text/javascript">
//<![CDATA[
$(document).ready(function() {
	$(function() {
		$('#fsearch').validate({
			rules: {
				skeyword: { required:true, minlength:2}
			}
		});
	});
});
//]]>
</script>
</body>
</html>
