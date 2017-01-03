<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<link rel="stylesheet" href="/assets/css/bootstrap.min.css" />
	<link rel="stylesheet" href="/assets/css/zhaoyan.css" />

	<script src="/assets/js/jquery-3.0.0.min.js"></script>
	<script src="/assets/js/bootstrap.min.js"></script>

	<meta charset="utf-8">
	<title>Royan's</title>
</head>

<body>
	<nav class="navbar navbar-inverse navbar-static-top" role="navigation">
		<div>
			<ul class="nav navbar-nav">
				<li ><a href="/">藏锋</a></li>
				<li class="active"><a href="#">昭言</a></li>
				<li ><a href="#">埋名</a></li>
				<li ><a href="#">莳花</a></li>
				<li ><a href="#">聆夜</a></li>
			</ul>
		</div>
	</nav>

	<div class="mainPanel panel panel-default"">
		<ul class="nav nav-tabs">
			<li class="active"><a href="#literature" data-toggle="tab">凤毛麟角</a></li>
			<li><a href="#void" data-toggle="tab">海市蜃楼</a></li>
			<li><a href="#life" data-toggle="tab">人间词话</a></li>
			<li><a href="#lyric" data-toggle="tab">余音绕梁</a></li>
		</ul>

		<div class="page-content tab-content" >
			<div id="literature" class="active tab-pane fade in">
				<?php
					foreach (sentences::where('category', 'literature')->get() as $item) {
						echo "<div class=\"well sentence_container\">
								<pre>{$item->content}</pre>
								<div class=\"sentence_source\">
									<p>── {$item->author}<p>
								</div>
							</div>";
					}
				?>
			</div>

			<div id="void" class="tab-pane fade in">
				<?php
				foreach (sentences::where('category', 'void')->get() as $item) {
					echo "<div class=\"well sentence_container\">
								<pre>{$item->content}</pre>
								<div class=\"sentence_source\">
									<p>── {$item->author}<p>
								</div>
							</div>";
				}
				?>
			</div>

			<div id="life" class="tab-pane fade in">
				<?php
				foreach (sentences::where('category', 'life')->get() as $item) {
					echo "<div class=\"well sentence_container\">
								<pre>{$item->content}</pre>
								<div class=\"sentence_source\">
									<p>── {$item->author}<p>
								</div>
							</div>";
				}
				?>
			</div>


			<div id="lyric" class="tab-pane fade in">
				<?php
				foreach (sentences::where('category', 'lyric')->get() as $item) {
					echo "<div class=\"well sentence_container\">
								<pre>{$item->content}</pre>
								<div class=\"sentence_source\">
									<p>── {$item->author}<p>
								</div>
							</div>";
				}
				?>
			</div>
		</div>

	</div>


</body>
</html>