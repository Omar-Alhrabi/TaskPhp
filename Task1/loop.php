<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task #7</title>
</head>
<body>
<?php

for ($i=1; $i <= 10 ; $i++) { 
    echo ($i ." - " );

}

// task 2
echo  "<br>", "<br>";
$total = 0;
    for ($x=0; $x < 30; $x++){ 
        $total += $x;
    };
    echo "The total sum of integers between 0 and 30 is =  $total";

// task 3
echo  "<br>", "<br>";
for ($i = 1; $i <= 5; $i++) {
    for ($j = 1; $j <= 5; $j++) {
        if ($i == 1) {
            echo " A ";
        } elseif ($i == 2) {
            echo ($j <= 3) ? " A " : " B ";
        } elseif ($i == 3) {
            echo ($j <= 2) ? " A " : " C ";
        } elseif ($i == 4) {
            echo ($j == 1) ? " A " : " D ";
        } elseif ($i == 5) {
            echo " E ";
        };
    }
   echo "<br>";
}

// task 4
echo  "<br>", "<br>";

for ($i = 1; $i <= 5; $i++) {
    for ($j = 1; $j <= 5; $j++) {
        if ($i == 1) {
            echo " 1 ";
        } elseif ($i == 2) {
            echo ($j <= 3) ? " 1 " : " 2 ";
        } elseif ($i == 3) {
            echo ($j <= 2) ? " 1 " : " 3 ";
        } elseif ($i == 4) {
            echo ($j == 1) ? " 1 " : " 4 ";
        } elseif ($i == 5) {
            echo " 5 ";
        };
    }
   echo "<br>";
}

// task 5
echo  "<br>", "<br>";

for ($i = 1; $i <= 5; $i++) {
    for ($j = 1; $j <= 5; $j++) {
        if ($i == $j) {
            echo $i . " ";
        } else {
            echo "0 ";
        }
    }
    echo "<br>";
}

// task 6
echo  "<br>", "<br>";
$total1 = 1;
for ($z = 1; $z <= 5; $z++) {
    $total1 *= $z;
};
echo " $total1";


// task 7
echo  "<br>", "<br>";
?>
    <table border='1' cellpadding='3px' cellspacing='0px'>
        <tbody>
         <?php
                for($i = 1; $i <= 6; $i++){
                    echo "<tr>";
                        for($j = 1; $j <= 5; $j++){
                            echo "<td>{$i}*{$j}=" . $i*$j . "</td>";
                        }
                    echo "</tr>";
                }
            ?>
        </tbody>
    </table>
    
</body>
</html>
