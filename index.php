<!DOCTYPE html>
<html>
<head>
    <title>Lesson 2</title>
</head>
<body>
    <div style="color: red;">1.</div>

    <?php
    $a = rand ( -10 , 10 );
    $b = rand ( -10 , 10 );
    if ($a>=0 && $b>=0)
        echo "Переменные ".'$a'." и ".'$b'." являются положительными, следовательно, по условию выводим их разность: <br>$a - $b = ".($a - $b);
    elseif ($a<0 && $b<0)
        echo "Переменные ".'$a'." и ".'$b'." - отрицательные, следовательно, по условию выводим их произведение: <br>$a * $b = ".($a * $b);
    else
        echo "Переменные ".'$a'." и ".'$b'." разных знаков, следовательно, по условию выводим их сумму: <br>$a + $b = ".($a + $b)."<br>";
    ?>
    <br>

    <div style="color: red;">2.</div>
    <?php
    $a = rand ( 0 , 15 );

    switch($a) {
        case 0: echo "0 1 2 3 4 5 6 7 8 9 10 11 12 13 14 15"."<br>"; break;
        case 1: echo '1 2 3 4 5 6 7 8 9 10 11 12 13 14 15'."<br>"; break;
        case 2: echo '2 3 4 5 6 7 8 9 10 11 12 13 14 15'."<br>"; break;
        case 3: echo '3 4 5 6 7 8 9 10 11 12 13 14 15'."<br>"; break;
        case 4: echo '4 5 6 7 8 9 10 11 12 13 14 15'."<br>"; break;
        case 5: echo '5 6 7 8 9 10 11 12 13 14 15'."<br>"; break;
        case 6: echo '6 7 8 9 10 11 12 13 14 15'."<br>"; break;
        case 7: echo '7 8 9 10 11 12 13 14 15'."<br>"; break;
        case 8: echo '8 9 10 11 12 13 14 15'."<br>"; break;
        case 9: echo '9 10 11 12 13 14 15'."<br>"; break;
        case 10: echo '10 11 12 13 14 15'."<br>"; break;
        case 11: echo '11 12 13 14 15'."<br>"; break;
        case 12: echo '12 13 14 15'."<br>"; break;
        case 13: echo '13 14 15'."<br>"; break;
        case 14: echo '14 15'."<br>"; break;
        case 15: echo '15'."<br>"; break;
        }
    /*echo $a.'<br>';
    while ($a <= 15) { // не совсем поняла, зачем нужен swith для этого примера
        echo $a.' '."<br>";
        $a += 1;
    }*/
    ?>

    <br>
    <div style="color: red;">3.</div>
    <?php
    echo '$a'."= <b>$a</b><br>".'$b'."= <b>$b</b><br>";
    function mySumm($a, $b) { // сумма
        return $a + $b;
    }
    echo $s = mySumm($a, $b)."<br>";
    ?>
    <br>
    <?php
    function myDiff($a, $b) { // разность
        return $a - $b;
    }
    echo $s = myDiff($a, $b)."<br>";
    ?>
    <br>
    <?php
    function myOp($a, $b) { // произведение
        return $a * $b;
    }
    echo $s = myOp($a, $b)."<br>";
    ?>
    <br>
    <?php
    function myDiv($a, $b) { // деление
        if ($b != 0) {
            return $a / $b;
        } else {
            return "Деление на ноль";
        }
    }
    echo $s = myDiv($a, $b)."<br>";
    ?>

    <br>
    <div style="color: red;">4.</div>
    <?php
    function mathOperation($arg1, $arg2, $operation){
        switch ($operation) {
            case '+':
                return mySumm($arg1, $arg2);
                break;
            case '-':
                return myDiff($arg1, $arg2);
                break;
            case '*':
                return myOp($arg1, $arg2);
                break;
            case '/':
                return myDiv($arg1, $arg2);
                break;
        }
    }
    echo mathOperation(5, 7, '+')."<br>";
    ?>
    <br>
    <div style="color: red;">5.</div>
    <?php   // продвинутый блок
    function myPower($val, $pow){
        if ($pow == 0)
            return 1;
        else
            return $val * myPower($val, $pow-1);
    }
    echo $rez = myPower(5, 0);
    ?>
    <br>
    <div style="color: red;">6.</div>
    <?php
    function myDate(){
        $h = date("G");
        $m = date("i");
        if ($h == 1 || $h == 21) {
            $str_h = 'час';
        } elseif (($h >= 2 && $h <= 4) || ($h >= 22 && $h <= 24)) {
            $str_h = 'часа';
        } elseif ($h >= 5 && $h <= 20) {
            $str_h = 'часов';
        } else return "Неверный формат часов!";

        if ($m == 1 || $m == 21 || $m == 31 || $m == 41 || $m == 51) {
            $str_m = 'минута';
        } elseif (($m >= 2 && $m <= 4) || ($m >= 22 && $m <= 24) ||
                  ($m >= 32 && $m <= 34) || ($m >= 42 && $m <= 44) || ($m >= 52 && $m <= 54)) {
            $str_m = 'минуты';
        } elseif (($m >= 5 && $m <= 20) || ($m >= 25 && $m <= 30) || ($m >= 35 && $m <= 40) || ($m >= 55 && $m <= 50)
            || ($m >= 55 && $m <= 59)) {
            $str_m = 'минут';
        } else return "Неверный формат минут!";

        return $h." $str_h ".$m." $str_m";
    }
    echo "Текущее время: ".myDate();
    ?>



















