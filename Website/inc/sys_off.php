<?php
session_start();
if (ini_get("session.use_cokies")) {
    $params = session_get_cookie_params();
    setcookie(session_name(),'',time()-42000,
    $params["path"], $params["domain"],
    $params["secure"], $params["httponly"]  
);
}
unset($_SESSION['PID']);
unset($_SESSION['log']);
unset($_SESSION['mail']);
unset($_SESSION['psw']);
session_destroy();
header('Location: ../index.php');
exit();
?>