<?php
    function fibonacciSeries($n){
        $num1 = 0;
        $num2 = 1;
      
          for ( $i = 0; $i < $n; $i++ ) {
            echo $num1 . ", ";
            $num3 = $num1 + $num2;
            $num1 = $num2;
            $num2 = $num3;
        }
    }
    $n = 10;
    fibonacciSeries($n);

    //task2
    echo "<br/>","<br/>"; 
    $lineItems = 1;
    for ($i = 1; $i <= 5; $i++) {
        for ($j = 1; $j <= $i; $j++) {
            echo $lineItems . " ";
            $lineItems++;
        }
        echo "<br>";
    }    

    
    //task3
    echo "<br/>","<br/>"; 
    $n = 5;

    for ($i = 1; $i <= $n; $i++) {
        echo str_repeat(" ", $n - $i);
        for ($j = 1; $j <= $i; $j++) {
            echo chr(64 + $j) . " ";
        }
        echo "<br>";
    }

    for ($i = $n - 1; $i >= 1; $i--) {
        echo str_repeat(' ', $n - $i);
        for ($j = 1; $j <= $i; $j++) {
            echo chr(64 + $j) . ' ';
        }
        echo "<br>";
    }
?>