<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

        <?php
                $colors = array('white', 'green', 'red');

                 $colors = array('white', 'green', 'red');
                 $reversedArray = array_reverse($colors);
                foreach ($reversedArray as $color){

                echo "<ul><li>$color</li></ul>";
                } 
  
                // task 2

                $cities= array( "Italy"=>"Rome", "Luxembourg"=>"Luxembourg", "Belgium"=> "Brussels",
                "Denmark"=>"Copenhagen", "Finland"=>"Helsinki", "France" => "Paris", "Slovakia"=>"Bratislava",
                "Slovenia"=>"Ljubljana", "Germany" => "Berlin", "Greece" => "Athens", "Ireland"=>"Dublin",
                "Netherlands"=>"Amsterdam", "Portugal"=>"Lisbon", "Spain"=>"Madrid" );

                asort($cities);

                foreach ($cities as $country => $capital) {
                echo "the capital of $capital is $country" , "<br>";
                };
                
                // task 3
                echo "<br>";
                $color = array(4 => 'white', 6 => 'green', 11 => 'red');
                echo "$color[4]";

                // task 4
                echo "<br><br>";
                $arr = array(1, 2, 3, 4, 5);
              
                $newValue = " $ ";
                $position = 3; 
                array_splice($arr, $position, 0, $newValue);
                echo implode(" ", $arr);
                
                // task 5
                echo "<br><br>";
                $fruits = array("d" => "lemon", "a" => "orange", "b" => "banana", "c" => "apple");
                $revArray = array_reverse($fruits);
                foreach ($revArray as $fruits => $revArray){
                    echo "<br>";
                echo "$fruits = $revArray";
                } 
                
                // task 6
                echo "<br><br>";
                $number = array_unique(array(78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76, 73, 68, 62, 73, 72, 65, 74, 62, 62,
                65, 64, 68, 73, 75, 79, 73));
                sort($number);   


                $firstFive = array_slice($number, 0, 5);
                $lastFive = array_slice($number, -5);
                $average = array_sum($number) / count($number);

                echo "Average Temperature is: " . number_format($average, 2) , "<br>";
                echo "List of seven lowest temperatures " . implode(", ", $firstFive), "<br>" ;
                echo "List of seven highest temperatures " . implode(", ", $lastFive) , "<br>" ;
                // task 7

                echo "<br><br>";
                $array1 = array("color" => "red", 2, 4);
                $array2 = array("a", "b", "color" => "green", "shape" => "trapezoid", 4);
                $result = array_merge($array1, $array2);
              
                print_r($result); 

                // task 8
                echo "<br><br>";
                $colors1 = array("red","blue", "white","yellow");

                echo "Array (<br>";
                array_map(function ($item) {
                    echo strtoupper($item) . "<br>";
                }, $colors);
                 echo ")";
                

        ?>
</body>
</html>