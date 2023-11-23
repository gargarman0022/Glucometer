$(function() {

    $('.loginBtn').click(function(e) {
		$(".login").delay(100).fadeIn(100);
 		$(".signUp").fadeOut(100);
		$('.signUpBtn').removeClass('active');
		$(this).addClass('active');
		e.preventDefault();
	});
	$('.signUpBtn').click(function(e) {
		$(".signUp").delay(100).fadeIn(100);
 		$(".login").fadeOut(100);
		$('.loginBtn').removeClass('active');
		$(this).addClass('active');
		e.preventDefault();
	});

});