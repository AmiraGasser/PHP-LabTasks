<?php 
$db="mysql:host=localhost;dbname=backendcourse";
$con= new PDO($db,"root","");

$query_update ="UPDATE `publisher_address` SET `address_name`='$_POST[address_name]',`publisher_id`='$_POST[publisher_id]' WHERE `address_name` = '$_POST[address_name]'";
$sql= $con->prepare($query_update);

$res=$sql->execute();
?>