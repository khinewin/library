<?php session_start(); ?>
<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
<link href="bootstrap/css/style.css" rel="stylesheet">

<nav class="navbar navbar-default  role="navigation">

        <div class="navbar-header page-scroll">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand page-scroll" href="/"><span class="glyphicon glyphicon-home"></span> Home</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse navbar-ex1-collapse">
            <ul class="nav navbar-nav">
                <?php
                $cats=mysql_query("SELECT * FROM categories");
                while($cat=mysql_fetch_assoc($cats)): ?>
                <li><a href="/?cat=<?php echo $cat['id']?>"><?php echo $cat['name']?></a></li>
                <?php endwhile; ?>
                <!-- Hidden li included to remove active class from about link when scrolled up past about section -->
                <li class="hidden">
                    <a class="page-scroll" href="#page-top"></a>
                </li>


            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li>
                    <a href="/admin/home"><span class="glyphicon glyphicon-log-in"></span> Login </a>
                </li>
                </ul>
        </div>
        <!-- /.navbar-collapse -->

</nav>

<script src="bootstrap/js/bootstrap.min.js"></script>
<script src="bootstrap/js/jquery.min.js"></script>