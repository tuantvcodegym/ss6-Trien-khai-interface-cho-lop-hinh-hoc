<?php
/**
 * Created by PhpStorm.
 * User: dungduong
 * Date: 11/21/18
 * Time: 17:14
 */
include_once ('Shape.php');
include 'resizeable.php';

class Circle extends Shape implements Resizeable
{
    public $radius;

    public function resize()
    {
        return $this->calculateArea()*$this->radius . '<br>' . ' chu vi la: ' .$this->calculatePerimeter()*$this->radius;
    }

    public function __construct($name, $radius)
    {
        parent::__construct($name);
        $this->radius = $radius;
    }

    public function calculateArea(){
        return pi() * pow($this->radius, 2);
    }

    public function calculatePerimeter(){
        return pi() * $this->radius * 2;
    }
}