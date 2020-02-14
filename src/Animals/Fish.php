<?php


namespace App\Animals;


use App\Animal;

class Fish extends Animal
{

    protected function getNoise(): String
    {
       return 'bloubloublou';
    } // TODO: Implement getNoise() method.
}