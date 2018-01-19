$(document).ready(function(){
		
	$('.dropbtn').click(function() {
		$('body').toggleClass('open');
		$('.loginPop').toggleClass('open');
		$('.login-nav').toggleClass('open');
	});
	$('.loginPop').click(function() {
		$('.loginPop').toggleClass('open');
		$('.login-nav').toggleClass('open');
	});
	$('#signUp').click(function() {
		$(this).addClass('open');
		$('#signIn').addClass('open');
		$('#formSignUp').addClass('open');
		$('#formLogin').addClass('open');
	});
		$('#signIn').click(function() {
		$(this).removeClass('open');
		$('#signUp').removeClass('open');
		$('#formSignUp').removeClass('open');
		$('#formLogin').removeClass('open');
	});
	$(".signIn").click(function (){
		if( $("#uid").val() == "")
			$("div#error").html("Please enter username");
		else if( $("#pwd_1").val() == "")
			$("div#error").html("Please enter password");
		else ( $("div#error").html("") );
	})
		$(".signUp").click(function (){
		if( $("#uid").val() == "" || $("#pwd_1").val() == "")
			$("div#error").html("Please enter both username and password");
	 });
	$(".fa-arrow-up").hide();
	$(".navbar-navlv2").hide();
	
	$('#nav-icon').click(function () {
		$('.navbar-nav').toggleClass('open');
		$('body').toggleClass('open');
	    $('.navbar-wrapper').toggleClass('open');
		$(this).toggleClass('open');
	});
		
	$('.nav-span-arrowtab').click(function () {
		$(this).find('.fa-arrow-up, .fa-arrow-down').toggle();
		$(this).parent().find('.navbar-navlv2').toggle();
	});	
});

		
