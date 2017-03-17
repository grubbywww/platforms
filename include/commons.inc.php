<?php
set_time_limit(0);
header("Content-type: text/html; charset=utf-8");
define("ROOT", str_replace("\\", "/", dirname(__FILE__)) . "/../");
//PHP-Smarty目录
define("ROOT_TEMPLATE", ROOT . "templates/");
//PHP-Smarty cache目录
define("ROOT_TEMPLATE_CACHE", ROOT . "templates_c/");
//NGINX 配置
define("NGINX_CONFIG","/data/apps/config/nginx/conf.d/");
//NGINX 重新加载命令
define("NGINX_RELOAD","/data/apps/opt/nginx/sbin/nginx -s reload");
date_default_timezone_set("Asia/Shanghai");
session_start();
error_reporting(E_ALL);

require_once ROOT . 'lib/smarty/Smarty.class.php';
require_once 'global.func.php';
require_once 'MysqliDb.class.php';
require_once 'UserRole.class.php';
require_once ROOT . 'db/config.inc.php';




//初始化数据库类
$dbConW = new MysqliDb($_dbConfigMaster);
$dbConW->connect($_dbConfigMaster["data"]);
$dbConR = new MysqliDb($_dbConfigAuth);
$dbConR->connect($_dbConfigAuth["data"]);
$nologinUrl = array(
        '/app/auth/login.php'
);


//初始化基本类
//-----------------------------------------------------------------------------

$smarty = new Smarty;
$smarty->template_dir = ROOT_TEMPLATE;
$smarty->compile_dir = ROOT_TEMPLATE_CACHE;
$smarty->debugging = false;
$smarty->caching = false;
$smarty->cache_lifetime = 0;
$CmdbRole=new UserRole($_SESSION['Username']);
if(!(in_array($_SERVER['PHP_SELF'],$nologinUrl))) {
    checkLogin('/app/auth/login.php');
}

?>
