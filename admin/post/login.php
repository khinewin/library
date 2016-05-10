<?php
session_start();
include("../confs/config.php");
?>
<?php
$email=$_POST['email'];
$password=$_POST['password'];
$encrypt_password=md5($password);

$result=mysql_query("SELECT * FROM admins where email='$email' AND password='$encrypt_password'");
$row=mysql_fetch_assoc($result);

if($row['email'] && $row['password'])
{
    $_SESSION['auth']=true;
    $_SESSION['auth']=$row ['id'];
    header("location: ../home");

}
else
{
    header("location: ../");
}
?>
