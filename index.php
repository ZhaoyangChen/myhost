<?php	require_once ('lib/Template.php');?><!DOCTYPE html><html lang="en"><head>	<title>Zhaoyang</title>	<meta charset="utf-8">	<meta name="viewport" content="width=device-width, initial-scale=1">	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">	<link rel="stylesheet" href="css/nav.css">	<link rel="stylesheet" href="css/index.css">	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>	<script src="bootstrap/js/bootstrap.min.js"></script></head><body>	<?php		$navTempate = new Template();		$navTempate->printNav();	?>	<div id="main">		<?php		$numOfImage = 5;		for($i=1; $i <=$numOfImage; $i++) {			echo "<div>					<img id=\"mainImage{$i}\" class=\"mainImage\" src=\"img/indexShow_{$i}.jpg\">				</div>";		}		?>	</div></body><script type="text/javascript">	var imageIndex  = 0;	var numOfImage = <?php echo $numOfImage?>;	$(document).ready(function(){		setInterval(imageLoop, 5000);	});	function imageLoop() {		imageIndex++;		if (imageIndex > numOfImage)			imageIndex = 1;		var nextIndex = imageIndex + 1;		if (nextIndex > numOfImage)			nextIndex = 1;		$('#mainImage' + imageIndex).fadeOut(2000);		$('#mainImage' + nextIndex).fadeIn(2000);	}</script></html>