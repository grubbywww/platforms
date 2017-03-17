<?php
function checkLogin($url='/app/auth/login.php', $note='') {
    if ($_COOKIE['easemob_platform']=="") {
        header('Location:' . $url);
        //echo "<script>function redirect(){location='".$url."';} redirect();</script>";

    }
    if($_SERVER['HTTP_REFERER'] == ''){
        echo "<script>function redirect(){location='/app/auth/login.php';} redirect();</script>";
        //header('Location:/app/auth/login.php');

    }
}


//GET、POST接受
function formDataFilter($dataArr){
        global $filter,$noErrorUrl;
        $refUrlInfo = parse_url($_SERVER[HTTP_REFERER]);
        $thisUrl = trim($_SERVER[HTTP_HOST]);

	//$retUrl = trim($refUrlInfo['host'].":".$refUrlInfo['port']);
        $retUrl = trim($refUrlInfo['host']);
	if ($retUrl != $thisUrl&&!(in_array($_SERVER['PHP_SELF'],$noErrorUrl)||strpos($_SERVER['PHP_SELF'], '/api/')===0)) {
                error('对不起，非法请求');
        }

        foreach ($dataArr as $key=>$val){
                //$dataArr[$key]=addslashes(stripslashes($val));
                $dataArr[$key]=$val;
        }
        return $dataArr;
}

function diff_mobile(){
    $header=$_SERVER['HTTP_USER_AGENT'];
    $variable=array('Linux','iPad','BlackBerry','Android','iPhone','IUC','SymbianOS','Windows Phone');
    foreach ($variable as $value) {
           $pos=strpos($header,$value);
           if ($pos==true){
              return "mobile";
           }
       }
       return "pc";
}

function check_port($url){
exec("netstat -tlunp|awk 'NR !=2 && NR !=1 {print $4}'|awk -F : '{print $2}'",$result);
preg_match_all('(\d+)',$url,$ports);
if (in_array($ports[0][0],$result)){
return $ports[0][0];
}else{
return "";
}

}

function config_nginx($id,$url,$PORT,$oldport=''){
if ($oldport!=''){
  $OLDFILE = NGINX_CONFIG."platform_".$oldport.".conf";
  $result = unlink ($OLDFILE);
}
$FILE = NGINX_CONFIG."platform_".$PORT.".conf";
$myfile = fopen($FILE,"w");
$content = "server{\nresolver 8.8.8.8;\nlisten ".$PORT.";\nssl on;\nssl_session_cache shared:SSL:500m;\nssl_session_timeout 10m;\nssl_protocols TLSv1 TLSv1.1 TLSv1.2;\nssl_certificate /home/easemob/apps/config/nginx/https/platform.op.easemob.com.pem;\nssl_certificate_key /home/easemob/apps/config/nginx/https/platform.op.easemob.com.key;\nlocation /auth{\nproxy_pass http://10.165.99.224:81/auth.php?id=".$id.";\nproxy_pass_request_body off;\nproxy_set_header Content-Length \"\";\nproxy_set_header X-Original-URI \t\$request_uri;\n}\nlocation / {\nproxy_set_header\tHost\t\$host;\nproxy_set_header\tX-Real-IP\t\$remote_addr;\nproxy_set_header\tX-Forwarded-For\t\$proxy_add_x_forwarded_for;\nauth_request /auth;\nproxy_pass ".$url.";\n}\nerror_page 403 = @error403;\nlocation @error403 {\nreturn 302 https://platform.op.easemob.com/app/auth/login.php;\n}\n}";
fwrite($myfile, $content);
fclose($myfile);
system("sudo ".NGINX_RELOAD,$s);
}


?>
