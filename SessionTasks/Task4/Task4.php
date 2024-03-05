<?php
$users=[
    ["id"=>1 , "firstname"=>"A","lastname"=>"K","salary"=>5000,"email"=>"A@gmail.com","isactive"=>FALSE],
    ["id"=>2 , "firstname"=>"B","lastname"=>"L","salary"=>10000,"email"=>"B@gmail.com","isactive"=>TRUE],
    ["id"=>3 , "firstname"=>"C","lastname"=>"M","salary"=>100,"email"=>"C@gmail.com","isactive"=>FALSE],
    ["id"=>4 , "firstname"=>"D","lastname"=>"N","salary"=>5000,"email"=>"D@gmail.com","isactive"=>TRUE],
    ["id"=>5 , "firstname"=>"E","lastname"=>"O","salary"=>10000,"email"=>"E@gmail.com","isactive"=>FALSE],
    ["id"=>6 , "firstname"=>"F","lastname"=>"P","salary"=>5000,"email"=>"F@gmail.com","isactive"=>TRUE],
    ["id"=>7 , "firstname"=>"G","lastname"=>"Q","salary"=>500,"email"=>"G@gmail.com","isactive"=>FALSE],
    ["id"=>8 , "firstname"=>"H","lastname"=>"R","salary"=>5000,"email"=>"H@gmail.com","isactive"=>TRUE],
    ["id"=>9 , "firstname"=>"I","lastname"=>"S","salary"=>12000,"email"=>"I@gmail.com","isactive"=>FALSE],
    ["id"=>10 , "firstname"=>"J","lastname"=>"T","salary"=>5000,"email"=>"J@gmail.com","isactive"=>TRUE]
];
foreach($users as $user)
{
    echo $user["id"] .$user["firstname"] .$user["lastname"] .$user["salary"] .$user["email"] .$user["isactive"] ."<br>";
}
echo "<br>";
foreach($users as $user)
{
    if($user["salary"]<5000)
    {
        echo "Junior" ."<br>";
    }
    else if($user["salary"]>=5000 && $user["salary"]<=10000)
    {
        echo "Senior" ."<br>";
    }
    if($user["salary"]>10000)
    {
        echo "Tech Lead" ."<br>";
    }
}

session_start();
$active_users=array();
foreach($users as $user)
{
    if($user["isactive"])
        array_push($active_users,$user["id"]);

}
$_SESSION["active"]=$active_users;
var_dump($_SESSION);


foreach($_SESSION["active"] as $id)
{
    foreach($users as $user)
    {
        if($user["id"]==$id)
            echo $user["firstname"] ." Active" ."<br>";
    }
        

}
 


?>