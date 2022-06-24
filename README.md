# classes
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

