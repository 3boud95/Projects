<?php

//q1

class Circle{

    private float $radius;
    private string $color;

    public function __construct (float $radius = 1.0, string $color = "red"){

    $this->radius = $radius;
    $this->color = $color;
    }

    public function getRadius(): float{
        return $this->radius;
    }

    public function getColor(): string{
        return $this->color;
    }

    public function setRadius(float $radius){
        return $this->radius=$radius;
    }

    public function setColor(string $color){
        return $this->color=$color;
    }

    public function __tostring(){
        return $this->radius. "\n" . $this->color;
    }

    public function getArea(): float{
        return pi() * $this-> radius * $this-> radius;
    }

}

$circ1=new Circle();
$circ2=new Circle(2.0, "blue");

echo $circ1, "\n";
echo $circ2, "\n";
echo "area circ1 = " . $circ1->getArea() . "\n";

//q2

class Employee{

    private int $id;
    private string $firstName;
    private string $lastName;
    private int $salary;

    public function __construct (int $id, string $firstName, string $lastName, int $salary){
        $this->id= $id;
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->salary = $salary;
    }

    public function getId(): int{
        return $this->id;
    }

    public function getFirstName(): string{
        return $this->firstName;
    }

    public function getLastName(): string{
        return $this->lastName;
    }

    public function getName(): string{
        return $this->firstName . " " . $this->lastName;
    }

    public function getSalary(): int{
        return $this->salary;
    }

    public function setSalary(int $salary): void{
        $this->salary=$salary;
    }

    public function getAnnualSalary(): int{
        return 12 * $this->salary;
    }

    public function raiseSalary(int $percent): void{
        $this->salary+=$this->salary*($percent/100);
    }

    public function __toString(){
        return "Employee[id= " . $this->id . ", name= " . $this->getName() . ", salary= " . $this->salary . "]";
    }

}

$emp1= new Employee(1, "Clark", "Kent", 10000);
echo "The annual salary of " . $emp1->getName() . " is " . $emp1->getAnnualSalary() . "\n";
$emp2= new Employee(2, "James", "Bond", 9000);
$emp2->raiseSalary(50);
echo $emp2 . "\n";

//q3

class Rectangle{

    private float $length;
    private float $width;

    public function __construct(float $length = 1.0, float $width = 1.0){
        $this->length = $length;
        $this->width = $width;
    }

    public function getLength(): float{
        return $this->length;
    }

    public function setLength(float $length): void{
        $this->length=$length;
    }

    public function setWidth(float $width): void {
        $this->width=$width;
    }

    public function getArea(): float{
        return $this->length * $this->width;
    }

    public function getPerimeter(): float{
        return ($this->length + $this->width) * 2;
    }

    public function __toString(){
        return "Rectangle[length= " . $this->length . ", width= " . $this->width . "]";
    }

}

$rect1= new Rectangle(5.0,2.0);
$rect1->setLength(4.0);
echo $rect1 . "\n";
echo "area of rectangle = " . $rect1->getArea() . "\n";
echo "preimeter of rectangle = " . $rect1->getPerimeter() . "\n";

//q4

class InvoiceItem{

    private string $id;
    private string $desc;
    private int $qty;
    private float $unitPrice;

    public function __construct(string $id, string $desc, int $qty, float $unitPrice){
        $this->id = $id;
        $this->desc = $desc;
        $this->qty = $qty;
        $this->unitPrice = $unitPrice;
    }

    public function getId(): string{
        return $this->id;
    }

    public function getDesc(): string{
        return $this->desc;
    }

    public function getQty(): int{
        return $this->qty;
    }

    public function setQty(int $qty): void{
        $this->qty=$qty;
    }

    public function getUnitPrice(): float{
        return $this->unitPrice;
    }

    public function setunitPrice(float $unitprice): void{
        $this->unitPrice=$unitPrice;
    }

    public function getTotal(){
        return $this->unitPrice * $this->qty;
    }

    public function __tostring(){
        return "InvoiceItem[id= " . $this->id . ", desc= " . $this->desc . ", qty= " . $this->qty . ", unitPrice= " . $this->unitPrice . "]";
    }

}

$in1 = new InvoiceItem(1, "blue gums", 50, 0.50);
echo "number of " . $in1->getDesc() . " is " . $in1->getQty() . "\n";
echo $in1 . "\n";
?>