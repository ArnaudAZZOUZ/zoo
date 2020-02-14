<?php


namespace App\Animals;


use App\Animal;

class Dove extends Animal
{

    protected function getNoise(): String
    {
        return 'Rou ouuuu';
    } // TODO: Implement getNoise() method.
}
