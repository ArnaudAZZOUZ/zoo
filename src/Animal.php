<?php
namespace App;

abstract class Animal{
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
        echo $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name): void
    {
        $this->name = $name;
    }

    protected abstract function getNoise():String;

    public function noise(){
      return  $this->getNoise();
    }

}
