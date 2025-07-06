<?php
require 'vehicle.php';

class Car implements Vehicle
{
    private $make;
    private $model;
    private $year;

    public function __construct($make, $model, $year)
    {
        $this->make = $make;
        $this->model = $model;
        $this->year = $year;
    }

    public function getMake()
    {
        return $this->make;
    }

    public function getModel()
    {
        return $this->model;
    }

    public function getYear()
    {
        return $this->year;
    }
    public function setMake($make)
    {
        $this->make = $make;
    }
    public function setModel($model)
    {
        $allowModel = ['Sedan', 'SUV', 'Truck', 'Coupe', 'Convertible'];
        if (in_array($model, $allowModel)) {
            $this->model = $model;
        } else {
            throw new Exception("Invalid model type.");
        }
    }
    public function setYear($year)
    {
        $this->year = $year;
    }

    public function displayInfo()
    {
        return "{$this->year} {$this->make} {$this->model}";
    }

    public function __destruct()
    {
        echo "Car object with make {$this->make} is being destroyed.";
    }
}
