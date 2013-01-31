<?php
require_once("config.php");
require_once("module/Classes/PHPExcel.php");
require_once 'module/Classes/PHPExcel/IOFactory.php';
$ui->assign("nowpage", "data_export.php");

@ $db = new mysqli("$db_host", "$db_user", "$db_password", "$db_database");

if (mysqli_connect_errno()) {
    $ui->assign("state", "error");
    $ui->assign("error_info", "无法连接数据库。");
    $ui->display("data_export.tpl");
    exit;
}

$query = "SELECT * FROM contents ORDER BY id DESC";
$result = $db->query($query);
while ($row = $result->fetch_object()) {
    $accounts[] = array("date"=>$row->date, "contents"=>$row->contents,
            "norms"=>$row->norms, "amount"=>$row->amount, "area"=>$row->area,
            "unit_price"=>$row->unit_price, "price"=>$row->price);
}

$excel_object = new PHPExcel();

$excel_object->getProperties()->setTitle("账目汇总表");
$excel_object->getProperties()->setCreator("$shop_name");

$excel_object->setActiveSheetIndex(0);

$excel_object->getActiveSheet()->setTitle("账目汇总表");

$excel_object->getActiveSheet()->setCellValue("A1", "$shop_name 账目汇总表");
$excel_object->getActiveSheet()->getStyle("A1")->getFont()->setBold(true);
$excel_object->getActiveSheet()->getStyle("A1")->getFont()->setSize(18);
$excel_object->getActiveSheet()->getStyle('A1')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
$excel_object->getActiveSheet()->mergeCells("A1:G1");
$excel_object->getActiveSheet()->setCellValue("A2", "日期");
$excel_object->getActiveSheet()->setCellValue("B2", "内容");
$excel_object->getActiveSheet()->setCellValue("C2", "规格");
$excel_object->getActiveSheet()->setCellValue("D2", "数量");
$excel_object->getActiveSheet()->setCellValue("E2", "面积");
$excel_object->getActiveSheet()->setCellValue("F2", "单价");
$excel_object->getActiveSheet()->setCellValue("G2", "金额");
for ($i = 'A'; $i <= 'G'; $i++) {
    $excel_object->getActiveSheet()->getStyle($i."2")->getFont()->setBold(true);
    $excel_object->getActiveSheet()->getStyle($i."2")->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
}
$total = count($accounts);
for ($i = 0; $i < $total; $i++) {
    $row = $i + 3;
    $excel_object->getActiveSheet()->setCellValue("A".$row, $accounts[$i]['date']);
    $excel_object->getActiveSheet()->getStyle("A".$row)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_LEFT);
    $excel_object->getActiveSheet()->setCellValue("B".$row, $accounts[$i]['contents']);
    $excel_object->getActiveSheet()->getStyle("B".$row)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_LEFT);
    $excel_object->getActiveSheet()->setCellValue("C".$row, $accounts[$i]['norms']);
    $excel_object->getActiveSheet()->getStyle("C".$row)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_LEFT);
    $excel_object->getActiveSheet()->setCellValue("D".$row, $accounts[$i]['amount']);
    $excel_object->getActiveSheet()->getStyle("D".$row)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_LEFT);
    $excel_object->getActiveSheet()->setCellValue("E".$row, $accounts[$i]['area']);
    $excel_object->getActiveSheet()->getStyle("E".$row)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_LEFT);
    $excel_object->getActiveSheet()->setCellValue("F".$row, $accounts[$i]['unit_price']);
    $excel_object->getActiveSheet()->getStyle("F".$row)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_LEFT);
    $excel_object->getActiveSheet()->setCellValue("G".$row, $accounts[$i]['price']);
    $excel_object->getActiveSheet()->getStyle("G".$row)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_LEFT);
}
$excel_object->getActiveSheet()->getRowDimension("1")->setRowHeight(23);
$excel_object->getActiveSheet()->getColumnDimension("A")->setAutoSize(true);
$excel_object->getActiveSheet()->getColumnDimension("B")->setWidth(20);
$excel_object->getActiveSheet()->getColumnDimension("C")->setAutoSize(true);
$excel_object->getActiveSheet()->getColumnDimension("D")->setAutoSize(true);
$excel_object->getActiveSheet()->getColumnDimension("E")->setAutoSize(true);
$excel_object->getActiveSheet()->getColumnDimension("F")->setAutoSize(true);
$excel_object->getActiveSheet()->getColumnDimension("G")->setAutoSize(true);

$excel_writer = PHPExcel_IOFactory::createWriter($excel_object, 'Excel5');
$excel_writer->save("download/shop.xls");

$ui->display("data_export.tpl");

?>