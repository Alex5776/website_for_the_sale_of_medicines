<?php session_start();?>
<!doctype html>
<html>
<head>
	<meta http-equiv="Content-type" content="text/html; charset=utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=Edge">
	<title>О НАС/КОМАНДА</title>
	<link rel="stylesheet" href="css/style.css" type="text/css">
	<link rel="stylesheet" href="css/font.css" type="text/css">
</head>
<body>
	<div id="wrapper">
		<header>
			<a href="index.php"><img src="img/logo.png" alt="logo"></a>
			<div class="loguser">
			<?php 
			if ($_SESSION['log']!='')
			echo '<font size=4px>' . $_SESSION['log'] . '</font>' . ' | ' . '<a href="inc/sys_off.php">выйти</a>';
			else
			echo '<a href="log.php" >Войти</a>';
			?>
			</div>
		</header>
		<nav>
			<ul class="top-menu">
				<li><a href="shop.php">ТОВАРЫ</a></li>
				<li><a href="cont.php">КОНТАКТЫ</a></li>
				<li class="active">О НАС</li>
			</ul>
		</nav>
		<div id="heading">
		</div>
		<aside>
			<nav>
				<ul class="aside-menu">
					<li><a href="about_com.php">О КОМПАНИ</a></li>
					<li class="active">КОМАНДА</li>
					<li><a href="about_office.php">ОФИСЫ</a></li>
				</ul>
			</nav>
		</aside>
		<section>
			<h2>наша команда</h2>
			<div class="team-row">
				<figure>
					<img src="img/alexey-sim.png" width="96" height="96">
					<figcaption>Симкин Алейсей<span>Все должности</span></figcaption>
				</figure>
			</div>
		</section>
	</div>
	<footer>
		<div id="footer">
			<div id="sitemap">
				<h3>НАВИГАЦИЯ</h3>
				<div>
					<a href="index.php">Главная</a>
					<a href="about_com.php">О нас</a>
				</div>
				<div>
					<a href="shop.php">Товары</a>
					<a href="cont.php">Контакты</a>
				</div>
			</div>
			<div id="social">
				<h3>СОЦИАЛЬНЫЕ СЕТИ</h3>
				<a href="http://instagram.com/" class="social-icon inst"></a>
				<a href="http://vk.com/" class="social-icon vk"></a>
				<a href="http://telegram.org/" class="social-icon tg"></a>
			</div>
			<div id="footer-logo">
				<a href="index.php"><img src="img/logo-down.png" alt="Whitesquare logo"></a>
			</div>
		</div>
	</footer>
</body>
</html>