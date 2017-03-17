<?php
include_once str_replace("\\", "/", dirname(__FILE__)) . "/../include/commons.inc.php";
$formArr=formDataFilter($_REQUEST);

$role=$CmdbRole->BackRights();
$url=$CmdbRole->AllowUrl();
$CmdbRole->CheckRights();
if ($formArr['serv']==""){
    $formArr['serv']="kefu";
}
$Serv=$dbConW->get_all("select app from Tbl_service");
$num=$dbConW->get_all("select count(*) as con from Tbl_item where service='".$formArr['serv']."'");
$item=array();
//$item=$dbConW->get_all("select web_url,item,comment from Tbl_item where service='".$formArr['serv']."' order by  create_time asc");
foreach ($url as $key => $value) {
$rs=$dbConW->get_one("select web_url,item,comment from Tbl_item where service='".$formArr['serv']."' and comment='".$value."' order by create_time asc");
    if ($rs){
    $item[]=array("web_url"=>$rs['web_url'],"item"=>$rs['item'],"comment"=>$value);
    }
}

$nums=$num[0]['con'];
//var_dump($data);
//var_dump($Serv);
$smarty->assign("data",$Serv);
$smarty->assign("arr",$item);
$smarty->assign("item",$formArr['serv']);
$smarty->assign("num",$nums);
$smarty->assign("role",$role);
//$smarty->display("main.html");
$h=diff_mobile();
if ($h=="mobile"){
    $smarty->display("mobile_main.html");
}else{
    $smarty->display("main.html");
}
?>
