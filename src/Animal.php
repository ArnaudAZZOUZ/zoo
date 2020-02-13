<?php
namespace add;

abstract class Animals{
    private $name;



    public function __construct($n)
    {
        $this->name = $n;
    }
    /**
     * @return mixed
     */
    public function getName()
    {
        echo '$name' . $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name): void
    {
        $this->name = $name;
    }

    abstract function getNoise()::String
}
