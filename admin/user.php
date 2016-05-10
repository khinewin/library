<?php include("confs/auth.php"); ?>
<?php include("confs/config.php"); ?>
<?php $id=$_GET['id']; $users=mysql_query("SELECT * FROM admins where id=$id"); ?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>E-Library</title>

    <!-- Bootstrap Core CSS -->
    <link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../bootstrap/css/simple-sidebar.css" rel="stylesheet">
    <link href="../bootstrap/css/style.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

<div id="wrapper">

    <!-- Sidebar -->
    <div id="sidebar-wrapper">
        <ul class="sidebar-nav">
            <li class="sidebar-brand">
                <a href="../">
                   E-Library
                </a>
            </li>
           <?php include("nav-menu.php"); ?>
        </ul>
    </div>
    <!-- /#sidebar-wrapper -->
    <div class="panel panel-footer"><h3>E-Library <small>User Information</small></h3>
    </div>
    <!-- Page Content -->
    <div id="page-content-wrapper">
        <div class="container-fluid">
            <div class="row">

                <div class="col-lg-12">

                    <?php $user=mysql_fetch_assoc($users); ?>
                    <span class="glyphicon glyphicon-user"></span> Username : <?php echo $user['name']; ?>
                    <br><br>
                        <span class="glyphicon glyphicon-envelope"></span> E-Mail : <?php echo $user['email']; ?>
                    <br><br>
                    <span class="glyphicon glyphicon-phone-alt"></span> Phone : <?php echo $user['phone']; ?>
                    <br><br>
                    <span class="glyphicon glyphicon-time"></span> Created at : <?php echo $user['created_at']; ?>
                    <br><br>
                    <span class="glyphicon glyphicon-time"></span> Your password is updated at : <?php echo $user['modified_at']; ?>
                    <span class="glyphicon glyphicon-edit"></span> <a href="password?id=<?php echo $user['id'] ?>">Edit your password</a>
                    <br><br>
                    <span class="glyphicon glyphicon-remove-sign"></span> <a href="post/deleteaccount?id=<?php echo $user['id']?>">Delete this account</a>


                    
                </div>
            </div>
        </div>
    </div>
    <!-- /#page-content-wrapper -->

</div>
<!-- /#wrapper -->

<!-- jQuery -->
<script src="js/jquery.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>

<!-- Menu Toggle Script -->
<script>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
</script>






<script src="../bootstrap/js/bootstrap.min.js"></script>
<script src="../bootstrap/js/jquery.min.js"></script>
</body>
</html>