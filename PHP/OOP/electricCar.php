<?php

require 'Trait.php';
require 'Car.php';

class ElectricCar extends Car
{
    use loggerTrait;

    private $batteryCapacity;

    public function __construct($make, $model, $year, $batteryCapacity)
    {
        parent::__construct($make, $model, $year);
        $this->batteryCapacity = $batteryCapacity;
    }

    public function displayInfo()
    {
        return parent::displayInfo() . " with a battery capacity of {$this->batteryCapacity} kWh";
    }

    public function drive()
    {
        $this->log("Driving an electric car: " . $this->displayInfo());
    }

    public function testFeatures()
    {
        $a = 10;
        $b = 3;
        $sum = $a + $b;        
        $product = $a * $b;     
        $modulo = $a % $b;      

        $this->log("Sum: $sum, Product: $product, Modulo: $modulo");

        // Toán tử logic & so sánh
        if ($sum > 10 && $product < 50) {
            $this->log("Condition passed: sum > 10 AND product < 50");
        } else {
            $this->log("Condition failed.");
        }

        $type = 'SUV';
        switch ($type) {
            case 'Sedan':
                $this->log("This is a Sedan");
                break;
            case 'SUV':
                $this->log("This is an SUV");
                break;
            default:
                $this->log("Unknown type");
                break;
        }

        for ($i = 1; $i <= 3; $i++) {
            $this->log("For loop count: $i");
        }

        // While loop
        $count = 0;
        while ($count < 2) {
            $this->log("While loop count: $count");
            $count++;
        }

        // Foreach loop
        $features = ['GPS', 'AutoPilot', 'Heated Seats'];
        foreach ($features as $feature) {
            $this->log("Feature: $feature");
        }

        if (isset($_GET['battery'])) {
            $batteryInput = $_GET['battery'];
            $this->log("Battery capacity input from URL: $batteryInput");
        }

        return "Test features executed.";
    }
}
