<?php
    $a = 10;
    $b = 3;

    $v = $a + $b;
    echo $v . "<br>";
    
    $v = $a - $b;
    echo $v . "<br>";

    $v = $a * $b;
    echo $v . "<br>";

    $v = $a / $b;
    echo $v . "<br>";

    $v = $a % $b;
    echo $v . "<br>";
    
    $v = intdiv($a, $b);
    echo $v . "<br>"
?>

<hr>

<?php
    $a = 13;
    $b = 8;

    $c = ++$a - $b--;
    echo "\$c = $c, \$a = $a, \$b = $b<br>";

    $c = --$a + $b++;
    echo "\$c = $c, \$a = $a, \$b = $b<br>";
?>

<hr>

<?php
    $s = "대한";
    $s .= "민국";

    echo "$s";
?>

<?php
    $a = 5; // 0101
    $b = 8; // 1000
    $c = $a & $b; // 0000 => 0
    $d = $a | $b; // 1101 => 13
    $e = $a << 3; // 0010 1000 => 40
    $f = $b >> 2; // 0010 => 2

    echo "<br><br>\$a = $a<br>";
    echo "\$b = $b<br>";
    echo "\$c = $c<br>";
    echo "\$d = $d<br>";
    echo "\$e = $e<br>";
    echo "\$f = $f<br>";
?>

<hr>

<?php
    $a = 8;
    $b = $a * ( $a++ >> 3 ); 
    
    echo "$b, $c <br>";

    $c = ++$a - $b--;

    echo "$b, $c <br>";
?>