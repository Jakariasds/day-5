<?php
// echo "hello bitm";
// $firstName="Jakaria";
// $lastName="Habib";
// echo "My full name is {$firstName} {$lastName} <br>";
// echo "My full name is ".$firstName." ".$lastName;


//  echo PHP_EOL;
// $cars=["volvo","ford","toyota"];
// echo $cars[2];

// class Actor{
//     public $actorname;
//     public $moviename;
//     public $earnings;
// }
// actor


// information details about mine


class personalInfo{
    public $firstName;
    public $lastName;
    public $age;

    function __construct($fname,$lname,$age){
        $this->firstName = $fname;
        $this->lastName = $lname;
        $this->age = $age;
        $this->personalInfo();
    }
    function personalInfo(){
        echo "My first name is {$this->firstName} and last name is {$this->lastName}. My age is {$this->age}.";
    }     
}
$personalInfo = new personalInfo('Jakaria','Habib',28);
// $personalInfo->firstName="Jakaria";
// $personalInfo->lastName = "Habib";
// $personalInfo->age=28;

// echo "My first name is {$personalInfo->firstName} and last name is {$personalInfo->lastName}. My age is {$personalInfo->age}.";