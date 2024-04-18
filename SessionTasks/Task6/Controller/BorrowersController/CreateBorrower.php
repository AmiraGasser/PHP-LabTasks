<?php
$db="mysql:host=localhost;dbname=backendcourse";
$con= new PDO($db,"root","");
$id=$_POST["ID"];
$name=$_POST["name"];
$phone=$_POST["phone"];
$email=$_POST["email"];

$query_insert ="INSERT INTO `borrowers`(`boeeower_id`, `name`, `phone`, `email`) VALUES (?,?,?,?)";
$sql= $con->prepare($query_insert);

$res=$sql->execute([$id,$name,$phone,$email]);












?>