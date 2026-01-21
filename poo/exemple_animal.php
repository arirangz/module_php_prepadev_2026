<?php

abstract class Animal 
{
    public abstract function makeSound():void;
}

class Dog extends Animal
{
    public function makeSound(): void
    {
        echo "Waf waf!";
    }
}


$animal1 = new Animal();
var_dump($animal1);