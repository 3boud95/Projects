<?php

class author{
    private string $name;
    private string $email;
    private string $gender;


    public function __construct(string $name, string $email, string $gender){
        $this->name=$name;
        $this->email=$email;
        $this->gender=$gender;


    }
}
?>
<?php
class Author{
    private string $name;
    private string $email;
    public string $gender;
}

class book{
    private string $name;
    private Author $author;
    private float $price;
    private int $qty; 

    public function __construc(string $name, string $author, float $price, int $qty){
        $this->name=$name;
        $this->author=$Author;
        $this->price=$price;
        $this->qty=$qty;
    }

    public function getName(){
        return $this->name;
    }
    public function getAuthor(){
        return $this->author;
    }
    public function getEmail(){
        return $this->email;
    }
    public function setEmail(string $email){
        return $this->email=$email;
    }
    public function getGender(){
        return $this->author->gender;
    }
    public function __tostring(){
        return $this->name, $this->author , $this->price , $this->qty;
    }
}
?>