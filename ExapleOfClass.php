<?php

//-----------------------------------------------------------------------
//Exapmle of a class

class Human {

    public $isAlive = true;
    public $firstname;
    public $lastname;
    public $age;

    public function __construct($firstname, $lastname, $age) {
        $this->firstname = $firstname;
        $this->lastname = $lastname;
        $this->age = $age;
    }

    public function greet() {
        return "Hello, I am " . $this->firstname . " " . $this->lastname . ". Im Looking For Jake the Dog ! ";
    }

}

$me = new Human('Finn', 'The Human', 14);

echo $me->greet();
?>