<?php

declare(strict_types=1);

/* EXERCISE 5

Copy the class of exercise 1.

TODO: Change the properties to private.
TODO: Fix the errors without using getter and setter functions.
TODO: Change the price to 3.5 euro and print it also on the screen on a new line.
*/
class Beverage {
    private string $color;
    private float $price;
    private string $temperature;
    private string $name;

    function __construct(string $name,string $color,float $price){
        $this->temperature = 'cold';
        $this->name = $name;
        $this->color = $color;
        $this->price = $price;
    }
    public function getInfo():string{
        $message = "This beverage is $this->temperature and $this->color.";
        return $message;
    }
    public function disTemp(){
        echo "</br>".$this->temperature;
    }
    public function disPrice(){
        echo "</br>€ ".$this->price;
        echo "</br>€ ". $this->price = 3.5;
    }

}
$cola = new Beverage('cola','black',2.00);
echo $cola->getInfo($cola);
$cola->disTemp();
$cola->disPrice();