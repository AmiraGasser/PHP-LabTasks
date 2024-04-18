<?php
$db="mysql:host=localhost;dbname=backendcourse";
$con= new PDO($db,"root","");

$ID=$_POST["ID"];
$name=$_POST["name"];
$nationality=$_POST["nationality"];
$bio=$_POST["bio"];

$query_insert ="INSERT INTO `author`(`author_id`, `name`, `biography`, `nationality`) VALUES (?,?,?,?)";

$sql= $con->prepare($query_insert);

$res=$sql->execute([$ID,$name,$bio,$nationality]);

?>