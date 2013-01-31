<?php
require_once("config.php");
$ui->assign("nowpage", "data.php");

$ui->assign("state", "view");
$ui->display("data_view.tpl");
?>
