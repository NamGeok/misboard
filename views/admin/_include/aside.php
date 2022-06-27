		<!-- STR: ms-lnb { -->
		<div class="ms-lnb">
			<div class="navbar-minimalize"><a href="javascript:void(0)" class="btn btn-primary btn-mini"><i class="fa fa-bars"></i></a></div>

			<ul class="nav-top">
				<li><a href="<?php echo base_url('/'); ?>" target="_blank"><i class="fa fa-house"></i> Home</a></li>
				<li><a href="<?php echo site_url('logout') ?>"><i class="fa fa-sign-out"></i> Log out</a></li>
			</ul>
		</div>
		<!-- } END: ms-lnb -->

<script type="text/javascript">
//<![CDATA[
$(document).ready(function() {
	$(document).on('click', '.navbar-minimalize>a', function()
	{
		if ($('#ms_nav').is(':visible') === true) {
			$('#ms_nav').hide();
			$('#ms_body').css('margin-left', '0px');
		} else {
			$('#ms_nav').show();
			$('#ms_body').css('margin-left', '220px');
		}
	});
});
//]]>
</script>
