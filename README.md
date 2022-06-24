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
