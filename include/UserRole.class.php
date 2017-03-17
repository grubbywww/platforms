<?php
require_once 'Model.class.php';
#==================================================================================================
#   Filename: UserRole
#   Note    : 用户权限类
#   Version : 3.0
#   Author  : WangYanJie
#   Update  : 2016-05-05
#==================================================================================================
#[类库sql]


class UserRole extends Model {

        var $user;

     #[构造函数]

    public function __construct($user) {

        $this->user = $user;
        parent::model();
    }

     public function BackRights(){ //返回用户权限
        // global $dbConW;

        $sql="select role from Tbl_role where user='".$this->user."'";
        $ret=parent::$dbConW->get_all($sql);

       for($i=0;$i<count($ret);$i++){
       $arr[]=$ret[$i]['role'];
       }
        if (in_array("super", $arr)){
            $role="super";
        }else{
          $role="guest";
        }
        return $role;
    }

      public function CheckRights(){ //检查权限相应用户进入相应页面
        $nologinUrl = array(
        '/app/admin/admin.php',
        '/app/admin/item.php'
        );
        $role=$this->BackRights();
        if((in_array($_SERVER['PHP_SELF'],$nologinUrl))&& $role!=="super") {
        $this->ErrorLogin("您无权限访问");
        }
    }

    public function ErrorLogin( $note) {
         echo "<script>alert('".$note."');history.go(-1);</script>";


    }
    //返回可以访问页面
    public function AllowUrl(){
       $username=$this->user;
       $sql="select username,groupname,url from Tbl_group";
       $rs=parent::$dbConW->get_all($sql);
       for ($i=0;$i<count($rs);$i++) {
          $arr=explode("<br>",$rs[$i]['username']);
           if (in_array($username, $arr)){
            $arr=explode("<br>",$rs[$i]['url']);
            foreach ($arr as $value) {
               if ($value!=""){
                $url[]=$value;
              }
            }
           }
       }

    return array_unique($url);
    }


}
    ?>
