<?php
//i couldn't do the equivalent of "cout" as we still didn't learn it
//q1
$s="programmer";
echo "Hello,$s";

echo "         ";
//q2
$num1=5;$num2=10;

$sum = $num1 + $num2;
$mult = $num1 * $num2;
$sub = $num1 - $num2;

echo $sum;
echo $mult;
echo $sub;

echo "           ";
//q3
$A= 1; $B= 2; $C= 3; $D= 4 ;
$x = ($A * $B) - ($C * $D);
echo "Difference = $x";

echo "           ";
//q4
$m= 12 ;$n= 13;
$mod= ($m % 10) + ($n % 10);
echo $mod;

echo "           ";
//q5
$x= 2569;

if ($x / 2 == 1) {
    echo "Even";
}
else {
    echo "Odd";
}

echo "           ";
//q6
$a= 15; $b= 7; $k= 3;
if ($a >=1 && $b >= 1) {
    if ($a % $k == 0 && $b % $k == 0) {
        echo "both";
    }
    else if ($a % $k == 0) {
        echo "Memo";
    }
    else if ($b % $k = 0) {
        echo "Momo";
    }
    else {
        echo "No one";
    }
}

echo "           ";

//q7
$N = 39;
if ($N < 100 && $N > 9) {
    $ten = (int)$N /10;
    $un = $N % 10;
    if ($un !== 0 && $ten % $un == 0) {
        echo "Yes";
    }
    else {
        echo "No";
    }
}
    else {
        echo "Error";
    }

    echo "          ";
    //i still kept it since it displays the answer i asked chatgpt and it displayed things we didn't take
?>