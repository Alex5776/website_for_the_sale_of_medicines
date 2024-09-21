<?php
session_start();
if ($_SESSION['log'])
header('location: ../index.php');
require_once('connect.php');
$mail = $_POST['mail']; 
$psw = md5($_POST['psw']);
$sel = "SELECT * FROM Пользователи WHERE Почта = '$mail' and Пароль = '$psw'";
 $res = mysqli_query($connect,$sel);
 $num = mysqli_num_rows($res);
 $data = mysqli_fetch_array($res);
$error = false;
if($num == 0 ) {$error[0]="";}
if ($error == false) {
    $_SESSION['PID']=$data['PID'];
    $_SESSION['log']=$data['Имя'];
    $_SESSION['mail']=$data['Почта'];
    $_SESSION['psw']=$data['Пароль'];
    header("location: ../index.php");
    mysqli_close($connect);
}
else {
    $_SESSION['msg']='Вы ввели неправильный логин или пароль, ';
header('location: ../log.php');
mysqli_close($connect);}
?>