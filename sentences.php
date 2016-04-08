<?php	require_once ('lib/Template.php');	require_once ('lib/DataBase.php');	require_once ('lib/Ajax.php');	$sentencesCategory = [		'life'  => '人间词话',		'article' => '凤毛麟角',		'dream' => '海市蜃楼',		'ancient' => '释卷藏锋'	];	$sentencesData['life'] = DataBase::find('sentences', 'category', 'life');	$sentencesData['article']  = DataBase::find('sentences', 'category', 'article');	$sentencesData['dream']  = DataBase::find('sentences', 'category', 'dream');	$sentencesData['ancient']  = DataBase::find('sentences', 'category', 'ancient');	if ($_GET['cate']) {		die(1);		ajaxReturn(1);		//ajaxReturn($sentencesData[$_GET['cate']]);	}?><!DOCTYPE html><html lang="en"><head>	<title>Zhaoyang</title>	<meta charset="utf-8">	<meta name="viewport" content="width=device-width, initial-scale=1">	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">	<link rel="stylesheet" href="css/nav.css">	<link rel="stylesheet" href="css/sentences.css">	<script src="js/jquery.min.js"></script>	<script src="bootstrap/js/bootstrap.min.js"></script></head><body>	<?php		$navTempate = new Template();		$navTempate->printNav();	?>	<div id="main">		<img id="backgroundImage" src="/img/dailyBackground.jpg">		<div class="panel panel-default" id="sentencesList">			<div class="panel-heading">				<h3 class="panel-title">分类1</h3>			</div>			<div class="panel-body" id="listContainer">				<div class="list-group">					<?php						foreach($sentencesCategory as $key => $value) {							echo "<button type=\"button\" id={$key} class=\"list-group-item\">{$value}</button>";						}					?>				</div>			</div>		</div>		<div class="panel panel-default" id="sentencesContent">			<div class="panel-heading">				<h3 class="panel-title">内容</h3>			</div>			<div class="panel-body" id="sentencesContainer">			</div>		</div>	</div></body><script type="text/javascript">	$(document).ready(function(){		$('.list-group-item').click(function(){			var buttonId = $(this).id;			$.ajax({				type: "GET",				url : "sentences.php",				data:{cate:buttonId}			}).done(function(msg){				alert(msg);			});		});	});</script></html>