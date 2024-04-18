<?php 
$db="mysql:host=localhost;dbname=backendcourse";
$con= new PDO($db,"root","");

$query_update ="UPDATE `borrowers` SET `boeeower_id`='$_POST[boeeower_id]',`name`='$_POST[name]',`phone`='$_POST[phone]',`email`='$_POST[email]' WHERE `boeeower_id` = '$_POST[boeeower_id]'";
$sql= $con->prepare($query_update);

$res=$sql->execute();
?>