<?php include("confs/auth.php"); ?>
<?php include("confs/config.php"); ?>
<?php
$totals=mysql_query("SELECT * FROM books");
$total=mysql_num_rows($totals);

#paging
$limit=10;
$start=0;
if(isset($_GET['start'])) {
    $start=$_GET['start'];

}
$next=$start+$limit;
$prev=$start-$limit;
?>

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
    <div class="panel panel-footer"><h3>E-Library <small>Books Management</small></h3>
        <a class="glyphicon glyphicon-dashboard" href="home">Dashboard</a> <a class="glyphicon glyphicon-link" href="addbook">New Book</a>
    </div>
    <!-- Page Content -->
    <div id="page-content-wrapper">
        <div class="container">

            <div class="row">
                <div class="col-md-11">

                <div class="table-responsive">

                    <table class="table">
                        <tr><th>Category</th></th><th>Link</th><th>Book Name</th><th>Author Name</th><th>Created Date</th><th>Covers</th><th>Delete</th></tr>

                        <?php $result=mysql_query("SELECT * FROM books LIMIT $start, $limit");
                        while($row=mysql_fetch_array($result)): ?>
                            <tr>
                                <td>
                                <?php $cats=mysql_query("SELECT * FROM categories");
                                    while($cat=mysql_fetch_assoc($cats)):
                                  if($cat['id']==$row['category_id']) echo $cat['name']; ?><?php endwhile; ?>
                                </td>
                                    <td><a href="/admin/post/files/<?php echo $row ['book_file']?>" target="_blank">Link</a></td>
                                 <td><span class="glyphicon glyphicon-list"></span> <?php echo $row['name']; ?> </td>
                                    <td><span class="glyphicon glyphicon-user"></span> <?php echo $row ['author_name']?></td>
                                <td><span class="glyphicon glyphicon-time"></span> <?php echo $row['created_at'] ?></td>
                                <td><img src="post/covers/<?php echo $row ['cover']?>" width="100px" height="100px" class="img-thumbnail"> </td>
                                <td><span class="glyphicon glyphicon-remove-sign"></span><a href="post/deletebook?id=<?php echo $row ['id']?>">Delete</a></td>

                            </tr>

                        <?php endwhile; ?>
                    </table>


                </div>
            </div>
                </div>
        </div>
    </div>
    <!-- /#page-content-wrapper -->

    <div class="paging">
        <?php if($prev<0): ?>
            <span>&laquo; Previous</span>
        <?php else: ?>
            <a  href="?start=<?=$prev?>">&laquo; Previous</a>
        <?php endif;?>

        <?php if($next>=$total):?>
            <span>Next &raquo;</span>
        <?php else: ?>
            <a href="?start=<?=$next?>">Next &raquo;</a>
        <?php endif;?>
    </div>
    <br style="clear:both">


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