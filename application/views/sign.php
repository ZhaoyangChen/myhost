<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<link rel="stylesheet" href="/assets/css/bootstrap.min.css" />
	<link rel="stylesheet" href="/assets/css/sign.css" />

	<script src="/assets/js/jquery-3.0.0.min.js"></script>
	<script src="/assets/js/bootstrap.min.js"></script>
	<script src="/assets/js/sign.js"></script>
	<script src="/assets/js/jquery.form.min.js"></script>

	<script src="http://static.geetest.com/static/tools/gt.js"></script>

	<meta charset="utf-8">
	<title>Royan's</title>
</head>

<body>
	<div class="info-mask" style="display: none">
		<h1 id="res-info"><h1>
		<object type="application/x-shockwave-flash" style="outline:none;" data="http://cdn.abowman.com/widgets/hamster/hamster.swf?" width="300" height="225"><param name="movie" value="http://cdn.abowman.com/widgets/hamster/hamster.swf?"></param><param name="AllowScriptAccess" value="always"></param><param name="wmode" value="opaque"></param></object>
		<h2>点<a href="/">这里</a>返回首页<h2>
	</div>
	<div class="main">
		<div class="sign-panel">
			<div class="index-tab-navs">
				<div class="navs-slider">
					<a href="/sign#up">注册</a>
					<a href="/sign#in">登录</a>
				</div>
			</div>
			<form id="sign-in-form" action="/api/user" method="post">
				<div class="group-inputs" id="signin-inputs">
					<input type="text" name="email" required="required" placeholder="邮箱">
					<input type="password" name="password" required="required" placeholder="密码">
					<button id="sign-in-btn" type="submit" class="btn btn-primary">登录</button>
				</div>
			</form>

			<form id="sign-up-form" action="/api/user" method="post">
				<div class="group-inputs" id="signup-inputs">
					<input type="email" name="email" required="required" placeholder="邮箱">
					<input type="text" name="nick"  required="required" placeholder="昵称">
					<input type="password" name="password" required="required" placeholder="密码">

					<div id="embed-captcha"></div>
					<p id="wait" class="show">正在加载验证码......</p>
					<p id="notice" class="hide">请先完成验证</p>
					<button id="sign-up-btn" type="submit" class="btn btn-primary">注册</button>
				</div>
			</form>
		</div>
	</div>
</body>
<script>
	var handlerEmbed = function (captchaObj) {
		$("#embed-submit").click(function (e) {
			var validate = captchaObj.getValidate();
			if (!validate) {
				$("#notice")[0].className = "show";
				setTimeout(function () {
					$("#notice")[0].className = "hide";
				}, 2000);
				e.preventDefault();
			}
		});
		// 将验证码加到id为captcha的元素里，同时会有三个input的值：geetest_challenge, geetest_validate, geetest_seccode
		captchaObj.appendTo("#embed-captcha");
		captchaObj.onReady(function () {
			$("#wait")[0].className = "hide";
		});
		// 更多接口参考：http://www.geetest.com/install/sections/idx-client-sdk.html
	};
	$.ajax({
		// 获取id，challenge，success（是否启用failback）
		url: "../geetest?t=" + (new Date()).getTime(), // 加随机数防止缓存
		type: "get",
		dataType: "json",
		success: function (data) {
			// 使用initGeetest接口
			// 参数1：配置参数
			// 参数2：回调，回调的第一个参数验证码对象，之后可以使用它做appendTo之类的事件
			initGeetest({
				gt: data.gt,
				challenge: data.challenge,
				new_captcha: data.new_captcha,
				product: "embed", // 产品形式，包括：float，embed，popup。注意只对PC版验证码有效
				offline: !data.success // 表示用户后台检测极验服务器是否宕机，一般不需要关注
				// 更多配置参数请参见：http://www.geetest.com/install/sections/idx-client-sdk.html#config
			}, handlerEmbed);
		}
	});
</script>
</html>