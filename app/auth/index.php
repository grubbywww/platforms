<?php
include_once '../config.php';
session_start();

$username=$_POST['username'];
$password=$_POST['password'];


$result=$dbConR->get_all("select username from auth where username='".$username."' and password='".md5($password)."'");
set_time_limit(0);
if (!$result){
$cookie_file=tempnam('./tmp','cookie');//tmp目录需要先建立好
$ch=curl_init();
$login_url='http://ci-ali.easemob.com/j_acegi_security_check';
$curlPost="j_username=".$username."&j_password=".$password;
curl_setopt($ch,CURLOPT_URL,$login_url);
//启用时会将头文件的信息作为数据流输出
curl_setopt($ch,CURLOPT_HEADER,0); //设定是否输出页面内容
curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
curl_setopt($ch,CURLOPT_POST,1); //设置请求发送方式，post或get，CURLOPT_POST或CURLOPT_GET
curl_setopt($ch,CURLOPT_POSTFIELDS,$curlPost);
curl_setopt($ch,CURLOPT_COOKIEJAR,$cookie_file); //保存cookie
curl_exec($ch);
curl_close($ch);
ob_start();
$ch=curl_init();
$login_url2="http://ci-ali.easemob.com";
curl_setopt($ch,CURLOPT_URL,$login_url2);
curl_setopt($ch,CURLOPT_HEADER,0);
curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
curl_setopt($ch,CURLOPT_COOKIEFILE,$cookie_file); //读取cookie
$a=curl_exec($ch);
var_dump($a);
#$buf=ob_get_contents();
$len=ob_get_length();
curl_close($ch);
ob_end_clean();


$logins="false";
    if ($len>1000){
	$rs=$dbConR->get_one("select username from auth where username='".$username."'");
        if ($rs){
        $dbConR->query("update auth set password='".md5($password)."' where username='".$username."'");
	}else{
	$dbConR->query("insert into auth (`username`,`password`) values ('".$username."','".md5($password)."')");
        }
	$logins="true";

    }else{
    $logins="false";
    }

}else{
$logins="true";
}

if($logins=='false') {
    echo "<script>function redirect(){location='/app/auth/login.php';} document.write('fault user or passowrd !<br>redirect for 3 seconds later');setTimeout('redirect()',3000);</script>";

}else{
header('P3P: CP="CURa ADMa DEVa PSAo PSDo OUR BUS UNI PUR INT DEM STA PRE COM NAV OTC NOI DSP COR"');
//setcookie("cookie_for_op_platform",$username,time()+60*60*24,"/");
$my_date=date("Ymd",time());
$code=md5($username.md5($password).$my_date);
setcookie("cookie_for_op_platform",$username,time()+60*60*24,"/",".easemob.com");
setcookie("easemob_platform",$code,time()+60*60*24,"/",".easemob.com");
#setcookie("pass",$password,time()+60*60*24,"/");
$_SESSION['Username']=$username;

header("location:/app/main.php");
//echo "<script>function redirect(){location='/app/main.php';} document.write('WELCOME TO EASEMOB PLATFORM !');setTimeout('redirect()',1000);</script>";
}




?>
