<?php

declare(strict_types=1);

/* EXERCISE 3

TODO: Copy the code of exercise 2 to here and delete everything related to cola.
TODO: Make all properties private.
TODO: Make all the other prints work without error.
TODO: After fixing the errors. Change the color of Duvel to light instead of blond and also print this new color on the screen after all the other things that were already printed (to be sure that the color has changed).
TODO: Create a new private method in the Beer class called beerInfo which returns "Hi i'm Duvel and have an alcochol percentage of 8.5 and I have a light color."

Make sure that you use the variables and not just this text line.

TODO: Print this method on the screen on a new line.

USE TYPEHINTING EVERYWHERE!
*/
class Beverage {
    private string $color;
    private float $price;
    private string $temperature;
    private string $name;

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
    private float $alcoholPercentage;

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
        return "</br> Hi i'm Duvel and have an alcochol percentage of " . $this->getAlcoholPercentage() . " and I have a ". $this->getColor() . " color";
    }

}
$duvel = new Beer('duvel','blond',3.5,8.5);
echo $duvel->getInfo();
echo "</br>" . $duvel->getAlcoholPercentage();
$duvel->disAlcoholPercentage();
echo "</br>".$duvel->setColor('light');
echo "</br>" . $duvel->beerInfo();
