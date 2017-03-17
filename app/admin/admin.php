<?php
include_once str_replace("\\", "/", dirname(__FILE__)) . "/../../include/commons.inc.php";
$formArr=formDataFilter($_REQUEST);

$role=$CmdbRole->BackRights();
$CmdbRole->CheckRights();

$Serv=$dbConW->get_all("select app from Tbl_service");
$user=$dbConW->get_all("select user from Tbl_role");
for($i=0;$i<count($Serv);$i++){
    $data[]=$Serv[$i]['app'];
}
//var_dump($data);
//var_dump($Serv);
$smarty->assign("data",$Serv);
$smarty->assign("arr",$user);


$smarty->assign("role",$role);
$smarty->display("admin/admin.html");
?>
