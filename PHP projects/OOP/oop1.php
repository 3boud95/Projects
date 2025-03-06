<?php

//class cars{

////data field
//public $make;
//public $model;
//public $year;

//public function __construct(string $make,string $model,int $year) {
    //$this->make=$make;
    //$this->model=$model;
    //$this->year=$year;
//}

//}

//$aa= new cars("toyota","corolla",2024);

class cars{


private $make;
private $model;
private $year;

public function __construct(string $make,string $model,int $year) {
    $this->make=$make;
    $this->model=$model;
    $this->year=$year;
}
public function getMake(){
    return $this->make;
}
public function getModel(){
    return $this->model;
}
public function getYear(){
    return $this->year;
}
public function setModel(string $model){
    return $this->model=$model;
}
public function setMake(string $make){
    return $this->make=$make;
}
public function setYear(int $year){
    return $this->year=$year;
}
}

$aa= new cars("toyota","corolla",2024);
$aa->setMake("Ferrari");
$make = $aa->getMake();
$aa->setModel("Laferrari");
$model = $aa->getModel();
$aa->setYear(2015);
$year = $aa->getYear();
echo "$make $model $year";


?>