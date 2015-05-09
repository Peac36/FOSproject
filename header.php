<?php require_once 'config/function.php';
//for delete
error_reporting(E_ALL ^ E_WARNING);
//
$submenu = listPages();

//routes
$pages = array('home', 'news', 'reviews', 'contact', 'register', 'bonusnews');
if (isset($_GET['page']) and in_array($_GET['page'], $pages)) {
	$page = $_GET['page'];
	$path = 'include/' . $page . '.php';
	if (is_file($path) and is_readable($path)) {
		$require = $path;
	}
} else {
	$page = 'home';
	$require = 'include/home.php';
}
$nav = getNav($page);

//
?>

<!DOCTYPE HTML>
<html>
<head>
<link rel='stylesheet' href='css/index.css'>
<script src='js/jquery-2.1.3.min.js'></script>
<link rel='stylesheet' href='js/jquery-ui-1.11.3.custom/jquery-ui.css'>
<script src='js/jquery-ui-1.11.3.custom/jquery-ui.js'></script>
<script src='js/login.js'></script>
<script src='js/showNews.js'></script>
<script src='js/calendar.js'></script>
<title><?=ucfirst($page);?></title>
<meta charset='UTF-8'>
</head>
<body>
<div class='mainwrapper'>
	<!--start of Header -->
	<header>
		<div class='left'>
			<a href='#'><img src='image/logo.png'></a>
		</div>
		<div class='right'>
			<div class='lheader'>
				<img src='image/fb.png'>
				<img src='image/twitter.png'>
				<img src='image/support.png'>
				<img src='image/oldphone.png'>
			</div>
			<div class='rheader'>
				<div>
				<img class='skype' src='image/Skype-logo.jpg'/>
				<span>0200 0000 1111</span><br/>
				second line
				<span class='mini'>
				<img class='skypemini' src='image/Skype-logo.jpg'/> 0200 1111 0000
				</span>

				</div>
				<div class=clear></div>
			</div>


	</div>
	<div class=clear></div>
	<div class='form'>
		<!--<a href='login.php'>Login</a>-->
			 <span id='loginbutton'>Login</span><img src='image/separator.png' ><a href='index.php?page=register'> Register</a>

		</div>
		<div class=clear></div>
	</header>
	<!--end of Header -->
	<!--start of Nav -->
	<nav>
		<ol>
			<li>
			<a  class='<?=$nav['home']?>'   href='index.php'>Home</a>
			</li>
			<li>
				<a href=>About</a>
			</li>
			<li>
				<a class='<?=$nav['news']?>' href='index.php?page=news'>News</a>
			</li>
			<li>
				<a href=>Gallery</a>
			</li>
			<li>
				<a class='<?=$nav['reviews']?>' href='index.php?page=reviews'>Reveiws</a>
			</li>
			<li>
			<a  class='<?=$nav['contact']?>' href='index.php?page=contact'>Contract</a>
			</li>
			<div class='clear'></div>
		</ol>
	</nav>




	<!--end of Nav -->
	<!--start of section -->
	<section>
		<aside>
		<ol>
		<?php
foreach ($submenu as $page) {
	echo '<li><a href=index.php?page=bonusnews&new=' . $page['id'] . '>' . $page['title'] . '</a></li>';
}

?>

		</ol>
		<!--
			<ol>
				<li>Our First Page</li>
				<ul>
					<li>1</li>
					<li>2</li>
					<li>3</li>
					<li>4</li>
					<li>1</li>
				</ul>
				<li>Arco Promotion</li>
				<li>Local news</li>
				<li>Sports</li>
				<li>Themen DW.DB</li>
				<li>Topsport-tenis</li>
				<li>Dnes.bg News</li>
				<ul>
					<li>1</li>
					<li>2</li>
					<li>3</li>
					<li>4</li>
					<li>1</li>
				</ul>
				<li>The Australina</li>
				<li>Speigel Online</li>
				<li>Online University</li>
				<ul>
					<li>1</li>
					<li>2</li>
					<li>3</li>
					<li>4</li>
					<li>1</li>
				</ul>
			</ol>
			-->
		</aside>
		<div class='other'>