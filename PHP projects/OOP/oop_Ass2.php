<?php

//q1

abstract class Person{

    protected string $name;
    protected string $address;

    public function __construct(string $name, string $address){
        $this->name = $name;
        $this->address = $address;
    }

    public function getName(): string{
        return $this->name;
    }

    public function getAddress(): string{
        return $this->address;
    }

    public function setAddress(string $address): void{
        $this->address=$address;
    }

    abstract public function __toString(): string;

}

class Student extends Person{

    private string $program;
    private int $year;
    private float $fee;

    public function __construct(string $name, string $address, string $program, int $year, float $fee){
        parent::__construct($name, $address);
        $this->program = $program;
        $this->year = $year;
        $this->fee = $fee;
    }

    public function getProgram(): string{
        return $this->program;
    }

    public function setProgram(string $program): void{
        $this->program=$program;
    }

    public function getYear(): int{
        return $this->year;
    }

    public function setYear(int $year): void{
        $this->year=$year;
    }

    public function getFee(): float{
        return $this->fee;
    }

    public function setFee(float $fee){
        $this->fee=$fee;
    }

    public function __toString(): string{
        return "Student[person[name= " . $this->name . ", address= " . $this->address . "], program= " . $this->program . ", year= " . $this->year . ", fee= " . $this->fee . "]" . "\n";
    }

}

class Staff extends Person{

    private string $school;
    private float $pay;

    public function __construct(string $name, string $address, string $school, float $pay){
        parent::__construct($name, $address);
        $this->school = $school;
        $this->pay = $pay;
    }

    public function getSchool(): string{
        return $this->school;
    }

    public function setSchool(string $school): void{
        $this->school=$school;
    }

    public function getPay(): float{
        return $this->pay;
    }

    public function setPay(float $pay){
        $this->pay=$pay;
    }

    public function __toString(): string{
        return "Staff[Person[name= " . $this->name . ", address= " . $this->address . "], school= " . $this->school . ", pay= " . $this->pay . "]" . "\n";
    }

}

$stud= new Student("John wick", "22 jump street", "medical technology", 2, 55000.885);
echo $stud . "\n";

$stuf= new Staff("Carl Johnson", "30 grove street", "los santos public school", 2500.55);
echo $stuf . "\n";

//q2

interface Shape{

    public function getColor(): string;
    public function setColor(string $color): void;
    public function isFilled(): bool;
    public function setFilled(bool $filled): void;
    public function __toString(): string;
}

class Circle implements Shape{

    private string $color;
    private bool $filled;
    private float $radius;

    public function __construct(float $radius = 1.0, string $color = "red", bool $filled = true){
        $this->color = $color;
        $this->filled = $filled;
        $this->radius = $radius;
    }

    public function getColor(): string{
        return $this->color;
    }

    public function setColor(string $color): void{
        $this->color=$color;
    }
    public function isFilled(): bool{
        return $this->filled;
    }
    public function setFilled(bool $filled): void{
        $this->filled=$filled;
    }

    public function getRadius(): float{
        return $this->radius;
    }

    public function setRadius(float $radius): void{
        $this->radius=$radius;
    }

    public function getArea(): float{
        return 3.14 * $this->radius * $this->radius;
    }

    public function getPerimeter(): float{
        return 2 * 3.14 * $this->radius;
    }

    public function __toString(): string{
        return "Circle[color= " . $this->color . ", filled= " . $this->filled . ", radius= " . $this->radius . "] \n";
    }

}

class Rectangle implements Shape{

    protected float $width;
    protected float $length;
    protected string $color;
    protected bool $filled;

    public function __construct(float $width = 1.0, float $length = 1.0, string $color = "red", bool $filled = true){
        $this->color = $color;
        $this->filled = $filled;
        $this->width = $width;
        $this->length = $length;
    }

    public function getColor(): string{
        return $this->color;
    }

    public function setColor(string $color): void{
        $this->color=$color;
    }
    public function isFilled(): bool{
        return $this->filled;
    }
    public function setFilled(bool $filled): void{
        $this->filled=$filled;
    }

    public function getWidth(): float{
        return $this->width;
    }

    public function setWidth(float $width): void{
        $this->width=$width;
    }

    public function getLength(): float{
        return $this->length;
    }

    public function setLength(float $length): void{
        $this->length=$length;
    }

    public function getArea(): float{
        return $this->length * $this->width;
    }

    public function getPerimeter(): float{
        return ($this->length + $this->width) * 2;
    }

    public function __toString(){
        return "Rectangle[Shape[color= " . $this->color . ", filled= " . $this->filled . "]width= " . $this->width . ", length= " . $this->length . "] \n";
    }

}

class Square extends Rectangle{

    public function __construct(float $side = 1.0, string $color = "red", bool $filled = true){
        parent::__construct($side, $side, $color, $filled);
    }

    public function getSide(): float{
        return $this->side;
    }

    public function setSide(float $side): void{
        $this->side=$side;
    }

    public function setWidth(float $side): void{
        $this->setSide($side);
    }

    public function setLength(float $side): void{
        $this->setSide($side);
    }

    public function __toString(): string{
        return "Square[" . parent::__toString() . "] \n";
    }
}

$circle = new Circle(5.0, "blue", false);
echo $circle . "\n";

$rectangle = new Rectangle(4.0, 6.0, "green", true);
echo $rectangle . "\n";

$square = new Square(4.0, "yellow", false);
echo $square . "\n";

?>