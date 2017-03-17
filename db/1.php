<?php
include_once "../include/MysqliDb.class.php";
include_once "config.inc.php";
#$conn=mysql_connect("127.0.0.1","root","easemob") or die("error connecting");

$dbConW = new MysqliDb($_dbConfigMaster);
$dbConW->connect($_dbConfigMaster["data"]);
$arr=$dbConW->get_all("select * from Tbl_item");
var_dump($arr);

?>
