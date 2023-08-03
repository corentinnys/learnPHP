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
    private $_name;
    private $_alcoholPercentage;

    public function __construct($color, $price, $name, $alcoholPercentage)
    {
        parent::__construct($color, $price);
        $this->_name = $name;
        $this->_alcoholPercentage = $alcoholPercentage;
    }

    public function getAlcoholPercentage()
    {
        return $this->_alcoholPercentage;
    }

    private function beerInfo()
    {
        return "Bonjour je suis $this->_name ,j'ai un pourcentage de $this->_alcoholPercentage et j'ai une couleur $this->color";
    }
    public function getInfo()
    {
        return $this->beerInfo();
    }
}




$duvel = new Beer("claire", 12, "Duvel", 8.5);
echo $duvel->getAlcoholPercentage();
echo $duvel->getInfo();