<?php
include "ShapeClass.php";
include "DrawableInterface.php";
use _SHAPE_CLASS\Shape;
use _DRAWABLE_INTERFACE\Drawable;

class Circle extends Shape implements Drawable{
    protected $radius;
    public function __construct($radius=0) {
        $this->radius = $radius;
    }
    public function area_calc(){
        return 3.14 * $this->radius * $this->radius;
    }
    public function perimeter_calc(){
        return 2*3.14 * $this->radius;
    }
    public function draw(){
        echo "
        <div style=
                'width: " . ($this->radius) . "px; 
                height: " . ($this->radius) . "px; 
                border-radius: 50%; 
                background-color: red;'>
        </div>";
    }
}

$circle1 = new Circle(200);
$circle1->draw();
?>