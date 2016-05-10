<?php include("confs/auth.php"); ?>
<?php include("confs/config.php"); ?>

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

    <div class="panel panel-footer"><h3>E-Library</h3>
    </div>
    <!-- Page Content -->
    <div id="page-content-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <h3>Welcome to E-library Admin Panel</h3>
                    <br><br>
                    <li>View your <a href="/">Web Site</a></li>
                    <br><br>
                    <li>when you want manage the books and go to <a href="books"><span class="glyphicon glyphicon-bullhorn"></span> Books</a></li>
                    <br><br>
                    <li>when you want manage the categories of book and go to <a href="categories"><span class="glyphicon glyphicon-list"></span> Category</a></li>
                    <br><br>
                    <li>if you finish session and you should <a href="post/logout"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>


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