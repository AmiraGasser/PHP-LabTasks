<?php
$db="mysql:host=localhost;dbname=backendcourse";
$con= new PDO($db,"root","");
$adaddress_name=$_POST["address_name"];
$publisher_id=$_POST["publisher_id"];

$query_insert ="INSERT INTO `bublisher_address`(`address_name`, `publisher_id`) VALUES (?,?)";
$sql= $con->prepare($query_insert);

$res=$sql->execute([$address_name,$publisher_id]);












?>