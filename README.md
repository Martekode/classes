<h1 style="Red">classes</h1>

## exercise 1 
#### TODO: Create a class beverage:
```php
class Beverage {}
```
#### TODO: Create the properties color (string), price (float) and temperature (string) and also foresee a construct:
```php
class Beverage {
    public string $color;
    public float $price;
    public string $temperature;
    public string $name;

    function __construct(string $name,string $color,float $price){
        $this->temperature = 'cold';
        $this->name = $name;
        $this->color = $color;
        $this->price = $price;
    }
}
```
#### TODO: Have a default value "cold" in the construct for temperature.
see the code snipper given above and look at the $this->temperature in the __construct.
#### TODO: Make a getInfo function which returns "This beverage is <temperature> and <color>.":
```php
class Beverage {
    public function getInfo():string{
        return "This beverage is $this->temperature and $this->color.";
    }
}
```
in my original code i had:
```php
 $message = "This beverage is $this->temperature and $this->color.";
        return $message;
```
to many steps to return one thing.
#### TODO: Instantiate an object which represents cola. Make sure that the color is set to black, the price equals 2 euro and the temperature to cold automatically print the getInfo on the screen.:
```php
$cola = new Beverage('cola','black',2.00);
```
added at the bottom beneath the class beverage.
#### TODO: Print the temperature on the screen.:
```php
    echo "</br> $cola->temperature";
    echo "</br> € $cola->price";
```
also added price just because i wanted to. i used the values in the "" string. i am happy i tried this because i later found out that u can't do this for functions.
## exercise 2 
#### TODO: Make class beer that extends from Beverage.
```php
class Beer extends Beverage {}
```
#### TODO: Create the properties name (string) and alcoholPercentage (float).
```php
class Beer extends Beverage {
    public float $alcoholPercentage;
}
    
```
i already added name to the parent class. i understand that that was not the assignement but i do understand the material enough to feel comfortable changing these.
#### TODO: Foresee a construct that's allows us to use all the properties from beverage and that sets the values for name and alcoholpercentage.
```php
    class Beer extends Beverage {
        public function __construct(string $name, string $color, float $price,float $alcoholPercentage){
        $this->alcoholPercentage = $alcoholPercentage;
        parent:: __construct($name, $color, $price);
        
    }
    }
```
the parent constructer is added into the new constructor. this is to pass the name and the other properties also in this new constructor. this is where we construct the name from the parent class into the child and i don't have to declare it in the child.
#### TODO: Make a getAlcoholPercentage function which returns the alocoholPercentage.
```php
    class Beer extends Beverage {
        public function getAlcoholPercentage(){
        return $this->alcoholPercentage;
        }
    }
```
getter added..
#### TODO: Instantiate an object which represents Duvel. Make sure that the color is set to blond, the price equals 3.5 euro and the temperature to cold automatically.
```php
    $duvel = new Beer('duvel','blond',3.5,8.5);
```
#### TODO: Also the name equal to Duvel and the alcohol percentage to 8,5%:
see above

