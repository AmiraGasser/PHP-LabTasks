<?php 
$db="mysql:host=localhost;dbname=backendcourse";
$con= new PDO($db,"root","");
$query_update ="UPDATE `author` SET `name`='$_POST[name]',`biography`='$_POST[biography]',`nationality`='$_POST[nationality]' WHERE `author_id` = '$_POST[author_id]'";
$sql= $con->prepare($query_update);

$res=$sql->execute();
?>