<?php

namespace Fruits;

use Abstract\Fruit;

class Orange extends Fruit
{
    function howToEat(): string
    {
        return "Orange could be juiced";
    }
}