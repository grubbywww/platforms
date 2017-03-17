<?php

include_once '../config.php';


session_start();

$username='wangyanjie';
$password='wyj821024s';

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


echo $len;




?>
