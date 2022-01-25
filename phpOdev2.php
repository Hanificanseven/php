<?php

class Person{
private $firstName;
private $lastName;
private $dateYear;

function getFirstName(){
    return $this->firstName;
}
function getLastName(){
    return $this->lastName;
}
function getDateYear(){
    return $this->dateYear;
}
function getAll(){
    return $this->firstName."<br>".$this->lastName."<br>".$this->dateYear."<br>";
}
public function __construct($firstName,$lastName,$dateYear){
    $this->firstName = $firstName;
    $this->lastName=$lastName;
    $this->dateYear=$dateYear;
}
}

$ilayda = new Person("ilayda","gül","2001");
$aga = new Person("aga","gül","2018");
echo $ilayda->getFirstName();
echo "<br>";
echo $ilayda->getLastName();
echo "<br>";
echo $ilayda->getDateYear();
echo "<br>";
echo "<br>";
echo $aga->getAll();

    

 








?>