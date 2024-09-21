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
				<li><a href="about_com.php">О НАС</a></li>
			</ul>
		</nav>
	
	<div>
	<div class="content">
		<div style="width: 33%;margin: 200px 50px;">
			<a style="font-size:30px;color:#00BFFF;text-align: center;">
				Фармоцевтическая<br>компания FCNC<BR>
			</a>
			<a>
			Эффективные и действенные препараты против: простуды, гриппа, болей и многого другого
			</a>
		</div>
		<div>
		<img src="img/pic.png" width='640' height='640' style="outline: 1px solid #c9c9c9">
		</div>
	</div>
	<div class="prem">
	<div>
	<img src="img/prt.png" width="50" height="50"><br>
	<a style="color:#00BFFF;">Оплата по факту</a><br>
	<a>Вы оплачиваете товар, только после получения</a>
	</div>
	<div>
	<img src="img/mon.png" width="50" height="50"><br>
	<a style="color:#00BFFF;">Низкие цены</a><br>
	<a>Вы покупаете все товары напрямую у производителя</a>
	</div>
	<div>
	<img src="img/gar.png" width="50" height="50"><br>
	<a style="color:#00BFFF;">Качество</a><br>
	<a>Все лекарства производятся из качественных ингридиентов</a>
	</div>
	<div>
	<img src="img/dst.png" width="50" height="50"><br>
	<a style="color:#00BFFF;">Быстрая доставка</a><br>
	<a>Доставка в пункт выдачи не более, чем за 8 часов</a>
	</div>
	<div>
	<img src="img/pdd.png" width="50" height="50"><br>
	<a style="color:#00BFFF;">Поддержка</a><br>
	<a>Поддержка поможет с любой проблемой и ответит на любой вопрос</a>
	</div>
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
	<figure id="sqr"></figure>
</body>
</html>
