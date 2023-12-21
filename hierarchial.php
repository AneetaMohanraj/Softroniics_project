<?php
class Vehicle                  // parent class
{
    public $color;
    public $mirror;
    public $brake;
    public function __construct($color,$mirror,$brake)
    {
        $this->color=$color;
        $this->mirror=$mirror;
        $this->brake=$brake;
        echo "Color of vehicle is $this->color<br>";
        echo "Mirror used is $this->mirror<br>";
        echo "Type of brakes used : $this->brake<br>";
    }

}
class FourWheeler extends Vehicle    //child 1 of vehicle
{
    public $speed;
    public function __construct($speed)
    {
        $this->$speed=$speed;
        echo "Speed Limit is : $this->speed <br>";
    }
}
class TwoWheeler extends Vehicle    //child 2 of vehicle
{
    public $speed;
    public function __construct($speed)
    {
        $this->$speed=$speed;
        echo "Speed Limit is : $this->speed <br>";
    }
}
class Car extends FourWheeler     //child 1 of FourWheeler
{
    public $type;
    public function __construct($type)
    {
        $this->type=$type;
        echo "Type of Car : $this->type";
    }
}
public class Jeep extends FourWheeler     //child 2 of FourWheeler
{
    public $type;
    public function __construct($type)
    {
        $this->type=$type;
        echo "Type of Jeep : $this->type";
    }
}
class Bike extends TwoWheeler     //child 1 of TwoWheeler
{
    public $type;
    public function __construct($type)
    {
        $this->type=$type;
        echo "Type of Bike : $this->type";
    }
}
class Cycle extends TwoWheeler     //child 2 of TwoWheeler
{
    public $type;
    public function __construct($type)
    {
        $this->type=$type;
        echo "Type of Cycle : $this->type";
    }
}
class Taxi extends Car     //child 1 of Car
{
    private $obj1;
    private $obj2;
    private $obj3;
    public function __construct()
    {
        $this->obj1=new Car('Taxi');
        $this->obj2=new FourWheeler('200km/hr');
        $this->obj3=new Vehicle('Red',4,'Disc Brake');
        $price="10k";
        echo "Price of Taxi : $price";
    }
}
class Benz extends Car     //child 2 of Car
{
    private $obj1;
    private $obj2;
    private $obj3;
    public function __construct()
    {
        $this->obj1=new Car('Benz');
        $this->obj2=new FourWheeler('200km/hr');
        $this->obj3=new Vehicle('Black',4,'ABS');
        $price="1M";
        echo "Price of Benz : $price";
    }
}
class Toyotta extends Car     //child 3 of Car
{
    private $obj1;
    private $obj2;
    private $obj3;
    public function __construct()
    {
        $this->obj1=new Car('Toyotta');
        $this->obj2=new FourWheeler('200km/hr');
        $this->obj3=new Vehicle('White',4,'Vacuum brakes');
        $price="50k";
        echo "Price of Toyotta : $price";
    }
}
class Honda extends Bike     //child 1 of Bike
{
    private $obj1;
    private $obj2;
    private $obj3;
    public function __construct()
    {
        $obj1=new Bike('Honda');
        $obj2=new TwoWheeler('200km/hr');
        $obj3=new Vehicle('Red',4,'Disc Brake');
        $price="10k";
        echo "Price of Honda : $price";
    }
}
class Two20 extends Bike     //child 2 of Bike
{
    private $obj1;
    private $obj2;
    private $obj3;
    public function __construct()
    {
        $this->obj1=new Bike('Two20');
        $this->obj2=new TwoWheeler('200km/hr');
        $this->obj3=new Vehicle('Red',4,'Disc Brake');
        $price="10k";
        echo "Price of 220 : $price";
    }
}
$val=new Taxi();
?>