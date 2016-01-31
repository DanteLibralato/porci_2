$(function() {

    $('#login-form-link').click(function(e) {
		$("#login-form").delay(100).fadeIn(100);
 		$("#register-form").fadeOut(100);
		$('#register-form-link').removeClass('active');
		$(this).addClass('active');
		e.preventDefault();
	});
	$('#register-form-link').click(function(e) {
		$("#register-form").delay(100).fadeIn(100);
 		$("#login-form").fadeOut(100);
		$('#login-form-link').removeClass('active');
		$(this).addClass('active');
		e.preventDefault();
	});

});
//-------------------------------------------------------------------------------

function confirmar(){
	var username = $('#username').val();
	var email = $('#email').val();
	var password = $('#password').val();
	var con_password = $('#confirm-password').val();

	var data= $('#register-form').serialize();
	alert(data);
}