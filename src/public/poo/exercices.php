<?php
namespace poo\exercice1;
class Beverage
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



class Beer extends Beverage
{
    public $name;
    public $alcoholPercentage;

    public function __construct($color, $price, $name, $alcoholPercentage)
    {
        parent::__construct($color, $price);
        $this->name = $name;
        $this->alcoholPercentage = $alcoholPercentage;
    }

    public function getAlcoholPercentage()
    {
        return $this->alcoholPercentage;
    }
}



$cola = new  Beverage("black", 2);
$cola->getInfo();
$duvel = new Beer("Blod", 12, "Duvel", 8.5);
echo $duvel->getAlcoholPercentage();