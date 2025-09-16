<!-- chap04_01.php -->
<?php
    $net = 88;
    $sec = 79;
    $win = 85;
    $sum = $net + $sec + $win;
    $avg = $sum / 3;

    echo " > 네트워크 : {$net}점<br>";
    echo " > 정보보안 : {$sec}점<br>";
    echo " > 운영체제 : {$win}점<br>";
    echo "--------------------<br>";
    echo " > 과목총점 : {$sum}점<br>";
    echo " > 과목평균 : {$avg}점<br>";
    echo "--------------------<br>";
    echo " > 점수등급 : ";

    switch(intdiv($avg, 10))
    {
        case 10:
        case 9:
            echo "A";
            break;
        case 8:
            echo "B";
            break;
        case 7:
            echo "C";
            break;
        case 6:
            echo "D";
            break;
        default:
            echo "F";
    }
    // if($avg >= 90)
    //     echo "A";
    // else if($avg >= 80)
    //     echo "B";
    // else if($avg >= 70)
    //     echo "C";
    // else if($avg >= 60)
    //     echo "D";
    // else
    //     echo "F";
    echo "<br>--------------------<br>";
?>