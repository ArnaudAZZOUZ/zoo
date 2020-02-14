<?php


namespace App\Animals;


use App\Animal;

class Parrot extends Animal
{

    protected function getNoise(): String
    {
        return 'coco';
    } // TODO: Implement getNoise() method.
}
