<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        //*Lecture 1&2 examples*
       class food{
           public $foodType = " default type";
           public $toppingType = "default topping type";
           public $maker = "Dominoes";
           public $price = 20;
           
           function __construct($title, $foodType, $toppingType, $maker) {
               $this->foodType= $foodType;
               $this->toppingType = $toppingType;
               $this->maker =$maker;
           }
           
           
           function getType(){
               return"{$this->toppingType}".
               "{$this->foodType}";
           }
       }
       
       $food1 = new Food();
       $food1->toppingType = "Peperoni  ";
       $food1->foodType = "Pizza         ";
   
       print"The type of the pizza is {$food1->getType()}";
       //-----------------------------------------------------------------------
       class car{
           public $carType = "Car type";
           public $modelType = " Model type";
           public $manufactuer = "Toyota";
           public $price = 2000;
           
           function __construct($title, $carType, $modelType, $maker) {
               $this->carType= $carType;
               $this->modelType = $modelType;
               $this->manufactuer= $manufactuer;
           }
           
           function getType(){
               return"{$this->carType}".
               "{$this->modelType}";
           }
       }
       
       $car1 = new car();
       $car1->carType = "Toyota  ";
       $car1->modelType = "Prius                    ";
   
       print"The type of the car is {$car1->getType()}";
       //-----------------------------------------------------------------------
          class Dog{
           public $dogType = "Large";
           public $breedType = "German Shepard";
           public $origin = "Germany";
           public $price = 200;
           
           function __construct($title, $dogType, $breedType, $origin) {
               $this->dogType = $dogType;
               $this->breedType = $breedType;
               $this->origin = $origin;
           }
           
           function getType(){
               return"{$this->dogType}".
               "{$this->breedType}";
           }
       }
       
       $Dog1 = new Dog();
       $Dog1->dogType = "Large ";
       $Dog1->breedType = "German Shepard           ";
   
       print"The type of the dog is {$Dog1->getType()}";
       //*end of lecture 1&2 exapmles*
       //-----------------------------------------------------------------------

        ?>
    </body>
</html>
