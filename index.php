<!DOCTYPE html>


<html>
	<head>
		<title>Information</title>
		<link rel="stylesheet" href="styles/css_styles/styles.css?hash=<?=md5_file("styles/css_styles/styles.css")?>"/>
		<link rel="stylesheet" href="styles/font-awesome/css/font-awesome.min.css"/>
		<script src="styles/js/jquery-3.4.1.min.js?hash=<?=md5_file(PHP_DIR."/styles/js/jquery-3.4.1.min.js")?>"></script>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=0.8, height=device-height, minimum-scale=0.8, user-scalable=0"/>
	</head>
	<body>
	<div class="content">
		<div class="navigation">
			<div class="nav_logo"></div>
			<ul class="nav_buttons">
				<li class="nav_butt_list" id="main"><a href="/index.php?page=main_page" class="nav_butt"><i class="fa fa-home" aria-hidden="true"></i></a></li>
				<li class="nav_butt_list" id="timetable"><a href="/index.php?page=timetable" class="nav_butt"><i class="fa fa-list-alt" aria-hidden="true"></i></a></li>
				<li class="nav_butt_list" id="lecturers"><a href="/index.php?page=lecturers" class="nav_butt"><i class="fa fa-users" aria-hidden="true"></i></a></li>
				<li class="nav_butt_list" id="photos"><a href="/index.php?page=photos" class="nav_butt"><i class="fa fa-picture-o" aria-hidden="true"></i></a></li>
				<li class="nav_butt_list" id="videos"><a href="/index.php?page=videos" class="nav_butt"><i class="fa fa-video-camera" aria-hidden="true"></i></a></li>
				<li class="nav_butt_list" id="practice"><a href="/index.php?page=practice" class="nav_butt"><i class="fa fa-ship" aria-hidden="true"></i></a></li>
				<li class="nav_butt_list" id="about"><a href="/index.php?page=about" class="nav_butt"><i class="fa fa-info" aria-hidden="true"></i></a></li>
			
			</ul>
		</div>
		<div class="main">
			<header>
				<div class="header_name"><h2>Кафедра "Судовождение и промышленное рыболовство"</h2></div>
			</header>
			
			
			<?
			if(empty($_GET[page])){
				$_GET[page] = "main_page";
			}
				
				
			
			
			if(file_exists("pages/$_GET[page].html")) {
				echo file_get_contents("pages/$_GET[page].html"); 
				$page_is_real=true;
			}
			if(file_exists("pages/$_GET[page].php")) {
				include("pages/$_GET[page].php");
				$page_is_real=true;
			}				
			
			if($page_is_real==false){
				$_GET[page] = "page_not_found";
				echo file_get_contents("pages/$_GET[page].html"); 
			}
			?>
		
			
		</div>
	</div>
	<script src="styles/js/script.js?hash=<?=md5_file("styles/css_styles/styles.css")?>"></script>	
	</body>
</html>
