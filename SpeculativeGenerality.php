<?php
abstract class Shape {
    public $color;
    public $material;
    abstract public function getArea(): float;
    abstract public function getPerimeter(): float;
}
class Circle extends Shape {
    public $radius;
    public function getArea(): float {
        return pi() * $this->radius * $this->radius;
    }
    public function getPerimeter(): float {
        return 2 * pi() * $this->radius;
    }
}
class Square extends Shape {
    public $sideLength;
    public function getArea(): float {
        return $this->sideLength * $this->sideLength;
    }
    public function getPerimeter(): float {
        return 4 * $this->sideLength;
    }
}