<?php

class Animal {

    public $firstName;
    public $lastName;
    public $scientificName;
    public $gender;
    public $weight;
    public $bark;
    public $meow;

    function __construct($scientificName, $firstName, $lastName, $gender) {
        $this->scientificName = $scientificName;
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->gender = $gender;
       
    }

}

function getName() {
    return "This is my " . $this->firstName .
            " and last " . $this->lastname;
            " and this is my scientific-name " . $this->scientificName . " . ";
    
}

class Cat extends Animal {

       function __construct($scientificName, $firstName, $lastName, $gender, $meow) {
        parent::__construct($scientificName, $firstName, $lastName, $gender);
        $this->meow = $meow;
    }
    function greet() {
        return $this->meow;
    }

}

class Dog extends Animal {
  function __construct($scientificName, $firstName, $lastName, $gender, $bark) {
        parent::__construct($scientificName, $firstName, $lastName, $gender);
        $this->bark = $bark;
  }
    function hello() {
        return $this->bark;
    }

}

$cat = new Cat("Cat", "Mellow", "Yellow", "male", "w", 15);
Print " Animal 1 is a " . $cat->getName();
