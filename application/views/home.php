<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<link rel="stylesheet" href="assets/css/bootstrap.min.css" />
	<link rel="stylesheet" href="assets/css/home.css" />

	<script src="assets/js/jquery-3.0.0.min.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>
	<script src="assets/js/home.js"></script>

	<meta charset="utf-8">
	<meta name="keywords" content="个人博客,RoyanChen,陈赵阳,RoyanChen个人博客,陈赵阳个人博客">
	<meta name="keywords" content="陈赵阳博客,个人原创网站">
	<title>Royan's</title>
</head>

<body>
	<div class="se-pre-con"></div>
	<div class="panel panel-default update-log">
		<div class="panel-body">
			<h4>更新日志</h4>
			<p>2017-03-11 修复图片闪烁问题</p>
			<p>2017-03-13 添加更新日志</p>
			<p>2017-03-31 用户注册登录系统测试</p>
			<hr>
			<h4>愿望单</h4>
			<p>用户SESSION实装</p>
			<p>留言板</p>
			<p>美化页面UI及交互</p>

		</div>
	</div>
	<nav class="navbar navbar-inverse navbar-static-top" role="navigation">
		<div>
			<ul class="nav navbar-nav">
				<li class="active"><a href="/">藏锋</a></li>
				<li ><a href="/zhaoyan">昭言</a></li>
				<li ><a href="#">埋名</a></li>
				<li ><a href="#">莳花</a></li>
				<li ><a href="#">聆夜</a></li>
				<li class="update-log-trigger"><a><span class="glyphicon glyphicon-pushpin white"></span></a></li>
				<div class="user-panel">
					<a href="/sign#up">注册</a>
					<a href="/sign#in">登录</a>
				</div>
			</ul>
		</div>

	</nav>

	<div class="page-header">
		<img src="/assets/image/yanye_4.jpg">
		<img src="/assets/image/yanye_2.jpg">
		<img src="/assets/image/yanye_3.jpg">
	</div>

	<div class="page-body">
		<div class="portrait">
		</div>
		<div id="self-des" class="panel panel-default">
			<div class="panel-body">
				<img class="titie-img" src="/assets/image/royanchen.png"/>
				<div class="col-md-3">
					<img class="circleTag" src="/assets/image/china.jpg">
					<h3>天朝</h3>
					<p>富强、民主、文明、和谐</p>
					<p>自由、平等、公正、法治</p>
				</div>
				<div class="col-md-3">
					<img class="circleTag" src="/assets/image/zju2.jpg">
					<h3>老和山职业技术学院</h3>
					<p>诸位在校，有两个问题应该自己问问，第一，到浙大来做什么？第二，将来毕业后做什么样的人？</p>
				</div>

				<div class="col-md-3">
					<img class="circleTag" src="/assets/image/sfu.png">
					<h3>Simon Fraser</h3>
					<p>We are ready</p>
				</div>

				<div class="col-md-3">
					<img class="circleTag" src="/assets/image/male.png">
					<h3>直男癌</h3>
					<p>我靠, 前面开车技术这么烂, 肯定是个女的!</p>
				</div>

				<div class="col-md-3">
					<img class="circleTag" src="/assets/image/operator.png">
					<h3>搬砖工</h3>
					<p>搬完这波攒够钱我就回老家结婚</p>
				</div>

				<div class="col-md-3">
					<img class="circleTag" src="/assets/image/cancer.png">
					<h3>本命巨蟹座</h3>
					<p>白天傲娇逼，晚上玻璃心</p>
				</div>

				<div class="col-md-3">
					<img class="circleTag" src="/assets/image/virgo.png">
					<h3>上升处女座</h3>
					<p>瑜伽垫必须和地板线对齐!</p>
				</div>

				<div class="col-md-3">
					<img class="circleTag" src="/assets/image/cat.png">
					<h3>爱猫</h3>
					<p>人类在意所有不能被回馈的感情，并且非常希望所有感情都要被回应</p>
				</div>

				<div class="col-md-3">
					<img class="circleTag" src="/assets/image/dumbbell.png">
					<h3>兄贵养成中</h3>
					<p>
						Fifteen percent concentrated power of will.
						Five percent pleasure, fifty percent pain.
					</p>
				</div>

				<div class="col-md-3">
					<img class="circleTag" src="/assets/image/shirt.png">
					<h3>衬衣控</h3>
					<p>"你衣柜里除了衬衣还有什么?" "裤子"</p>
				</div>

				<div class="col-md-3">
					<img class="circleTag" src="/assets/image/evil.png">
					<h3>外貌协会</h3>
					<p>只有肤浅的人才不以貌取人，世界的秘密在于表象，而非内里。</p>
					<p>（The Picture of Dorian Gray）</p>
				</div>

			</div>
		</div>
	</div>

	<footer>
		<div class="col-md-4 footer-span">
			<span class="glyphicon glyphicon-earphone white">
				<p class="footer-text">
					131-XXXX-XXXX
				</p>
			</span>
		</div>
		<div class="col-md-4 footer-span">
			<span class="glyphicon glyphicon-envelope white">
				<p class="footer-text">
					zhaoyang_chen@sfu.ca
				</p>
			</span>

		</div>
		<div class="col-md-4 footer-span">
			<span class="glyphicon glyphicon-send white">
			</span>
		</div>
	</footer>

</body>
</html>