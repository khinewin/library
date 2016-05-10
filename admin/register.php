<!DOCTYPE html>
<html>
<head>
    <title>E-Library Register</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="../bootstrap/css/style.css" rel="stylesheet">
</head>
<body>
<div class="container">
    <div class="jumbotron"><h3>E-Library</h3></div>
    <?php include("../nav-menu.php"); ?>

    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Sign Up</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="post/signup">

                        <div class="form-group">
                            <label class="col-md-4 control-label">Your Name</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control" name="name" id="name" placeholder="John Carter" >
                            </div>
                        </div>


                        <div class="form-group">
                            <label class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input type="email" class="form-control" name="email" id="email" placeholder="johncarter@mail.com">
                                
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                                <input type="password" class="form-control" name="password" id="password" placeholder="P@ssw0rd">
                            </div>

                        </div>

                        <div class="form-group">
                            <label class="col-md-4 control-label">Confirm Password</label>

                            <div class="col-md-6">
                                <input type="password" class="form-control" name="password_confirm" id="password_confirm" placeholder="P@ssw0rd again">
                               
                            </div>

                        </div>


                        <div class="form-group">
                            <label class="col-md-4 control-label">Phone</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control" name="phone" id="phone" placeholder="09xxxxxxxxx">
                            </div>
                        </div>


                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                   <span class="glyphicon glyphicon-user"></span> Sign Up
                                </button>

                            </div>
                            <div class="col-md-6 col-md-offset-6">
                                <a class="btn btn-link" href="../admin">Login ?</a></div>
                        </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


    <div class="panel panel-footer">Developed By <br> NewTech Mawlamyine Web Solution Group <br> <?php echo date ("Y") ?>
        <br> Ph : <a href="tel:09970488345">09970488345</a>
    </div>



    <script src="../bootstrap/js/bootstrap.min.js"></script>
    <script src="../bootstrap/js/jquery.min.js"></script>
</body>
</html>