#### TODO: Print the getAlcoholPercentage 2 times on the screen in two different ways, print the color on the screen and the getInfo.
```php
    echo "</br>$duvel->alcoholPercentage";
    echo "</br>" . $duvel->getAlcoholPercentage();
```
once with getter, once just calling the PUBLIC propperty.
#### Try to get this error on the screen= Fatal error: Uncaught Error: Call to undefined method Beverage::getAlcoholPercentage() in /var/www/becode/workshop/exercise2.php on line 64
```php
    echo $cola->getAlcoholPercentage();
```
cola object does not posses the alcoholpercentage getter nor does it posses the propperty which it wants to get.
## exercise 3
#### TODO: Copy the code of exercise 2 to here and delete everything related to cola.
```php
class Beverage {
    public string $color;
    public float $price;
    public string $temperature;
    public string $name;

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
    public float $alcoholPercentage;

    public function __construct(string $name, string $color, float $price,float $alcoholPercentage){
        $this->alcoholPercentage = $alcoholPercentage;
        parent:: __construct($name, $color, $price);
        
    }
    public function getAlcoholPercentage(){
        return $this->alcoholPercentage;
    }

}
$duvel = new Beer('duvel','blond',3.5,8.5);
echo "</br>$duvel->alcoholPercentage";
echo "</br>" . $duvel->getAlcoholPercentage();
```
deleted everything to do with cola
#### TODO: Make all properties private.
```php
    #inside beverage class
    private string $color;
    private float $price;
    private string $temperature;
    private string $name;
    #inside beer class
    private float $alcoholPercentage;
```
changed to private
#### TODO: Make all the other prints work without error.
see above
#### TODO: After fixing the errors. Change the color of Duvel to light instead of blond and also print this new color on the screen after all the other things that were already printed (to be sure that the color has changed).
```php
    public function getColor():string{
        return $this->color;
    }
    public function setColor(string $color):string{
        return $this->color = $color;
    }
```
at this point i wrote getter and setter 
```php
echo "</br>".$duvel->setColor('light');
```
set to light
#### TODO: Create a new private method in the Beer class called beerInfo which returns "Hi i'm Duvel and have an alcochol percentage of 8.5 and I have a light color."
```php
    private function beerInfo():string{
        return "</br> Hi i'm Duvel and have an alcochol percentage of " . $this->getAlcoholPercentage() . " and I have a ". $this->getColor() . " color";
    }
```
#### TODO: Print this method on the screen on a new line.
calling beerinfo isnt possible sinds private... hence:
```php
    public function getBeerInfo(){
        return $this->beerInfo();
    }
```
getter for beerinfo 
```php
echo "</br>" . $duvel->getBeerInfo();
```
and now calling it inside and echo
## exercise 4
#### Copy the code of exercise 3 to here.
```php
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
    private function beerInfo():string{
        return "</br> Hi i'm Duvel and have an alcochol percentage of " . $this->getAlcoholPercentage() . " and I have a ". $this->getColor() . " color";
    }
    public function getBeerInfo(){
        return $this->beerInfo();
    }

}
$duvel = new Beer('duvel','blond',3.5,8.5);
echo $duvel->getInfo();
echo "</br>" . $duvel->getAlcoholPercentage();
$duvel->disAlcoholPercentage();
echo "</br>".$duvel->setColor('light');
echo "</br>" . $duvel->getBeerInfo();
```
#### TODO: Make all properties protected.
```php
#in beverage
    protected string $color;
    protected float $price;
    protected string $temperature;
    protected string $name;
# in beer 
    protected float $alcoholPercentage;
```
#### TODO: this code should work but you could chenge things. dont use getters in beerinfo
```php
private function beerInfo():string{
        return "</br> Hi i'm Duvel and have an alcochol percentage of " . $this->alcoholPercentage . " and I have a ". $this->color . " color";
    }
```
sinds the color is protected both the parent and the child class can access it. that's why we don't need getter here for color.
## exercise 5
#### Copy the class of exercise 1.
```php
    class Beverage {
    public string $color;
    public float $price;
    public string $temperature;
    public string $name;

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

}
$cola = new Beverage('cola','black',2.00);
echo $cola->getInfo($cola);
echo "</br> $cola->temperature";
echo "</br> € $cola->price";
```
copied
#### TODO: Change the properties to private.
```php
#added russia and made private in beverage
    private string $color;
    private float $price;
    private string $temperature;
    private string $name;
    private bool $russia;
```
#### TODO: Fix the errors without using getter and setter functions.
```php
    public function disTemp():void{
        echo "</br>".$this->temperature;
    }
    public function disPrice():void{
        echo "</br>€ ".$this->price;
    }
```
made general "printers" they can only print the value not return it.
#### TODO: Change the price to 3.5 euro and print it also on the screen on a new line.
created a scenario with the russia boolean 
```php
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
```
if russia has invaded the price goes up. when the price goes up, russia leaves. when called again russia left so that means price goes down. both get returned. but it's not a setter sinds it returns a string and not the raw data. also can only change original value by the amount i specified.
# DONE