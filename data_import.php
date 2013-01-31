<?php
require_once("config.php");
require_once("function.php");
$ui->assign("nowpage", "data_import.php");

if (!isset($_FILES['xls'])) {
    $ui->assign("state", "upload");
    $ui->display("data_import.tpl");
    exit;
}

if ($_FILES['xls']['error'] > 0) {
    $ui->assign("state", "error");
    
    switch ($_FILES['xls']['error']) {
        case 1:
            $ui->assign("error_info", "文件超过了UPLOAD_MAX_FILESIZE大小。");
            break;
        case 2:
            $ui->assign("error_info", "文件超过了MAX_FILE_SIZE大小。");
            break;
        case 3:
            $ui->assign("error_info", "文件上传不完整。");
            break;
        case 4:
            $ui->assign("error_info", "没有上传任何文件。");
            break;
        case 6:
            $ui->assign("error_info", "没有在php.ini中指定临时目录。");
            break;
        case 7:
            $ui->assign("error_info", "将文件写入磁盘失败。");
            break;
    }
    $ui->display("data_import.tpl");
    exit;
}

if ($_FILES['xls']['type'] != "application/vnd.ms-excel" && 
    $_FILES['xls']['type'] != "application/vnd.openxmlformats-officedocument.spreadsheetml.sheet") {
    $ui->assign("state", "error");
    $ui->assign("error_info", "您上传的文件不是Excel电子表格文档。");
    $ui->display("data_import.tpl");
    exit;
}

$upfile = "upload/".$_FILES['xls']['name'];
if (is_uploaded_file($_FILES['xls']['tmp_name'])) {
    move_uploaded_file($_FILES['xls']['tmp_name'], $upfile);
} else {
    $ui->assign("state", "error");
    $ui->assign("error_info", "发生意外错误。");
    $ui->display("data_import.tpl");
    exit;
}

// 开始进行Excel文档处理

require_once 'module/Classes/PHPExcel.php';
require_once 'module/Classes/PHPExcel/IOFactory.php';

if (!file_exists($upfile)) {
    $ui->assign("state", "error");
    $ui->assign("error_info", "找不到已上传的文件。");
    $ui->display("data_import.tpl");
    exit;
}

$excel_object = PHPExcel_IOFactory::load("$upfile");
$excel_totalrow = $excel_object->getActiveSheet()->getHighestRow();
$excel_totalcol = $excel_object->getActiveSheet()->getHighestColumn();

for ($i = 3; $i <= $excel_totalrow; $i++) {
    for ($j = 'A'; $j <= $excel_totalcol; $j++) {
        $data = $excel_object->getActiveSheet()->getCell($j.$i)->getCalculatedValue();
        if ($j == 'A') {
            $excel_data[$i][] = date("Y-m-d", PHPExcel_Shared_Date::ExcelToPHP($data));
        } else {
            $excel_data[$i][] = $data;
        }
    }
}

@ $db = new mysqli("$db_host", "$db_user", "$db_password", "$db_database");

if (mysqli_connect_errno()) {
    $ui->assign("state", "error");
    $ui->assign("error_info", "在写入数据时无法连接数据库。");
    $ui->display("data_import.tpl");
    exit;
}

for ($i = 3; $i <= $excel_totalrow; $i++) {
    insert_data($db, $excel_data[$i][0], $excel_data[$i][1], $excel_data[$i][2], $excel_data[$i][3], $excel_data[$i][4], $excel_data[$i][5], $excel_data[$i][6]);
}

$ui->assign("state", "ok");
$ui->display("data_import.tpl");
?>


















