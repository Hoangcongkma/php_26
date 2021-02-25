/**
 * Description: Process user register with AJAX
 * Date: 2016-4-22
 * Author: thoainguyn <thoainguyn@gmail.com>
 * Version: 1.0.0
 */
 $('#register').submit(function (evt) {

 	// prevent default action of form
 	evt.preventDefault();

 	// clear error message of before
 	$('#err_reg').html('');

 	// get all value input of user was entered
 	var username = $.trim( $('#username_reg').val() );
 	var email = $.trim( $('#email_reg').val() );
 	var password = $.trim( $('#password_reg').val() );

 	// if username is empty
 	if (username == '') {
 		show_error('#err_username_reg', 'Please enter a username');
 		$('#username_reg').select();
 		return false;
 	}
 	// if email is empty
 	if (email == '') {
 		show_error('#err_email_reg', 'Please enter an email');
		$('#email_reg').select();
 		return false;
 	}
 	// check email is match pattern?
 	var pattern = /^[a-zA-Z0-9\._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;
 	if (pattern.test(email) == false) {
 		show_error('#err_email_reg', 'Email is invalid');
 		$('#email_reg').select();
 		return false;
 	}
 	// if password is empty
 	if (password == '') {
 		show_error('#err_password_reg', 'Please enter a password');
 		$('#password_reg').select();
 		return false;
 	}
 	// if password is less than 6
	if (password.length < 6) {
		show_error('#err_password_reg', 'Password must be greater than 5 character');
		return false; // stop
	}

 	// process user register with AJAX
 	$.ajax({
 		url: '/auth/register',
 		method: 'POST',
 		dataType: 'json',
 		data: {
 			username: username,
 			email: email,
 			password: password
 		},
 		beforeSend: function () {
 			$('#placeholder_reg').html('<i class="fa fa-spinner fa-pulse fa-3x fa-fw margin-bottom"></i><span class="sr-only">Loading...</span>');
 			setTimeout(function () {
 			}, 10000);
 		},
 		complete: function () {
 			$('#placeholder_reg').html('');
 		}
 	})
 	.done(function (response) {
 		if (response.success == true) {
 			$(location).attr('href', '/');
 		}
 		else {
 			show_error('#err_reg', response.error, 'fa fa-exclamation-triangle');
 		}
 	})
 	.fail(function (xhr, status, error) {
 		$('#placeholder_reg').html('');
 		console.log('An error occurred: ' + xhr.responseText + ' - ' + status + ' - ' + error);
 	});
 });

// clear error message username if not empty
$('#username_reg').change(function (evt) {
	var value = $.trim( $('#username_reg').val() );
	if (value != '') {
		$('#err_username_reg').html('');
	}
});
// clear error message email if not empty
$('#email_reg').change(function (evt) {
	var value = $.trim( $('#email_reg').val() );
	if (value != '') {
		$('#err_email_reg').html('');
	}
});
// clear error message password if not empty
$('#password_reg').keypress(function (evt) {
	var value = $.trim( $('#password_reg').val() );
	if (value != '') {
		$('#err_password_reg').html('');
	}
});