<?php
    $arr = array("Twinkle ", "twinkle", "little star.");
    echo var_dump($arr);

    //task2
    echo "<br/>","<br/>";
    $str = 'z';
    $strdu = ++$str;

       if(strlen($strdu) > 1){ 
        $strdu = $strdu[0];
       };
       echo $strdu;

    //task3
    echo "<br/>","<br/>"; 
    $txt = "The brown fox";
    $words = explode(" ", $txt);
    
    array_splice($words, 1, 0, "quick");
    
    $newStr = join(" ", $words);
    echo $newStr . "<br>";
    
    $firstWordInString = substr($newStr, 0, strpos($newStr, ' '));
    echo $firstWordInString;

    //task4
    echo "<br/>","<br/>"; 
    $num = '0000657022.24';
    echo ltrim($num, '0');

    //task5
    echo "<br/>","<br/>"; 
    $txt1 = 'The quick brown fox jumps over the lazy dog---';
    echo rtrim($txt1, "-");

    //task6
    echo "<br/>","<br/>"; 
    $my_string = 'The quick brown fox jumps over the lazy dog';

    echo implode(' ', array_slice(explode(' ', $my_string), 0, 5));

    //task7
    echo "<br/>","<br/>"; 
    $txt2 = '2,543.12';
    echo str_replace(",","" , $txt2);
    
?>