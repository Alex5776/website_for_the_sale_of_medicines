<?php
$connect = mysqli_connect('localhost', 'root', '', 'FCNC');
if (!$connect) {
    die('Ошибка подключения к БД!');
}
?>