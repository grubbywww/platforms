<?php
include_once str_replace("\\", "/", dirname(__FILE__)) . "/../../include/commons.inc.php";
$formArr=formDataFilter($_REQUEST);

$role=$CmdbRole->BackRights();
$CmdbRole->CheckRights();

$Serv=$dbConW->get_all("select app from Tbl_service");
$user=$dbConW->get_all("select user from Tbl_role");
$group=$dbConW->get_all("select groupname,username,url from Tbl_group");
$username=$dbConR->get_all("select username from auth");
$item=$dbConW->get_all("select web_url,comment from Tbl_item");
for($i=0;$i<count($Serv);$i++){
    $data[]=$Serv[$i]['app'];
}
//var_dump($data);
//var_dump($Serv);
$smarty->assign("data",$Serv);
$smarty->assign("arr",$user);
$smarty->assign("group",$group);
$smarty->assign("item",$item);
$smarty->assign("user",$username);

$smarty->assign("role",$role);
$smarty->display("admin/group.html");
?>
