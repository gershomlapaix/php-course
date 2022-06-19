<?php

namespace Furniture;

class Table
{
    private $name;
    private $brand;
    private $cost;

    public function __construct($name, $brand, $cost)
    {
        $this->name = $name;
        $this->brand = $brand;
        $this->cost = $cost;
    }

    function setName($name)
    {
        $this->name = $name;
    }

    function getName()
    {
        return $this->name;
    }

    function setBrand($brand)
    {
        $this->brand = $brand;
    }

    function getBrand()
    {
        return $this->brand;
    }


    function setCost($cost)
    {
        $this->cost = $cost;
    }

    function getCost()
    {
        return $this->cost;
    }

    public function calculateText(){
        return $this->cost * 0.18;
    }
}
