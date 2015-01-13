<?php

class Animal {

    public $firstName;
    public $lastName;
    public $scientificName;
    public $gender;
    public $weight;
    public $bark;
    public $meow;

    function __construct($scientificName, $firstName, $lastName, $gender, $weight, $bark, $meow) {
        $this->scientificName = $scientificName;
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->gender = $gender;
        $weight->weight = $weight;
        $bark->bark = $bark;
        $this->meow = $meow;
    }

}

function getName() {
    return "This is my " . $this->firstName .
            " and last " . $this->lastname;
}

class Cat extends Animal {

    function greet() {
        return $this->meow;
    }

}

class Dog extends Animal {

    function hello() {
        return $this->bark;
    }

}

$cat = new Cat("Cat", "Mellow", "Yellow", "male", "w", 15);
Print " Animal 1 is a " . $cat->getName();
