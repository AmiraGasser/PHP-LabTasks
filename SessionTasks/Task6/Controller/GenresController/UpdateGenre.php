<?php 
$db="mysql:host=localhost;dbname=backendcourse";
$con= new PDO($db,"root","");

$query_update ="UPDATE `genres` SET `genre_id`='$_POST[genre_id]',`name`='$_POST[name]' WHERE `genre_id` = '$_POST[genre_id]'";
$sql= $con->prepare($query_update);

$res=$sql->execute();
?>