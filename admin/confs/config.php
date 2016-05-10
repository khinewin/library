<?php
$dbhost="localhost";
$dbuser="root";
$dbpass="apple";
$dbname="library";

$conn=mysql_connect($dbhost, $dbuser, $dbpass);
mysql_select_db($dbname, $conn);
?>