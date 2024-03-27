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
 //$query_select="SELECT classes.name , floor ,buildings.name as building_name  FROM `classes` INNER JOIN buildings ON classes.building_id=buildings.id";

//todo fetch_assoc
//$select= mysqli_query($con,$query_select);
mysqli_query($con,$query_INSERT);
//todo fetch_all
//$classes=$select->fetch_all(MYSQLI_ASSOC);
//todo MYSQLI_ASSOC

//foreach ($classes as $class) {
//    echo "<pre>";
// 
//    echo "<h1 style='background-color:black; padding:12px; color:#fff;'> name: $class[name] floor:$class[floor]  building_name: $class[building_name]  <br></h1>";
//    echo "</pre>";
//}



//! PDO

// mysql:host=?;dbname=?

// query
//connection prepare
// sql execute
// sql error info
// sql fetch all
//  fetch all PDO:FETCH_ASSOC




