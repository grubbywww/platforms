<?php
include_once str_replace("\\", "/", dirname(__FILE__)) . "/../../include/commons.inc.php";
$formArr=formDataFilter($_REQUEST);
switch ($formArr['opt']){
    case "adduser":
    $user=$formArr['user'];
    $result=$dbConW->get_all("select * from Tbl_role where user='".$user."'");
  if (!$result){
     $dbConW->query("insert into Tbl_role (`user`,`role`) values ('".$user."','super')");

        echo true;

    }else{
         echo false;
    }
    break;
    case "additem":
    $app=$formArr['item'];
    $comment=$formArr['comment'];
    $result=$dbConW->get_all("select * from Tbl_service where app='".$app."'");
  if (!$result){
     $dbConW->query("insert into Tbl_service (`app`,`comment`,`create_time`) values ('".$app."','".$comment."','".date("Y-m-d H:i:s")."')");

        echo true;

    }else{
        echo false;
    }
    break;
    case "deluser":
    $user=$formArr['user'];
    $result=$dbConW->query("delete from Tbl_role where user='".$user."'");
    if($result){
        echo "success";
    }
    break;
      case "delitem":
    $item=$formArr['item'];
    $result=$dbConW->query("delete from Tbl_service where app='".$item."'");
    if($result){
        echo "success";
    }
    break;
     case "addgroup":
    $url=implode("<br>" ,$formArr['url']);
    $user=implode("<br>",$formArr['user']);
    $group=$formArr['group'];
    $dbConW->query("insert into Tbl_group (`groupname`,`username`,`url`) values ('".$group."','".$user."','".$url."')");

    echo true;
    break;

    case "chgroup":
    $user=$formArr['user'];
    $url=$formArr['url'];
    $group=$formArr['group'];
    $arr=explode("<br>", $user);
    $array=explode("<br>", $url);
    $rs=$dbConW->get_all("select web_url,comment from Tbl_item");
    $rt=$dbConR->get_all("select username from auth");
    $ss="<form class='form-horizontal'>";
    $ss.="<div class='form-group'><label class='control-label col-md-2'>USERNMAE</label><div class='col-md-10'><select multiple='multiple' class='multi-select' id='my_multi_select1' name='my_multi_select1[]'>";

    for ($i=0; $i<count($rt);$i++) {

         if (in_array($rt[$i]['username'], $arr)){
         $ss.="<option selected>".trim($rt[$i]['username'])."</option>";
        }else{
         $ss.="<option>".trim($rt[$i]['username'])."</option>";
        }
    }
    $ss.="</select></div></div><div class='form-group last'><label class='control-label col-md-2'>URL</label><div class='col-md-10' id='show_url'><select multiple='multiple' class='multi-select' id='my_multi_select2' name='my_multi_select2[]'>";
       for ($i=0; $i<count($rs);$i++) {

         if (in_array($rs[$i]['comment'], $array)){
         $ss.="<option selected>".trim($rs[$i]['comment'])."</option>";
        }else{
         $ss.="<option>".trim($rs[$i]['comment'])."</option>";
        }
    }
    $ss.="</select></div></div></form>";
    $ss.="<script>jQuery(document).ready(function(){ComponentsDropdowns.init();});</script>";
    echo $ss;
    break;

    case "update_group":
    $url=$formArr['url'];
    $user=$formArr['user'];
    $group=$formArr['group'];
    $arr=explode(" ", $url);
    $array=explode(" ", $user);
    $web_url=implode("<br>", $arr);
    $username=implode("<br>",$array);
    $dbConW->query("update Tbl_group set url='".$web_url."',username='".$username."' where groupname='".$group."'");
    echo true;
    break;
    case "removegroup":
    $group=$formArr['group'];
    $dbConW->query("delete from Tbl_group  where groupname='".$group."'");
    echo true;
    break;
}


?>
