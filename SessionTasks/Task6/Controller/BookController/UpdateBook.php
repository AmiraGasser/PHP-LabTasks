<?php 
$db="mysql:host=localhost;dbname=backendcourse";
$con= new PDO($db,"root","");

$query_update ="UPDATE `books` SET `book_id`='$_POST[book_id]',`title`='$_POST[title]',`quantity`=$_POST[quantity],`ISBN`='$_POST[ISBN]',`gener_id`='$_POST[genre_id]',`publisher_id`='$_POST[publisher_id]',`autor_id`='$_POST[author_id]' WHERE `book_id` = '$_POST[book_id]'";
$sql= $con->prepare($query_update);

$res=$sql->execute();
?>