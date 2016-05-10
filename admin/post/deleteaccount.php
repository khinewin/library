<?php
include("../confs/auth.php");
include("../confs/config.php");
session_start();
$id=$_GET['id'];

$sql="DELETE FROM admins where id=$id";
mysql_query($sql);
unset($_SESSION['auth']);

header("location: ../");
?>