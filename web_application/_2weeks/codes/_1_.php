<?php
    echo "Hello World<br><br>";
?>

<?php
    print "Hello<br>";
    print("Hello<br>");
    print 'Hello<br>';

    print "<hr>";

    $var = 3;
    print "Hello {$var}입니다<br>";

    print "<hr>";


    $a = print "Hello<br>";
    echo $a;

    echo $a;
    $sName = "ksj";
    $iage = 23;

?>

<br>이름 <?=$sName?>
<br>나이 <?=$iAge?>

<hr>

<?php
    $var = 123;
    echo "<br>";
    echo gettype($var);

    $var = 12.3;
    echo "<br>";
    echo gettype($var);
?>

<?php
    $num = 2147483647;

    echo "<br>";

    var_dump( $num);
    $num += 1;

    echo "<br>";
    var_dump( $num);
?>

<hr>
echo "저의 이름은 <?=$sName?> 이고, 나이는 <?=$iage?> 입니다.;
<?php
    $sName = "ksj";
    $iAge = 23;
    // echo "<br>저의 이름은 " .$sName. "이고, 나이는 " .$iAge. "입니다.";
    // echo "<br>저의 이름은 " + $sName + "이고, 나이는 " + $iAge + "입니다.";
    
    echo "<br>저의 이름은 {$sName}이고, 나이는 {$iAge}입니다.";
?>