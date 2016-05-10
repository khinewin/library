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
    <div class="panel panel-footer"><h3>E-Library <small>New Book</small></h3>
        <a class="glyphicon glyphicon-dashboard" href="home">Dashboard</a> <a class="glyphicon glyphicon-bullhorn" href="books">Books</a>
    </div>
    <!-- Page Content -->
    <div id="page-content-wrapper">

        <div class="container">

            <div class="row">
                <div class="col-lg-6">
                    <form class="form-horizontal" role="form" method="POST" action="post/book" enctype="multipart/form-data">


                        <div class="form-group">
                            <label class="col-md-4 control-label">Book Name</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control" name="name" id="name" placeholder="Book Name" required>

                            </div>
                        </div>


                        <div class="form-group">
                            <label class="col-md-4 control-label">Author Name</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control" name="author_name" id="author_name" placeholder="Author Name" required>

                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-4 control-label">Categories</label>

                            <div class="col-md-6">
                                <select class="form-control" name="category_id" id="category_id" placeholder="Remark category" required>
                                    <option>-- Choose --</option>
                                    <?php $cats=mysql_query("SELECT * FROM categories");
                                            while($cat=mysql_fetch_assoc($cats)):
                                                ?>

                                    <option value="<?php echo $cat['id']?>"><?php echo $cat['name']?></option>
                                    <?php endwhile; ?>
                                    </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-4 control-label">Cover</label>

                            <div class="col-md-6">
                                <input type="file" name="cover" id="cover" placeholder="Book Cover" required>

                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-4 control-label">Book File</label>

                            <div class="col-md-6">
                                <input type="file" name="book_file" id="book_file" placeholder="Book File" required>

                            </div>
                        </div>


                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Add Book
                                </button>
                            </div>

                    </form>
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