<?php

$sname= "sql5.freesqldatabase.com";
$unmae= "sql5455858";
$password = "v3WxVaZTGU";
$db_name = "sql5455858";

$conn = mysqli_connect($sname, $unmae, $password, $db_name);

if (!$conn) {
	echo "Connection failed!";
}
