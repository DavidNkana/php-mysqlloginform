<?php

$sname= "sql306.epizy.com";
$unmae= "epiz_30495259";
$password = "F65czIjWC0ARlv";
$db_name = "epiz_30495259_loginstuffdb";

$conn = mysqli_connect($sname, $unmae, $password, $db_name);

if (!$conn) {
	echo "Connection failed!";
}else {
	echo "database connected";	
}
