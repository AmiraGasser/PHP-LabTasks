<?php
$db="mysql:host=localhost;dbname=backendcourse";
$con= new PDO($db,"root","");
$id=$_POST["ID"];
$name=$_POST["name"];

$query_insert ="INSERT INTO `genres`(`genre_id`, `name`) VALUES (?,?)";
$sql= $con->prepare($query_insert);

$res=$sql->execute([$id,$name]);












?>