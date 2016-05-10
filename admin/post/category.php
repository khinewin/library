<?php
include("../confs/auth.php");
include("../confs/config.php");

$name=$_POST['name'];
$remark=$_POST['remark'];

$sql="INSERT INTO categories (name, remark) VALUES  ('$name', '$remark')";
mysql_query($sql);

header("location: ../categories");
?>