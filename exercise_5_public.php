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
    private bool $russia;

    function __construct(string $name,string $color,float $price){
        $this->temperature = 'cold';
        $this->name = $name;
        $this->color = $color;
        $this->price = $price;
        $this->russia = true;
    }
    public function getInfo():string{
        $message = "This beverage is $this->temperature and $this->color.";
        return $message;
    }
    public function disTemp():void{
        echo "</br>".$this->temperature;
    }
    public function disPrice():void{
        echo "</br>€ ".$this->price;
    }
    public function inflate():string{
        if ($this->russia){
            $this->price += 1.5;
            $this->russia = false;
            return "</br>russia invaded and the price is now € ".$this->price;
            
        }else{
            $this->russia= true;
            $this->price -= 1.5;
            return "</br>russia left and the price has become € ".$this->price;
        }
    }

}
$cola = new Beverage('cola','black',2.00);
echo $cola->getInfo($cola);
$cola->disTemp();
$cola->disPrice();
echo $cola->inflate();
echo $cola->inflate();