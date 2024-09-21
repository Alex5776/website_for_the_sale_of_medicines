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
					<li><a href="about_command.php">КОМАНДА</a></li>
					<li class="active">ОФИСЫ</li>
				</ul>
			</nav>
		</aside>
		<section>
			<h2>наши офисы</h2>
		</section>
		<div style="position:relative;overflow:hidden;left:30px;top:-30px">
		<a href="https://yandex.ru/maps/?um=constructor%3A4d707c57f4dbb52fe67a2fa9d35f407a9148ecf468c5df5e7e950da57243a0df&source=constructorLink" style="color:#000;font-size:12px;position:absolute;top:2px;left:4px;">Новосибирск</a>
		<iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3A4d707c57f4dbb52fe67a2fa9d35f407a9148ecf468c5df5e7e950da57243a0df&amp;source=constructor" width="680" height="445" style="border:2px solid #00BFFF"></iframe>
		</div>
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