<?php
include_once str_replace("\\", "/", dirname(__FILE__)) . "/../../include/commons.inc.php";
$formArr=formDataFilter($_REQUEST);

$role=$CmdbRole->BackRights();
$CmdbRole->CheckRights();

$Serv=$dbConW->get_all("select app,comment from Tbl_service");


//var_dump($data);
//var_dump($Serv);
$smarty->assign("data",$Serv);

$smarty->assign("role",$role);
$smarty->display("admin/item.html");
?>
