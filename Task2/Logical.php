<?php
    function isLeapYear($year) {
        if (($year % 4 == 0 && $year % 100 != 0) 
            || ($year % 400 == 0)) {
            return true;
        } else {
            return false;
        }
    }
    $year = 2013;
    if (isLeapYear($year)) {
        echo "Leap Year";
    } else {
        echo "Not a Leap Year";
    }

    // task2 
    echo "<br>" , "<br>";

    $summ = 27 ;
    if($summ < 20 ) {
        echo "It is winterseason";
    } else{
        echo "It is summertime!";
    }

    // task3
    echo "<br>" , "<br>";

    $firstInteger = 2;
    $secondInteger = 2;

    if($firstInteger !== $secondInteger){
        echo ($firstInteger + $secondInteger);
    }
    else{
        echo (($firstInteger + $secondInteger)*3);
    }

    // task3
    echo "<br>" , "<br>";
    for ($i=200; $i < 250 ; $i++) { 
        if($i % 4 === 0){
            echo $i , ",";
        }
        

    }

    // task4
    echo "<br>" , "<br>";
    $n = 10;

    $min = 11;
    $max = 20;
    $numbers = range($min, $max);
    shuffle($numbers);
    foreach(array_slice($numbers, 0, $n) as $key){
        echo $key . " ";
    }

    
?>