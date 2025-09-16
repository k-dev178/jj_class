<!-- chap04_02.php -->
<?php
    for($num1 = 2; $num1 < 10; $num1++)
    {
        echo "-----{$num1}단-----<br>";
        for($num2 = 1; $num2 < 10; $num2++)
        {
            echo $num1 . " X " . $num2 . " = " . $num1*$num2 . 
            "<br>";
        }
    }
    echo "-------------<br>";
?>