<?php
class Vehicle
{
    public $color;
    public $mirror;
    public $brake;

    public function __construct($color, $mirror, $brake)
    {
        $this->color = $color;
        $this->mirror = $mirror;
        $this->brake = $brake;
        echo "Color of vehicle is $this->color<br>";
        echo "Mirror used is $this->mirror<br>";
        echo "Type of brakes used: $this->brake<br>";
    }

    public function setColor($color)
    {
        $this->color = $color;
    }

    public function setMirror($mirror)
    {
        $this->mirror = $mirror;
    }

    public function setBrake($brake)
    {
        $this->brake = $brake;
    }
}

class FourWheeler extends Vehicle
{
    public $speed;

    public function __construct($color, $mirror, $brake, $speed)
    {
        parent::__construct($color, $mirror, $brake);
        $this->speed = $speed;
        echo "Speed Limit is: $this->speed <br>";
    }

    public function setSpeed($speed)
    {
        $this->speed = $speed;
    }
}

class TwoWheeler extends Vehicle
{
    public $speed;

    public function __construct($color, $mirror, $brake, $speed)
    {
        parent::__construct($color, $mirror, $brake);
        $this->speed = $speed;
        echo "Speed Limit is: $this->speed <br>";
    }

    public function setSpeed($speed)
    {
        $this->speed = $speed;
    }
}

class Car extends FourWheeler
{
    public $type;

    public function __construct($color, $mirror, $brake, $speed, $type)
    {
        parent::__construct($color, $mirror, $brake, $speed);
        $this->type = $type;
        echo "Type of Car: $this->type";
    }

    public function setType($type)
    {
        $this->type = $type;
    }
}

class Jeep extends FourWheeler
{
    public $type;

    public function __construct($color, $mirror, $brake, $speed, $type)
    {
        parent::__construct($color, $mirror, $brake, $speed);
        $this->type = $type;
        echo "Type of Jeep: $this->type";
    }
}

class Bike extends TwoWheeler
{
    public $type;

    public function __construct($color, $mirror, $brake, $speed, $type)
    {
        parent::__construct($color, $mirror, $brake, $speed);
        $this->type = $type;
        echo "Type of Bike: $this->type";
    }
}

class Cycle extends TwoWheeler
{
    public $type;

    public function __construct($color, $mirror, $brake, $speed, $type)
    {
        parent::__construct($color, $mirror, $brake, $speed);
        $this->type = $type;
        echo "Type of Cycle: $this->type";
    }
}

class Taxi extends Car
{
    public $price;

    public function __construct($color, $mirror, $brake, $speed, $type, $price)
    {
        parent::__construct($color, $mirror, $brake, $speed, $type);
        $this->price = $price;
        echo "Price of Taxi: $this->price";
    }
}

class Benz extends Car
{
    public $price;

    public function __construct($color, $mirror, $brake, $speed, $type, $price)
    {
        parent::__construct($color, $mirror, $brake, $speed, $type);
        $this->price = $price;
        echo "Price of Benz: $this->price";
    }
}

class Toyotta extends Car
{
    public $price;

    public function __construct($color, $mirror, $brake, $speed, $type, $price)
    {
        parent::__construct($color, $mirror, $brake, $speed, $type);
        $this->price = $price;
        echo "Price of Toyotta: $this->price";
    }
}

class Honda extends Bike
{
    public $price;

    public function __construct($color, $mirror, $brake, $speed, $type, $price)
    {
        parent::__construct($color, $mirror, $brake, $speed, $type);
        $this->price = $price;
        echo "Price of Honda: $this->price";
    }
}

class Two20 extends Bike
{
    public $price;

    public function __construct($color, $mirror, $brake, $speed, $type, $price)
    {
        parent::__construct($color, $mirror, $brake, $speed, $type);
        $this->price = $price;
        echo "Price of 220: $this->price";
    }
}
$taxi = new Taxi('Red', 'Rearview', 'Disc Brake', '200km/hr', 'Sedan', '10k');


?>