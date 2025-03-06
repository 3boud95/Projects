<?php
//part 1:
//q1
$i =1;
for($i; $i > 0 && $i <=20 ; $i ++) { //$i is printed and +1 each time until 20
echo "<br> $i";
}

echo "<br>";

$no =1;
while($no > 0 && $no <= 20) {
    echo "<br> $no";
    $no ++;
}
echo "<br>";

//q2
for ($i = 1; $i < 5; $i++) { //controls the no of rows 
    for ($j = 1; $j <= $i; $j++) { //the no of *
        echo "*";
    }
    echo "<br>";
}

echo "<br>";

//part 2:
//q3
$fruits = array("Banana","Mango","Apple","Watermelon","Pineapple"); //array

foreach ($fruits as $fruits) { //loop
    echo "<br> $fruits";
}

echo "<br>";
echo "<br>";

//q4
$menu = [ //array for the menu
    "Burger" => 200,
    "Pizza" => 350,
    "Sandwich" => 50
];

foreach ($menu as $item => $price) { // Loop
    echo "Item: $item, Price: $$price<br>";
}

//part 3:
//q5
$array = [10,20,30,40];
echo "array: ";
print_r($array);
echo "<br>";

array_push($array, 50);
echo "adding 50 ";
print_r($array);
echo "<br>";

array_shift($array);
echo "removing the first element ";
print_r($array);
echo "<br>";

$array[1] = 25;
echo "adding in 2nd ";
print_r($array);
echo "<br>";


?>