<?php

class Dog{

    var $nose="square";
    var $fur_color="black";
   var  $eye_color="yellow";

    function ShowAll(){
        echo $this->nose;
        echo $this->fur_color;
        echo $this->eye_color;

    }

}

$pitbull=new Dog();

$pitbull->ShowAll();


?>