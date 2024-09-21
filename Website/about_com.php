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
					<li class="active">О КОМПАНИ</li>
					<li><a href="about_command.php">КОМАНДА</a></li>
					<li><a href="about_office.php">ОФИСЫ</a></li>
				</ul>
			</nav>
		</aside>
		<section>
			<h2>о компании</h2>
			<p style="font:18px 'Oswald',sans-serif;color:#8e8e8e;"><a style="font:24px 'Oswald',sans-serif;color:#00BFFF;">FCNC</a> - российская интернет компания, одна из крупнейших фармацевтических компаний россии. Компания производит самый популярный в мире рифапаринуксин; этот препарат используется для снижения кровяного давления, за период с начала 2022 по конец 2022 года, его было продано на 989 млрд рублей. Также компания продаёт следующие популярные лекарственные средства: лирика, дифлюкан, зитромакс, виагра, целебрекс, сермион, достинекс, чампикс, липитор. Акции компании FCNC в начале 2022 года включены в базу расчёта Промышленного индекса Доу Джонса, а в конце 2022 года исключены из неё. Штаб-квартира и главный исследовательский центр расположена в Новосибирске.</p>
			<p style="font:18px 'Oswald',sans-serif;color:#8e8e8e;">FCNC (Force of Concentrated Natural Cells - Сила концентрированных натуральных клеток) - название компании обозначает: сила - эффективность; концентрированных - малые дозы; натуральных - натуральность; клеток - на основе полезных клеток. Компания была основана в начале 2022 года и к его концу достигла невероятного успеха, открыв 5 пунктов выдачи по всему новосибирску. </p>
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