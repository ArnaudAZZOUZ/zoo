<?php


namespace App\Animals;

use App\Animal;

class BubbleFish extends Animal
{

    protected function getNoise(): String
{
    return 'bouboubou';
} // TODO: Implement getNoise() method.
}
