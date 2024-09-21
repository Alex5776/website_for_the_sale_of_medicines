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
			if ($_SESSION['log'])
			echo '<font size=4px>' . $_SESSION['log'] . '</font>' . ' | ' . '<a href="inc/sys_off.php">выйти</a>';
			else
			echo '<a href="log.php" >Войти</a>';
			?>
			</div>
		</header>
		<nav>
			<ul class="top-menu">
				<li class="active">ТОВАРЫ</li>
				<li><a href="cont.php">КОНТАКТЫ</a></li>
				<li><a href="about_com.php">О НАС</a></li>
			</ul>
		</nav>
		<?php
		require_once('inc/connect.php');
		$sel = "SELECT `Товары`.*, SUM(`Количество`) AS `Количество` FROM `Товары` INNER JOIN `Наличие` ON `Наличие`.KTID=`Товары`.TID GROUP BY KTID";
 		$res = mysqli_query($connect,$sel);
		$goods = array();
		while( $row = mysqli_fetch_assoc($res)){
			$goods[]=$row;
		}
		$sel = "SELECT * FROM `Пункты_выдачи`";
 		$res = mysqli_query($connect,$sel);
		$PV = array();
		while( $row = mysqli_fetch_assoc($res)){
			$PV[]=$row;
		}
		?>
		<goods>
			<?foreach ($goods as $gd):?>
				<figure>
					<img src="<?php echo $gd['Картинка'];?>" width='400' height='400'>
					<a><?echo 'Препарат: ' . $gd['Название'];?></a>
					<a href="<?php echo '#detailed' . $gd['TID']?>" style="float: right;color:#555">Подробнее</a>
					<div id="<?php echo 'detailed' . $gd['TID']?>" class="modal">
  						<div class="modal-dialog">
    						<div class="modal-content">
      							<div class="modal-header">
        							<h2 class="modal-title"><?php echo $gd['Название'];?></h2>
        							<a href="#close" title="Close" class="close">×</a>
      							</div>
      							<div class="modal-body">
								  <?php if ($gd['Рецептурный']==1){?>
										<p style="color: #00BFFF;font-size:16px;position:absolute;left:60px;top:5px;text-shadow: 1px 0 1px #fff, 0 1px 1px #fff, -1px 0 1px #fff, 0 -1px 1px #fff;"><img src="img/rec.png" width="16" height="22" style="outline: 0px;float:left;">&nbspПО РЕЦЕПТУ</p>
									<?php } else {?>
										<p style="color: #00BFFF;font-size:16px;position:absolute;left:60px;top:5px;text-shadow: 1px 0 1px #fff, 0 1px 1px #fff, -1px 0 1px #fff, 0 -1px 1px #fff;"><img src="img/rec.png" width="16" height="22" style="outline: 0px;float:left;">&nbspБЕЗ РЕЦЕПТА</p>
									<?php }?> 
								  <img src="<?php echo $gd['Картинка'];?>" width='400' height='400'>    
        							<p style="font-size:18px"><?php echo str_replace('. ', '.<br>', $gd['Описание']);?></p>
									<p style="font-size:18px;color:#00BFFF;"><?php echo 'В наличии: ' . $gd['Количество'] . ' шт.';?>
									<font style="font-size:18px;color:#00BFFF;float:right;"><?php echo 'Цена: ' . $gd['Цена'] . ' Руб.';?></font></p>
									<form action="inc/order.php" method="POST">
									<div>
									<label for="col" style="font: 16px 'Oswald', sans-serif;color:#00BFFF;"><b>Введите количество</b></label><br>
         							 <input type="text" placeholder="Количество" name="col" required>
									</div>
									 <div>
									 <label for="PV" style="font-family: none; font: 16px 'Oswald', sans-serif;color:#00BFFF;"><b>Выберите пункт выдачи</b></label><br>
         							 <select name="PV" required>
									<option value="<?php echo $PV[0]['PVID'];?>"><?php echo $PV[0]['Название'];?></option>
									<option value="<?php echo $PV[1]['PVID'];?>"><?php echo $PV[1]['Название'];?></option>
									<option value="<?php echo $PV[2]['PVID'];?>"><?php echo $PV[2]['Название'];?></option>
									<option value="<?php echo $PV[3]['PVID'];?>"><?php echo $PV[3]['Название'];?></option>
									<option value="<?php echo $PV[4]['PVID'];?>"><?php echo $PV[4]['Название'];?></option>
									</select>
									<input type="hidden" name="ocol" value="<?php echo $gd['Количество']?>" />
       								<button type="submit" name="TID" value="<?php echo $gd['TID']  ?>" style="float:right">Заказать</button>
									</div>
									</form>
										<?php if ($_SESSION['msg']){ ?>
										<p style="font-size:16px; color: red;"> <?php echo $_SESSION['msg'];?></p>
										<?php }?>
										<?php if ($_SESSION['usp']){ ?>
										<p style="font-size:16px; color:#00BFFF;"> <?php echo $_SESSION['usp'];?></p>
										<?php }?>
      							</div>
    						</div>
  						</div>
					</div>
				</figure>
			<?endforeach?>
			<?php unset($_SESSION['msg']); ?>
			<?php unset($_SESSION['usp']); ?>
		</goods>
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
	</div>
</body>
</html>