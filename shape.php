<?php

abstract class Shape {
    public abstract function getArea();
}
 
class Rectangle extends Shape 
{
    private $_width;
    private $_height;

    public function __construct($width, $height){
        $this->_width = $width;
        $this->_height = $height;
    }

    public function getArea(){
        return $this->_width * $this->_height;
    }
}

class Circle extends Shape {
    private $_radius;

    public function __construct($radius){
        $this->_radius = $radius;
    }

    public function getArea(){
        return $this->_radius * $this->_radius * 3.14;
    }
}

?>