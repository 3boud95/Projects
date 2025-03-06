<?php
//part 1:

$num = 1;  //base of the numbers
$total = 0;

for ($num; $num > 0 && $num <11 ; $num += 1) {   //it will add 1 each loop to the number and add it to total
    echo "<br> $num";
    $total += $num;
}

echo " <br> total = $total";  //print the total number

echo "<br>";

//part 2:

$x = 0;
while ($x <5) { //it will add 12 until 4+1=5
    $t = ($x+=1) *3;
    echo "<br> $t";
}

echo "<br>";

//part 3:

$no = 1;

do {  //this will display the number then x2 it and so on
    echo "<br> $no";
    $no = $no *2;

}
while ($no <= 50); //until it's more than 50

echo "<br>";

//part 4:

$fruits = array("apple","banana","cherry","mango","orange");

foreach ($fruits as $fruits) {
    echo "<br> $fruits";
}

echo "<br>";

//bonus task:

$dig = 1;
for ($dig; $dig > 0 && $dig < 11; $dig += 1) { //since $dig =1 it will print and add 1 each time 
    if ($dig %3 == 0) {
        continue; //it will skip numbers divisible by 3
    }
    if ($dig == 8) {
        break; //it will stop at 8
    }
    echo "<br> $dig";
}
?>