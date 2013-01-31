<?php
require_once("config.php");
$ui->assign("nowpage", "manage_accounts.php");

@ $db = new mysqli("$db_host", "$db_user", "$db_password", "$db_database");

$ui->assign("state", "ok");
if (mysqli_connect_errno()) {
    $ui->assign("state", "error");
    $ui->display("manage.tpl");
    exit;
}

@ $edit = $_GET['edit'];
@ $delete = $_GET['delete'];
@ $id = $_GET['id'];
if (isset($edit)) {
    $query = "SELECT * FROM contents WHERE id = $edit";
    $result = $db->query($query);
    $rows = $result->fetch_array();
    $ui->assign("rows", $rows);
    $ui->assign("edit", $edit);
    $ui->display("manage_edit.tpl");
    $db->close();
    exit;
} else if (isset($delete)) {
    $query = "DELETE FROM contents WHERE id = $delete";
    $db->query($query);
} else if (isset($id)) {
    $id = $_GET['id'];
    $date = $_GET['date'];
    $contents = $_GET['contents'];
    $norms = $_GET['norms'];
    $amount = $_GET['amount'];
    $area = $_GET['area'];
    $unit_price = $_GET['unit_price'];
    $price = $unit_price * $amount;
    
    $query = "UPDATE contents SET date = \"$date\", contents = \"$contents\", norms = \"$norms\",
    amount = $amount, area = $area, unit_price = $unit_price, price = $price WHERE id = $id";
    $db->query($query);
}

$query = "SELECT * FROM contents ORDER BY id DESC;";
$result = $db->query($query);
$accounts = array();
while ($row = $result->fetch_object()) {
    $accounts[] = array("id"=>$row->id, "date"=>$row->date, "contents"=>$row->contents,
        "norms"=>$row->norms, "amount"=>$row->amount, "area"=>$row->area,
        "unit_price"=>$row->unit_price, "price"=>$row->price);
}

$ui->assign("accounts", $accounts);
$ui->display("manage.tpl");
$db->close();
?>
