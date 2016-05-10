<?php
include("../confs/config.php");
include("../confs/auth.php");


$id=$_POST['id'];

$password_old=$_POST['password_old'];
$password=$_POST['password'];
$password_confirm=$_POST['password_confirm'];

$h_password_old=md5($password_old);
$h_password=md5($password);

$result=mysql_query("SELECT * FROM admins where password='$h_password_old' AND id=$id");
$row=mysql_fetch_assoc($result);

if (!($row['password']))
{
    $_SESSION['errPassOld'] = "Invalid Current Password";
    header("location: ../password?id=$id");
}

elseif ($password != $password_confirm)
{

    $_SESSION['errPassConfirm']= "New Password is not Confirm";
    header("location: ../password?id=$id");

}

else
{
    mysql_query("UPDATE admins SET password='$h_password', modified_at=now() WHERE id=$id ");
    $_SESSION['Confirm']= "Your password have been updated";
    header("location: ../user?id=$id");

}

?>