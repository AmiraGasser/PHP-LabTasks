
    <?php
    //Task1
    $name = "Amira";
    echo "Hello , " . $name . "<br>"; 

    //Task2 
     $numbers = "5 10";
     $numbers_tmp = explode(" " , $numbers);
     $num1 = $numbers_tmp[0];
     $num2 = $numbers_tmp[1];
     echo $num1 . " + " . $num2 . " = " . ($num1 + $num2). "<br>";
     echo $num1 . " - " . $num2 . " = " . ($num1 - $num2). "<br>";
     echo $num1 . " * " . $num2 . " = " . ($num1 * $num2). "<br>";

    //Task3
    $numbers = "1 2 3 4";
     $numbers_tmp = explode(" " , $numbers);
     $num1 = $numbers_tmp[0];
     $num2 = $numbers_tmp[1];
     $num3 = $numbers_tmp[2];
     $num4= $numbers_tmp[3];
     echo "Difference  = " . (($num1 * $num2 ) - ($num3 * $num4)). "<br>";



     //Task4
     $numbers = "13 12";
     $numbers_tmp = explode(" " , $numbers);
     $num1 = $numbers_tmp[0];
     $num2 = $numbers_tmp[1];
     echo ($num1[strlen($num1)-1] + $num2[strlen($num2)-1]). "<br>";

     //Task5
    $my_number = "4569";
    if($my_number[0]%2 == 0) echo "EVEN". "<br>";
    else echo "ODD". "<br>";

    //Task6
    $a = 15;
    $b = 7;
    $k = 3;
    if($a%$k == 0 && $b%$k == 0) echo "BOTH". "<br>";
    else if ($a%$k == 0) echo "MEMO". "<br>";
    else if ($B%$k == 0) echo "MOMO". "<br>";
    else echo "NO ONE". "<br>";

    //TASK7
    $numbers = "2 3";
    $numbers_tmp = explode(" " , $numbers);
    $a = $numbers_tmp[0];
    $b = $numbers_tmp[1];

    if(($a - $b) == 1 || ($a - $b) == -1) echo "YES". "<br>";
    else echo "NO". "<br>";

    //Task8
    $numbers = "39";
    if($numbers[0] % $numbers[1] == 0 || $numbers[1] % $numbers[0] == 0) echo "YES". "<br>";
    else echo "NO". "<br>";
     ?>