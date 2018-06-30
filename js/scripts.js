$(document).ready(function(){

	// index.php
	$(".prop-cols").hover(function(){
		$(this).find(".prop-icon").css("color", "#32d8c1").css("transform", "scale(1.2, 1.2)");
		$(this).find(".prop-header").css("color", "#32d8c1");
	},function() {
		$(this).find(".prop-icon").css("color", "#000").css("transform", "scale(1, 1)");
		$(this).find(".prop-header").css("color", "#000");
	});

	$("#login_email").blur(function(){
		if ($("#login_email").val() == "") {
			$(".login-group").addClass("has-error");
		}else{
			$(".login-group").removeClass("has-error");
		}
	});
	$("#login_pwd").blur(function(){
		if ($("#login_pwd").val() == "") {
			$(".pwd_group").addClass("has-error");
		}else{
			$(".pwd_group").removeClass("has-error");
		}
	});

	$("#signup_email").blur(function(){
		if ($("#signup_email").val() == "") {
			$(".semail_group").addClass("has-error");

			$(".email-error").slideUp();
		}else{
			$(".semail_group").removeClass("has-error");

			var email = $("#signup_email").val();

			$.ajax({
				type: "POST",
				url: "check_email.php",
				data: {"uemail" : email},
				cache: false,
				success: function(data){
					if (data == "success") {
						$(".semail_group").addClass("has-error");
						$(".email-error").slideDown();
					} else {
						$(".semail_group").removeClass("has-error");
						$(".semail_group").addClass("has-success");
					}
				}
			});
		}
	});
	$("#signup_pwd").blur(function(){
		if ($("#signup_pwd").val() == "") {
			$(".spwd_group").addClass("has-error");
		}else{
			$(".spwd_group").removeClass("has-error");
		}
	});
	$("#signup_cpwd").blur(function(){
		if ($("#signup_cpwd").val() == "") {
			$(".scpwd_group").addClass("has-error");
		}else{
			$(".scpwd_group").removeClass("has-error");
		}
	});
	$("#signup_fname").blur(function(){
		if ($("#signup_fname").val() == "") {
			$(".sname-group").addClass("has-error");
		}else{
			$(".sname-group").removeClass("has-error");
		}
	});
	$("#signup_lname").blur(function(){
		if ($("#signup_lname").val() == "") {
			$(".sname-group").addClass("has-error");
		}else{
			$(".sname-group").removeClass("has-error");
		}
	});
	$("#signup_mobile").blur(function(){
		if ($("#signup_mobile").val() == "") {
			$(".smobile-group").addClass("has-error");
		} else {
			$(".smobile-group").removeClass("has-error");
		}
	});

	$("#signup_button").click(function(event){
		event.preventDefault();

		var email = $("#signup_email").val();
		var password = $("#signup_pwd").val();
		var cpassword = $("#signup_cpwd").val();
		var fname = $("#signup_fname").val();
		var lname = $("#signup_lname").val();
		var mobile = $("#signup_mobile").val();

		$.ajax({
			type: "POST",
			url: "signup.php",
			data: {"semail" : email, "spassword" : password, "sfname" : fname, "slname" : lname, "smobile" : mobile},
			cache: false,
			success: function(data){
				if (data == "success") {
					$(".signup-success").slideDown();
				} else {
					$(".signup-error").slideDown();
				}
			}
		});
	});

	$("#login_button").click(function(event){
		event.preventDefault();

		var email = $("#login_email").val();
		var password = $("#login_pwd").val();

		$.ajax({
			type: "POST",
			url: "login.php",
			data: {"uemail" : email, "upassword" : password},
			cache: false,
			success: function(data){
				if (data == "success") {
					$(".login-error").slideUp();

					// window.location.href = "";
				} else {
					$(".login-error").slideDown();
				}
			}
		});
	});
});