<?php	class Template {		private $activeStr = " class = \"active\"";		private $indexActiveSym = '';		private $dailyActiveSym = '';		private $boardActiveSym = '';		private $sentencesActiveSym = '';		function __construct() {			$uri = $_SERVER['REQUEST_URI'];			if (in_array($uri, array('/', '/index.php'))) {				$this->indexActiveSym = $this->activeStr;			}			if ($uri == "/daily.php") {				$this->dailyActiveSym = $this->activeStr;			}			if ($uri == "/board.php") {				$this->boardActiveSym = $this->activeStr;			}			if ($uri == "/sentences.php") {				$this->sentencesActiveSym = $this->activeStr;			}		}		// 导航模版		function printNav() {			echo "<nav class=\"navbar navbar-inverse\"><div class=\"container-fluid\">";						echo "<div class=\"navbar-header\">";								echo"<a class=\"navbar-brand\" href=\"/\">Zhaoyang</a>";							echo"</div>";							echo"<ul class=\"nav navbar-nav\">";								echo"<li{$this->indexActiveSym}><a href=\"/\">主页</a></li>";								echo"<li{$this->dailyActiveSym}><a href=\"/daily.php\">琐碎</a></li>";								echo"<li{$this->dailyActiveSym}><a href=\"/sentences.php\">点墨</a></li>";								echo"<li><a href=\"#\">氤氲(建设中)</a></li>";								echo"<li><a href=\"#\">光影(建设中)</a></li>";								echo"<li{$this->boardActiveSym}><a href=\"/board.php\">留言</a></li>";							echo"</ul>";							echo"<audio id=\"bgMusic\" controls=\"controls\">";								echo"<source src=\"music/TimeRain.mp3\" type=\"audio/mp3\" />";							echo"</audio>";						echo"</div>";					echo"</nav>";		}	}