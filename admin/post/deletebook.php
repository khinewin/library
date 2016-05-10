<?php
include("../confs/auth.php");
include("../confs/config.php");

$id=$_GET['id'];
$sql="DELETE FROM books where id=$id";
mysql_query($sql);

header("location: ../books");
?>
