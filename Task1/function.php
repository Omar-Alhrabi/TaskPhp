<?php 

    //task1 
    echo "<br><br>";
   $num = 4;
    function is_prime($num) {
        if ($num <= 1) {
            return false;
        } elseif ($num == 2) {
            return true;
        } elseif ($num % 2 == 0) {
            return false;
        } else {
            $sqrt_num = sqrt($num);
            $i = 3;
            while ($i <= $sqrt_num) {
                if ($num % $i == 0) {
                    return false;
                }
                $i += 2;
            }
            return true;
        }
    }
    $number = intval(readline("Enter a number: " . $num));
    if (is_prime($number)) {
        echo "$number is a prime number";
    } else {
        echo "$number is not a prime number";
    }

    // task 2
    echo "<br><br>";
        $txt = "remove";
        echo strrev($txt); 
   
    // task 3
    echo "<br><br>";
    $x = 12;
    $y = 10;
    echo "\$x = $x , \$y = $y" , "<br>";
    $arr = [$x, $y];
    list($y, $x) = $arr;
    echo "\$x = $x , \$y = $y" , "<br>";

    //task 4 
    echo "<br><br>";
    function isArmstrong($number) {
        $sum = 0;
        $temp = $number;
        $numDigits = strlen((string)$number);
    
        while ($temp != 0) {
            $digit = $temp % 10;
            $sum += pow($digit, $numDigits);
            $temp = (int)($temp / 10);
        }
    
        return $sum == $number;
    }
    $number = 407;
    if (isArmstrong($number)) {
        echo "$number is an Armstrong number.";
    } else {
        echo "$number is not an Armstrong number.";
    }    

    //task 5
    echo "<br><br>";
    function isPalindrome($string) {
      
        $cleanedString = strtolower(str_replace(' ', '', $string));
        $reversedString = strrev($cleanedString);
        return $cleanedString === $reversedString;
    }
    
    $string = "Eva, can I see bees in a cave";
    if (isPalindrome($string)) {
        echo "is a palindrome.";
    } else {
        echo " is not a palindrome.";
    }
    
    // task 6
    echo "<br><br>";
    $array1 = array_unique(array(2, 4, 7, 4, 8, 4));
    echo "Array =";
    echo implode(" ", $array1);






?>