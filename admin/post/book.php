<?php
include("../confs/auth.php");
include("../confs/config.php");

$name=$_POST['name'];
$author_name=$_POST['author_name'];
$category_id=$_POST['category_id'];

$cover=$_FILES['cover']['name'];
$tmp=$_FILES['cover']['tmp_name'];

$book_file=$_FILES['book_file']['name'];
$tmpfile=$_FILES['book_file']['tmp_name'];

if($cover)
{
    move_uploaded_file($tmp, "covers/$cover");
}
if($book_file)
{
    move_uploaded_file($tmpfile, "files/$book_file");
}

$sql="INSERT INTO books (name, author_name, category_id, cover, book_file, created_at) VALUES ('$name', '$author_name', '$category_id', '$cover', '$book_file', now())";

mysql_query($sql);

header("location: ../books");

echo $name;
echo $author_name;
echo $category_id;
echo $cover;
?>