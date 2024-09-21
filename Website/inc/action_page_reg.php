<?php
session_start();
if ($_SESSION['log'])
header('location: ../index.php');
require_once('connect.php');
$log = $_POST['log'];
$mail = $_POST['mail']; 
$psw = $_POST['psw'];
$sel = "SELECT * FROM Пользователи WHERE Почта = '$mail'";
 $res = mysqli_query($connect,$sel);
 $num = mysqli_num_rows($res);
$error = false;
if($num != 0 ) {$error[0]="";}
if ($error == false) {
    $psw = md5($psw);
    $sql = "insert into Пользователи (Имя, Почта, Пароль) values ('$log', '$mail', '$psw')";
    $res1 = mysqli_query($connect,$sql);
    $_SESSION['PID']=$data['PID'];
    $_SESSION['log'] = $log;
    $_SESSION['mail'] = $mail;
    $_SESSION['psw']= $psw;
    header("location: ../index.php");
    mysqli_close($connect);
}
else {
    $_SESSION['msg']='Пользователь с такой электронной почтой уже существует, ';
    header('location: ../reg.php');
     mysqli_close($connect);}
?>