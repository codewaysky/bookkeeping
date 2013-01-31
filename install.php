<?php 
require_once("config.php");

if (isset($db_host) && isset($db_user) && isset($db_password) && isset($db_database)) {
    $ui->assign("state", "installed");
    $ui->display("install.tpl");
    exit;
}

@ $db_host = $_POST['db_host'];
@ $db_user = $_POST['db_user'];
@ $db_password = $_POST['db_password'];
@ $db_database = $_POST['db_database'];

if (!isset($db_host) || !isset($db_user) || !isset($db_password) || !isset($db_database)) {
	$ui->assign("state", "not installed");
	$ui->display("install.tpl");
} else {
	@ $db = new mysqli("$db_host", "$db_user", "$db_password", "$db_database");

	if (mysqli_connect_errno()) {
		$ui->assign("state", "database_connect_error");
		$ui->display("install.tpl");
		exit;
	}

	$query = "CREATE TABLE contents ( id INTEGER NOT NULL AUTO_INCREMENT PRIMARY KEY, 
        date DATE NOT NULL, contents TEXT, norms CHAR(50) NOT NULL, amount INTEGER NOT NULL,
        area FLOAT(4) NOT NULL, unit_price FLOAT(4) NOT NULL, price FLOAT(4) NOT NULL )";
	$db->query($query);
    
    $fd = fopen("config.php", "ab");
    $data = "\n<?php\n".'$db_host = "'.$db_host."\";\n".'$db_user = "'.$db_user.
            "\";\n".'$db_password = "'.$db_password."\";\n".'$db_database = "'.$db_database."\";\n?>";
    fwrite($fd, $data);
    fclose($fd);

	$ui->assign("state", "ok");
	$ui->display("install.tpl");
    $db->close();
}
?>