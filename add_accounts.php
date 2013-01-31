<?php
require_once("config.php");
$ui->assign("nowpage", "add_accounts.php");

@ $db = new mysqli("$db_host", "$db_user", "$db_password", "$db_database");

$ui->assign("state", "ok");
if (mysqli_connect_errno()) {
    $ui->assign("state", "error");
    $ui->display("manage.tpl");
    exit;
}

@ $date = $_GET['date'];
if (isset($date)) {
    $date = $_GET['date'];
    $contents = $_GET['contents'];
    $norms = $_GET['norms'];
    $amount = $_GET['amount'];
    $area = $_GET['area'];
    $unit_price = $_GET['unit_price'];
    $price = $unit_price * $amount;
    
    $query = "INSERT INTO contents VALUES ( NULL, \"$date\", \"$contents\", \"$norms\", $amount, $area, $unit_price, $price )";
    $db->query($query);
    
    $ui->assign("state", "ok");
    $ui->display("add.tpl");
    exit;
}

$ui->assign("state", "add");
$ui->display("add.tpl");
?>
