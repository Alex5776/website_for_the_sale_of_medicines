<?php session_start();
if ($_SESSION['log'])
header('location: index.php');?>
<!doctype html>
<html>
<head>
	<meta http-equiv="Content-type" content="text/html; charset=utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=Edge">
	<title>ВХОД</title>
	<link rel="stylesheet" href="css/logreg.css" type="text/css">
	<link rel="stylesheet" href="css/font.css" type="text/css">
</head>
<body>
    <form action="inc/action_page_log.php" method="post">
        <div class="imgcontainer">
          <img src="img/logo.png" alt="Avatar">
        </div>
      
        <div class="container">
          <label for="mail"><b>Электронная почта</b></label>
          <input type="text" placeholder="Введите электронную почту" name="mail" required>
      
          <label for="psw"><b>Пароль</b></label>
          <input type="password" placeholder="Введите пароль" name="psw" required>
      
          <button type="submit">Войти</button>
        </div>
      
        <div class="container" style="background-color:#f1f1f1">
          <button type="button" class="cancelbtn" onclick="window.location.href = 'index.php';">Отмена</button>
          <?php if (!$_SESSION['msg'])
          echo '<span class="psw">У вас нет аккаунта, '; else { echo '<span class="psw">' . $_SESSION['msg']; unset($_SESSION['msg']);}
          ?>
          <a href="reg.php">зарегистрироваться?</a></span>
        </div>
      </form>
      
</body>
</html>