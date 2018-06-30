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
		}
	});
	$("#login_pwd").blur(function(){
		if ($("#login_pwd").val() == "") {
			$(".pwd_group").addClass("has-error");
		}
	});

	$("#signup_email").blur(function(){
		if ($("#signup_email").val() == "") {
			$(".semail_group").addClass("has-error");
		}
	});
	$("#signup_pwd").blur(function(){
		if ($("#signup_pwd").val() == "") {
			$(".spwd_group").addClass("has-error");
		}
	});
	$("#signup_cpwd").blur(function(){
		if ($("#signup_cpwd").val() == "") {
			$(".scpwd_group").addClass("has-error");
		}
	});
	$("#signup_fname").blur(function(){
		if ($("#signup_fname").val() == "") {
			$(".sname_group").addClass("has-error");
		}
	});
});