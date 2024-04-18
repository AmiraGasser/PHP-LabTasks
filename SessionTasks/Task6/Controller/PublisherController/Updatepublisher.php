<?php 
$db="mysql:host=localhost;dbname=backendcourse";
$con= new PDO($db,"root","");

$query_update ="UPDATE `publisher` SET `publisher_id`='$_POST[publisher_id]',`name`='$_POST[name]',`phone`='$_POST[phone]',`email`='$_POST[email]' WHERE `publisher_id` = '$_POST[publisher_id]'";
$sql= $con->prepare($query_update);

$res=$sql->execute();
?>