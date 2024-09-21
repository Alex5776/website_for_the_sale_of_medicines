<?php
session_start();
    if (!$_SESSION['log']) {
    $_SESSION['msg']='Вы не вошли в аккаунт.';
    header('location: ../shop.php#detailed' . $_POST['TID']);
    }
    else
    if ($_POST['col'] > $_POST['ocol'] || $_POST['ocol']==0){
        $_SESSION['msg']='Недостаточно товара в наличии.';
        header('location: ../shop.php#detailed' . $_POST['TID']);
    }
    else {
    print_r($_POST);
    require_once('connect.php');
    $col=$_POST['col'];
    $PID=$_SESSION['PID'];
    $PVID=$_POST['PV'];
    $TID=$_POST['TID'];
    $sel = "SELECT NID, `Количество` FROM `Наличие` WHERE KTID='$TID'";
    $res = mysqli_query($connect,$sel);
    $data= array();
    while ($row = mysqli_fetch_assoc($res)){
        if ($col<=0)
        {
            break;
        }
        else
        if($col<=$row['Количество']){
        $row['Количество']-=$col;
        $ccol=$col;
        $col=0;
        $ncol=$row['Количество'];
        $NID=$row['NID'];
        $sel = "UPDATE `Наличие` SET `Количество`='$ncol' where NID='$NID' ";
        mysqli_query($connect,$sel);
        $sql = "insert into `Заказы` (KPID, KNID, `Количество`, KPVID, `Дата`) VALUES ('$PID', '$NID', '$ccol', '$PVID', NOW())";
        mysqli_query($connect,$sql);
        }
        else
        if($col>$row['Количество']){
            echo 'Третий';
            $col-=$row['Количество'];
            $ccol=$row['Количество'];
            $row['Количество']=0;
            $NID=$row['NID'];
            $sel = "UPDATE `Наличие` SET `Количество`=0 where NID='$NID' ";
            mysqli_query($connect,$sel);
            $sql = "insert into `Заказы` (KPID, KNID, `Количество`, KPVID, `Дата`) VALUES ('$PID', '$NID', '$ccol', '$PVID', NOW())";
            mysqli_query($connect,$sql);
        }
    }
    $_SESSION['usp']='Заказ успешно оформлен.';
    header('location: ../shop.php#detailed' . $_POST['TID']);
    mysqli_close($connect);
}
?>