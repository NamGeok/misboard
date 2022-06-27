$(function()
{
	function validHangul(fld)
	{
		var pattern = /([^가-힣\x20])/i;

		if (!pattern.test(fld)) {
			return true;
		}

		return false;
	}

	function validSmarteditor(column, value, stype)
	{
		var editor_data = oEditors.getById[column].getIR();

		oEditors.getById[column].exec('UPDATE_CONTENTS_FIELD', []);

		if(jQuery.inArray(document.getElementById(column).value.toLowerCase().replace(/^\s*|\s*$/g, ''), ['&nbsp;','<p>&nbsp;</p>','<p><br></p>','<div><br></div>','<p></p>','<br>','']) != -1) {
			document.getElementById(column).value='';
		}

		if(stype == 'required') {
			if (!editor_data || jQuery.inArray(editor_data.toLowerCase(), ['&nbsp;','<p>&nbsp;</p>','<p><br></p>','<p></p>','<br>']) != -1) {
				oEditors.getById[column].exec('FOCUS');
				return false;
			}
		}

		return true;
	}

	function validCkeditor(column, value, stype)
	{

		var editor_data = eval("CKEDITOR.instances." + column + ".getData();");

		if(stype == 'required') {
			if (! editor_data) {
				eval("CKEDITOR.instances." + column + ".focus();");
				return false;
			}
		}

		return true;
	}

	$.validator.addMethod('hangul', function(value, element) {
		return this.optional(element) || validHangul(value);
	}, '한글이 아닙니다. (자음, 모음만 있는 한글은 처리하지 않습니다.)');

	$.validator.addMethod('alphanumunder', function(value, element) {
		return this.optional(element) || /(^[a-zA-Z0-9\_]+$)/.test(value);
	}, '영문, 숫자, _ 가 아닙니다.');

	$.validator.addMethod('alpha_dash', function(value, element) {
		return this.optional(element) || /(^[a-zA-Z0-9\_\-]+$)/.test(value);
	}, '영문, 숫자, _ , - 가 아닙니다.');

	$.validator.addMethod('valid_smarteditor', function(value, element) {
		return validSmarteditor($(element).attr('name'), value, 'valid');
	}, '내용을 입력해주세요');

	$.validator.addMethod('required_smarteditor', function(value, element) {
		return validSmarteditor($(element).attr('name'), value, 'required');
	}, '내용을 입력해주세요');

	$.validator.addMethod('valid_ckeditor', function(value, element) {
		return validCkeditor($(element).attr('name'), value, 'valid');
	}, '내용을 입력해주세요');

	$.validator.addMethod('required_ckeditor', function(value, element) {
		return validCkeditor($(element).attr('name'), value, 'required');
	}, '내용을 입력해주세요');

});


function changemenu( menukey )
{
	if ($('#menu_collapse'+ menukey).parent().hasClass('active')) {
		close_admin_menu();
	} else {
		open_admin_menu(menukey);
	}
}

function open_admin_menu( menukey ) {
	close_admin_menu();

	$('.nav-first-level.nav_menuname_'+ menukey).addClass('active');
	$('.menu-arrow-icon.'+ menukey).removeClass('fa-angle-left').addClass('fa-angle-down');
	$('#menu_collapse'+ menukey).collapse('toggle');
}

function close_admin_menu()
{
	$('.menu_collapse').collapse('hide');
	$('.nav-first-level').removeClass('active');
	$('.menu-arrow-icon').removeClass('fa-angle-down').addClass('fa-angle-left');
}