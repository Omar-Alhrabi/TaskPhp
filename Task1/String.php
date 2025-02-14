<?php

$text = "hello world!";
$uppercase = strtoupper($text);
echo $uppercase , "<br>"; 
$lowercase = strtolower($text);
echo $lowercase , "<br>" ; 
$ucfirst = ucfirst($text);
echo $ucfirst , "<br>" ;
$titleCase = ucwords($text);
echo $titleCase , "<br>" ;

//task 2
echo "<br>" , "<br>" ;

$str = "085119";
$hours = substr($str, 0, 2);
$minutes = substr($str, 2, 2);
$seconds = substr($str, 4, 2);

$time = $hours . ":" . $minutes . ":" . $seconds;

echo $time;

//task 3
echo "<br>" , "<br>" ;

$str1 = 'I am a full stack developer at orange coding academy';
if (strpos($str1,'Orange') !== false) 
{
    echo 'Word Not Found!';
}else{
    echo 'Word Found!';
}

//task 4

echo "<br>" , "<br>" ;

$txt1 = 'www.orange.com/index.php' ; 

$txt2 = substr($txt1 , 15);

echo $txt2;

//task 5
echo "<br>" , "<br>" ;
$txt3 = 'info@orange.com';
$txt4 = substr($txt3 , 0 , 4);
echo $txt4;

//task 6 

echo "<br>" , "<br>" ;
$str = "info@orange.com";
echo substr($str, -3);

//task 7

echo "<br>" , "<br>" ;
$Rand = 10; 
$str = "1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZabcefghijklmnopqrstuvwxyz";
echo substr(str_shuffle($str), 0, $Rand);

//task 8

echo "<br>" , "<br>" ;

 $string = 'That new trainee is so genius.';
echo str_replace("That", "Our", $string);

?>