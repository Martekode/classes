<?php

declare(strict_types=1);

/* EXERCISE 4

Copy the code of exercise 2 to here and delete everything related to cola.

TODO: Make all properties protected.
TODO: Make all the other prints work without error without changing the beverage class.

USE TYPEHINTING EVERYWHERE!
*/
class Beverage {
    protected string $color;
    protected float $price;
    protected string $temperature;
    protected string $name;

    public function __construct(string $name,string $color,float $price){
        $this->temperature = 'cold';
        $this->name = $name;
        $this->color = $color;
        $this->price = $price;
    }
    public function getInfo():string{
        $message = "This beverage is $this->temperature and $this->color for € $this->price.";
        return $message;
    }
    public function getColor():string{
        return $this->color;
    }
    public function setColor(string $color):string{
        return $this->color = $color;
    }
}
#extention
class Beer extends Beverage {
    protected float $alcoholPercentage;

    public function __construct(string $name, string $color, float $price,float $alcoholPercentage){
        $this->alcoholPercentage = $alcoholPercentage;
        parent:: __construct($name, $color, $price);
        
    }
    public function disAlcoholPercentage():void{
        echo "</br>".$this->alcoholPercentage;
    }
    public function getAlcoholPercentage():float{
        return $this->alcoholPercentage;
    }
    public function beerInfo():string{
        return "</br> Hi i'm Duvel and have an alcochol percentage of " . $this->alcoholPercentage . " and I have a ". $this->color . " color";
    }

}
$duvel = new Beer('duvel','blond',3.5,8.5);
echo $duvel->getInfo();
echo "</br>" . $duvel->getAlcoholPercentage();
$duvel->disAlcoholPercentage();
echo "</br>".$duvel->setColor('light');
echo "</br>" . $duvel->beerInfo();

