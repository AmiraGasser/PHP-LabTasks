<?php
include "ShapeClass.php";
include "DrawableInterface.php";
use _SHAPE_CLASS\Shape;
use _DRAWABLE_INTERFACE\Drawable;

class Rectangle extends Shape implements Drawable{
    protected $width;
    protected $length;
    public function __construct($width =0 , $length=0) {
        $this->width = $width;
        $this->length = $length;
    }
    public function area_calc(){
        return $this->width*$this->length;
    }
    public function perimeter_calc(){
        return 2*($this->width+$this->length);
    }
    public function draw(){
        echo "
        <div style=
                'width: " . ($this->width) . "px; 
                height: " . ($this->length) . "px; 
                background-color: blue;'>
        </div>";
    }
}
$rectangle1 = new Rectangle(50,70);
$rectangle1->draw();
?>