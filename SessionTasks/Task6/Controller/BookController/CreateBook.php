<?php
$db="mysql:host=localhost;dbname=backendcourse";
$con= new PDO($db,"root","");

$book_id=$_POST["ID"];
$title=$_POST["title"];
$quantity=$_POST["quantity"];
$ISBN=$_POST["ISBN"];
$genre_id=$_POST["genre_id"];
$publisher_id=$_POST["publisher_id"];
$author_id=$_POST["author_id"];


$query_insert ="INSERT INTO `books`(`book_id`, `title`, `quantity`, `ISBN`, `gener_id`, `publisher_id`, `autor_id`) VALUES (?,?,?,?,?,?,?)";

$sql= $con->prepare($query_insert);

$res=$sql->execute([$book_id,$title,$quantity,$ISBN,$genre_id,$publisher_id,$author_id]);

?>