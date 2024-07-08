
<?php

echo "<h1>Assignment 1</h2>";
    $num1 = 22;
    $num2 = 75;
    $num3 = 9;

    if ($num1 >= $num2 && $num1 >= $num3) {
        $largest = $num1;
    } elseif ($num2 >= $num1 && $num2 >= $num3) {
        $largest = $num2;
    } else { 
        $largest = $num3;
    }

    echo "<h2>The largest number is :  $largest</h2>";
?>

