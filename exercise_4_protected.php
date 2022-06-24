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
        $message = "This beverage is $this->temperature and $this->color.";
        return $message;
    }

}

#extention
class Beer extends Beverage {
    protected float $alcoholPercentage;

    public function __construct(string $name, string $color, float $price,float $alcoholPercentage){
        $this->alcoholPercentage = $alcoholPercentage;
        parent:: __construct($name, $color, $price);
        
    }
    public function getAlcoholPercentage(){
        return $this->alcoholPercentage;
    }
    public function disAlcoholPercentage():void{
        echo "</br>".$this->alcoholPercentage;
    }

}
$duvel = new Beer('duvel','blond',3.5,8.5);
echo "</br>" . $duvel->disAlcoholPercentage();
echo "</br>" . $duvel->getAlcoholPercentage();

