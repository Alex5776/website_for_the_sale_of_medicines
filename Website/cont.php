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
				<li class="active">КОНТАКТЫ</li>
				<li><a href="about_com.php">О НАС</a></li>
			</ul>
		</nav>
	
	<div class="contcont">
		<div>
		<p style="font-size: 40px;">Электронная почта:</p>
			<p><img src="img/mail.png" width='30' height='30'>
			ad-FCNC@fcnc.com&nbsp&nbsp&nbsp&nbspПредложения о сотрудничестве</p>
			<p><img src="img/mail.png" width='30' height='30'>
			op-FCNC@fcnc.com&nbsp&nbsp&nbsp&nbspОтдел продаж</p>
			<p><img src="img/mail.png" width='30' height='30'>
			dc-FCNC@fcnc.com&nbsp&nbsp&nbsp&nbspПо поводу доставки</p>
			<p><img src="img/mail.png" width='30' height='30'>
			jb-FCNC@fcnc.com&nbsp&nbsp&nbsp&nbsp&nbspЖалобы на товар</p>
			<p><img src="img/mail.png" width='30' height='30'>
			FCNC@fcnc.com&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspПо остальным вопросам</p>
		</div>
		<div style="margin: 0px 100px;">
			<p style="font-size: 40px;">Телефоны:</p>
			<p><img src="img/phone.png" width='30' height='30'>
			+543345647526456243</p>
			<p><img src="img/phone.png" width='30' height='30'>
			+543457457845112314</p>
			<p><img src="img/tele2.png" width='30' height='30'>
			+7(977)321-12-21</p>
			<p><img src="img/mts.png" width='30' height='30'>
			+7(913)132-11-31</p>
			<p><img src="img/megaphone.png" width='30' height='30'>
			+7(923)823-33-93</p>

		</div>
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
