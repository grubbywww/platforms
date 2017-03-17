<?php
include_once str_replace("\\", "/", dirname(__FILE__)) . "/../include/commons.inc.php";
$formArr=formDataFilter($_REQUEST);
switch ($formArr['opt']){
    case "add":

    $url=$formArr['url'];
    $murl=$formArr['murl'];
    $comment=$formArr['comment'];
    $serv=$formArr['serv'];
    preg_match_all('(\d+)',$url,$ports);
    $port=$ports[0][0];
$result=$dbConW->get_all("select * from Tbl_item where comment='".$comment."' or web_url='".$url."'");
  if (!$result){
if ($ports[0][0]==Null){
    $arr['code']=false;
}else{

    $dbConW->query("insert into Tbl_item (`service`,`web_url`,`comment`,`create_time`) values ('".$serv."','".$url."','".$comment."','".date("Y-m-d H:i:s")."')");
    $ids=$dbConW->insert_id();
    $rs = config_nginx($ids,$murl,$port);
    $arr['code']=true;
}

$num=$dbConW->get_all("select count(*) as con from Tbl_item where service='".$serv."'");
$arr['num']=$num[0]['con'];

         echo json_encode($arr);

    }else{
        $arr['code']=false;
         echo json_encode($arr);
    }
    break;
    case "del":
    $item=$formArr['item'];
    $serv=$formArr['serv'];
    $url=$formArr['url'];
    preg_match_all('(\d+)',$url,$ports);
    $port=$ports[0][0];
    remove_nginx($port);
    exec('sudo /data/apps/opt/nginx/sbin/nginx -t 2>&1 > /dev/stdout',$results);
    if (strpos($results[0],'ok')!==false){
    $result=$dbConW->query("delete from Tbl_item where service='".$serv."' and item='".$item."'");
    $num=$dbConW->get_all("select count(*) as con from Tbl_item where service='".$serv."'");
    $arr['num']=$num[0]['con'];
    if($result){
        $arr['code']=true;
        echo json_encode($arr);
    }else{
         $arr['code']=false;
        echo json_encode($arr);
    }
    }else{
           $arr['code']=false;
        echo json_encode($arr);
    }

    break;
    case "edititem":
     $item=$formArr['item'];
     $url=$formArr['url'];
     $desc=$formArr['desc'];
     $murl=$formArr['murl'];
     preg_match_all('(\d+)',$url,$ports);
    $port=$ports[0][0];
    $result=$dbConW->get_all("select * from Tbl_item where comment='".$desc."' and web_url='".$url."'");
if (!$result){
    $rs=$dbConW->get_one("select * from Tbl_item where item='".$item."'");
    preg_match_all('(\d+)',$rs['web_url'],$oldports);
    $oldport=$oldports[0][0];
    config_nginx($item,$murl,$port,$oldport);
    exec('sudo /data/apps/opt/nginx/sbin/nginx -t 2>&1 > /dev/stdout',$results);
    if (strpos($results[0],'ok')!==false){
    $dbConW->query("update Tbl_item set web_url='".$url."',comment='".$desc."' where item=".$item);
    echo true;
    }else{
    echo false;
    }
 }else{
     echo false;
 }
    break;
    case "check_port":
    $url=$formArr['url'];
    $result=$dbConW->get_all("select * from Tbl_item where web_url='".$url."'");
    $ret=check_port($url);
    if (!$result){
        if ($ret == ""){
         $arr['code']="1";
        }else{
        $arr['code']="3";
        }
    }else{
        if ($ret == ""){
         $arr['code']="2";
        }else{
        $arr['code']="3";
        }
    }
     echo json_encode($arr);
    break;
}


?>
