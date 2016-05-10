<?php include("admin/confs/config.php"); ?>
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


<?php
if(isset($_GET['cat']))
{
    $cat_id=$_GET['cat'];
    $books=mysql_query("SELECT * FROM books where category_id=$cat_id LIMIT $start, $limit");
}
else
{
    $books=mysql_query("SELECT * FROM books LIMIT $start, $limit");
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>E-Library</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="bootstrap/css/style.css" rel="stylesheet">
</head>
<body>
<div class="container">
    <div class="jumbotron"><h3>E-Library</h3></div>
    <?php include("nav-menu.php"); ?>


<ul class="books">



    <?php while($row=mysql_fetch_assoc($books)): ?>
        <li>
            <img src="admin/post/covers/<?php echo $row ['cover']?>"  class="img-thumbnail">
            <?php echo $row ['name']; ?>
            <br>
            <small> <i>Author "<?php echo $row ['author_name']; ?>"</i></small>
            <br>
            <a href="admin/post/files/<?php echo $row ['book_file'] ?>"><span class="glyphicon glyphicon-download"></span> Download</a>


        </li>

    <?php endwhile; ?>
</ul>



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


    <div class="panel panel-footer">Developed By <br> NewTech Mawlamyine Web Solution Group <br> <?php echo date ("Y") ?>
        <br> Ph : <a href="tel:09970488345">09970488345</a>
    </div>
</div>



<script src="bootstrap/js/bootstrap.min.js"></script>
<script src="bootstrap/js/jquery.min.js"></script>
</body>
</html>