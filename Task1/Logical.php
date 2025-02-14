<?php
    $num1 = 15;
    $num2= 19;
    if ($num1 + $num2 == 30){
        echo "true"; 
    }
    else {
        echo "false.";
    }

    // task2 
    echo "<br><br>";
    $n = 20;
    if (($n) % 3 === 0){
          echo "true"; 

     }else{
          echo "false";
     }
     
     // task3
     echo "<br><br>";
     $num3 = 50 ;
     if ($num3 >= 20 && $num3 <= 50){
         echo "true";
         } else {
         echo "false";
     }

     // task4
     echo "<br><br>";
     $x = 1;
     $y = 5;
     $z = 9;
     $max = max($x, max($y, $z));
     echo $max;
         
     // task5
     echo "<br><br>";

     //task6 
     echo "<br><br>";
     $x = 10 ; 
     $y = 5 ;
     echo ("addtion =" . $x  +  $y . "<br>" ); 
     echo ("Subtraction =" . $x  -  $y . "<br>"); 
     echo ("Multiplication =" . $x  *  $y . "<br>" ); 
     echo ("Division =" . $x  /  $y . "<br>" ); 

        //task7 
        echo "<br><br>";
        $num4 = 15;
        if ($num4 >= 18){
            echo "eligible to vote";

        }
        else {
            echo "not eligible to vote";
        }

        // task7
        echo "<br><br>";
        $number = -20;
        if ($number > 0) 
        {
            echo $number . " is a positive number";
        } else if ($number < 0)
        {
            echo $number . " is a negative number ";
        }

        //task8
        echo "<br><br>";
        $cre = array(60,86,95,63,55,74,79,62,50);
        $average = array_sum($cre) / count($cre);
        if($average <= 60){
            echo "F";
        }
        else if($average <= 70){
            echo "D";
        }
        else if($average <= 80){
            echo "C";
        }
        else if($average <= 90){
            echo "B";
        }
        else if($average <= 100){
            echo "A";
        }


?>