<?php

namespace Animals;

use Abstract\Animal;
use Interface\Edible;

class Chicken extends Animal implements Edible
{
    function makeSound(): string
    {
        return "Chicken: cluck-cluck!";
    }

    function howToEat(): string
    {
        return "Could be fried";
    }
}