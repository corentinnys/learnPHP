<?php

class Bevrage
{
    // The Properties
    public $color;
    public $price;
    public $temperature ;

    // The Constructor with incoming parameters in the brackets
    public function __construct($color, $price, $temperature='froids')
    {
    // in a sentence it would be: "set this class's properties with the same value as the incoming parameters"
    $this->color = $color;
    $this->price = $price;
    $this->temperature = $temperature;
    }

    // The functions
    public function getInfo()
    {
        echo "This beverage is $this->temperature and $this->color";
    }
}

$cola = new  Bevrage("black", 2);
$cola->getInfo();