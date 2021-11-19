<?php

class Prototype {
    public $property;
    public function clone(): Prototype
    {
        $newInstance = new Prototype;
        $newInstance->property = $this->property;
        return $newInstance;
    }
}

$obj1 = new Prototype;
$obj1->property = 'Shaxzodbek';
$newObject = $obj1->clone();

var_dump($obj1);
var_dump($newObject);