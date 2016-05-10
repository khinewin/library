<?php
include("../confs/config.php");

$name=$_POST['name'];
$email=$_POST['email'];
$password=$_POST['password'];
$password_confirm=$_POST['password_confirm'];
$phone=$_POST['phone'];
$encrypt_password=md5($password);


$result=mysql_query("SELECT * FROM admins WHERE email='$email'");
$row=mysql_fetch_assoc($result);

if($email==$row['email'])
{

    header("location: ../register.php");
}

elseif($password!=$password_confirm) {

    header("location: ../register.php");
}

else {
  mysql_query("INSERT INTO admins (name, email, password, phone, created_at, modified_at) VALUES ('$name', '$email', '$encrypt_password', '$phone', now(), now())");

    header("location: ../");
}

?>

<?php echo $username ?>
<?php echo $email ?>
<?php echo $password ?>
<?php echo $password_confirm ?>
<?php echo $birth_date ?>
<?php echo $phone ?>
<?php echo $address ?>