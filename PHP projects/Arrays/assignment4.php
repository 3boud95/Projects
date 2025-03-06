<?php

$students = [
    "Ali" => [
        "Math" => 80,
        "Arabic" => 60,
        "Physics" => 40,
    ],    
    "Seif" => [
        "Math" => 77,
        "Arabic" => 70,
        "Physics" => 30,
    ],
    "Jeff" => [
        "Math" => 50,
        "Arabic" => 100,
        "Physics" => 55,
    ]
];

$average = [];
$subjgrade = [];

foreach($students as $name => $grades) {
    $total = array_sum($grades);
    $average[$name] = $total / count($grades);
    echo "Average for $name: $average[$name] <br>";
    rsort($grades);
    echo "Highest grade for $name: $grades[0]\n <br>";

foreach($grades as $subject => $grades) {
    $subjgrade[$subject][] = $grades;
    }
}

rsort($subjgrade);
foreach($subjgrades as $values) {
    echo "$values[0]";
    echo "$values[4]";
}


foreach($students as $subjecs => $grades) {
    foreach($grades as $subjects => $grades) {
    rsort($grades);
    echo "Total in $subject: $grades[0] <br>";
    }
}






?>