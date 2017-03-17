<?php
session_destroy();
setcookie('cookie_for_op_platform','',time()+60*60*24,"/",".easemob.com");
setcookie('easemob_platform','',time()+60*60*24,"/",".easemob.com");
//setcookie('pass','',time()+60*60*24,"/");
header("location: /app/auth/login.php");
?>
