<?php
include("../confs/auth.php");
include("../confs/config.php");

$id=$_GET['id'];
$sql="DELETE FROM categories where id=$id";
mysql_query($sql);

header("location: ../categories");
?>