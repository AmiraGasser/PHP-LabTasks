<?php
$ID=$_POST["ID"];
$name=$_POST["name"];
$nationality=$_POST["nationality"];
$bio=$_POST["bio"];

$host="localhost";
$username="root";
$password="";
$dbname="backendcourse";
$con= mysqli_connect($host, $username, $password,  $dbname);
$query_INSERT="INSERT INTO `author`(`author_id`, `name`, `biography`, `nationality`) VALUES  ('$ID','$name','$bio','$nationality')";

mysqli_query($con,$query_INSERT);
