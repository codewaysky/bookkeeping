<?php
$shop_name = "CodeWaySky";

require_once("libs/Smarty.class.php");
$ui = new Smarty;
$ui->setTemplateDir("templates_smarty");
$ui->setCompileDir("templates_c");
$ui->setCacheDir("cache");
$ui->setConfigDir("configs");

$ui->assign("shop_name", $shop_name);
$ui->assign("css_position", "templates/default/style.css");
$ui->assign("contents", array("增加账目"=>"add_accounts.php", "账目管理"=>"manage_accounts.php", "数据导入导出"=>"data.php"));
?>
<?php

$db_host = "127.0.0.1";
$db_user = "root";
$db_password = "root";
$db_database = "shop";

?>
