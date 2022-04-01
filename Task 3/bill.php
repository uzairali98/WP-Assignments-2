<?php
echo "<h1>RESULT PAGE</h1>";
$unit = $_POST['unit'];
    if($unit){
        echo "<p>Provided units are $unit</p><br>";
        if ($unit <= 50)
        {
            $amount=$unit*3.50;
            echo "<h3>For first  $unit units - Rs. $amount/unit</h3>";
        }
        else if($unit <=100){
            $amount=$unit*4.00;
            echo "<h3>For first  $unit units - Rs. $amount/unit</h3>";
        }
        else if($unit <250){
            $amount=$unit*5.20;
            echo "<h3>For first  $unit units - Rs. $amount/unit</h3>";
        }
        else if($unit >=250){
            $amount=$unit*6.50;
            echo "<h3>For first  $unit units - Rs. $amount/unit</h3>";
        }
    }
    else
    {
        echo "<h3>Units are not provided</h3>";
    }
?> 
