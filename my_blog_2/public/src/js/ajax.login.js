/**
 * Description: Process user login with AJAX
 * Date: 2016-4-22
 * Author: thoainguyn <thoainguyn@gmail.com>
 * Version: 1.0.0
 */
$('#login').submit(function (evt) {

	// prevent action default of form
	evt.preventDefault();

	// clear error of before session
	$('#err_log').html('');

	// get input value that user was entered.
	var username = $.trim( $('#username_log').val() );
	var password = $.trim( $('#password_log').val() );
	var remember = $('#remember_log').prop('checked');

	// if username is empty
	if (username == '') {
		show_error('#err_username_log', 'Please enter a username');
		$('#username_log').select();
		return false; // stop
	}
	// if password is empty
	if (password == '') {
		show_error('#err_password_log', 'Please enter a password');
		$('#password_log').select();
		return false; // stop
	}

	// call AJAX
	$.ajax({
		url: '/auth/login',
		method: 'POST',
		dataType: 'json',
		data: {
			username: username,
			password: password,
			remember: remember
		},
		beforeSend: function () {
			$('#placeholder_log').html('<i class="fa fa-spinner fa-pulse fa-3x fa-fw margin-bottom"></i><span class="sr-only">Loading...</span>');
			setTimeout(function () {
			}, 10000);
		},
		complete: function () {
			$('#placeholder_log').html('');
		}
	})
	.done(function (response) {
		if (response.success == true) {
			$(location).attr('href', '/');
		}
		else {
			show_error('#err_log', response.error, 'fa fa-user-times');
		}
	})
	.fail(function (xhr, status, error) {
		$('#placeholder_log').html('');
		console.log('An error occurred: ' + xhr.responseText + ' - ' + status + ' - ' + error);
	});
});

// clear error message username if not empty
$('#username_log').change(function (evt) {
	var value = $.trim( $('#username_log').val() );
	if (value != '') {
		$('#err_username_log').html('');
	}
});
// clear error message password if not empty
$('#password_log').keypress(function (evt) {
	var value = $.trim( $('#password_log').val() );
	if (value != '') {
		$('#err_password_log').html('');
	}
});