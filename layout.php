<?php

Class layout{
	
	//
	function __construct(){
	}
	
	//
	function createHeader($def_project){
		echo sprintf("	<!DOCTYPE html>
				<html>
				<head>
					<title>%s</title>
					<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
					<!-- Bootstrap -->
					<link href=\"css/custom.css\" rel=\"stylesheet\">
					
					<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
					<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
					<!--[if lt IE 9]>
						<script src=\"https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js\"></script>
						<script src=\"https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js\"></script>
					<![endif]-->
				</head>
				<body>
					<!--TITLE-->
					<h1>%s</h1>",$def_project,$def_project);
	}
	
	//
	function createFooter(){
		echo "		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
				<script src=\"js/jquery.min.js\"></script>
				<!-- Include all compiled plugins (below), or include individual files as needed -->
				<script src=\"js/bootstrap.min.js\"></script>
				<script src=\"js/holder.js\"></script>
			</body>
			</html>";
	}
	
	//
	function createNav($def_project,$nav,$active){
		echo sprintf('	<div class="navbar navbar-default navbar-fixed-top">
				<div class="container">
					<div class="navbar-header">
						<a href="../" class="navbar-brand">%s</a>
					</div>
					<div class="navbar-collapse collapse" id="navbar-main">
						<ul class="nav navbar-nav navbar-left">
							<li><a href="http://www.phisor.it/" target="_blank">%s</a></li>
						</ul>
						
						<ul class="nav navbar-nav">',$def_project,$def_project);
		//
		foreach($nav as $k=>$v){
			$class="";
			if($k==$active){
				$class="class=\"active\"";
			}
			//
			echo sprintf("			<li %s><a href=\"%s\">%s</a></li>",$class,$v,$k);
		}
		//
		echo '
						</ul>
					</div>
				</div>
			</div>';
	}
	
	//
	function createGrid(){
		echo "	<div class=\"row\">
				<div class=\"col-xs-6 col-md-3\">
					<a href=\"#\" class=\"thumbnail\">
						<img src=\"images/django.jpg\" alt=\"...\">
					</a>
				</div>
			</div>";
	}
}

?>
