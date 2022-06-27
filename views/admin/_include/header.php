		<h1 class="ms-logo"><a href="<?php echo base_url('admin/'); ?>">Admin</a></h1>

		<!-- STR: nav-gnb { -->
		<ul class="ms-gnb">
		<li class="nav-first-level nav_menuname_config">
			<a data-toggle="menu_collapse" href="#collapseconfig" aria-expanded="false" aria-controls="menu_collapseconfig" onclick="changemenu('config');" class="collapsed">
				<i class="fa fa-gears"></i>
				<span class="nav-label">환경설정</span>
				<i class="fa fa-angle-left menu-arrow-icon config"></i>
			</a>

			<!-- STR: ms-snb { -->
			<ul class="nav-box nav-second-level menu_collapse collapse " id="menu_collapseconfig" style="height:0">
			<li ><a href="<?php echo base_url('admin/config/cbconfigs'); ?>"  >기본환경설정</a></li>
			</ul>
			<!-- } END: ms-snb -->
		</li>

		<li class="nav-first-level nav_menuname_page">
			<a data-toggle="menu_collapse" href="#collapsepage" aria-expanded="false" aria-controls="menu_collapsepage" onClick="changemenu('page');" class="collapsed">
				<i class="fa fa-laptop-file"></i>
				<span class="nav-label">페이지설정</span>
				<i class="fa fa-angle-left menu-arrow-icon page"></i>
			</a>

			<!-- STR: ms-snb { -->
			<ul class="nav-box nav-second-level menu_collapse collapse " id="menu_collapsepage" style="height:0">
			<li ><a href="http://ciboard.test.com/admin/page/pagemenu"  >메뉴관리</a></li>
			</ul>
			<!-- } END: ms-snb -->
		</li>

		<li class="nav-first-level nav_menuname_member">
			<a data-toggle="menu_collapse" href="#collapsemember" aria-expanded="false" aria-controls="menu_collapsemember" onClick="changemenu('member');" class="collapsed">
				<i class="fa fa-users"></i>
				<span class="nav-label">회원설정</span>
				<i class="fa fa-angle-left menu-arrow-icon member"></i>
			</a>

			<!-- STR: ms-snb { -->
			<ul class="nav-box nav-second-level menu_collapse collapse " id="menu_collapsemember" style="height:0">
			<li ><a href="http://ciboard.test.com/admin/member/members"  >회원관리</a></li>
			</ul>
			<!-- } END: ms-snb -->
		</li>

		<li class="nav-first-level nav_menuname_board">
			<a data-toggle="menu_collapse" href="#collapseboard" aria-expanded="false" aria-controls="menu_collapseboard" onClick="changemenu('board');" class="collapsed">
				<i class="fa fa-file-pen"></i>
				<span class="nav-label">게시판설정</span>
				<i class="fa fa-angle-left menu-arrow-icon board"></i>
			</a>

			<!-- STR: ms-snb { -->
			<ul class="nav-box nav-second-level menu_collapse collapse " id="menu_collapseboard" style="height:0">
			<li ><a href="http://ciboard.test.com/admin/board/boards"  >게시판관리</a></li>
			<li ><a href="http://ciboard.test.com/admin/board/boardgroup"  >게시판그룹관리</a></li>
			</ul>
			<!-- } END: ms-snb -->
		</li>

		<li class="nav-first-level nav_menuname_stat">
			<a data-toggle="menu_collapse" href="#collapsestat" aria-expanded="false" aria-controls="menu_collapsestat" onClick="changemenu('stat');" class="collapsed">
				<i class="fa fa-chart-column"></i>
				<span class="nav-label">통계관리</span>
				<i class="fa fa-angle-left menu-arrow-icon stat"></i>
			</a>

			<!-- STR: ms-snb { -->
			<ul class="nav-box nav-second-level menu_collapse collapse " id="menu_collapsestat" style="height:0">
			<li ><a href="http://ciboard.test.com/admin/stat/statcounter"  >접속자통계</a></li>
			<!-- } END: ms-snb -->
		</li>
		</ul>
		<!-- } END: ms-gnb -->

<script type="text/javascript">
//<![CDATA[
$(document).ready(function() {
	$('#menu_collapse').collapse('show');
});
//]]>
</script>
