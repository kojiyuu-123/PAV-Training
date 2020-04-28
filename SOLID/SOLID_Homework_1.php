<!DOCTYPE html>
<html>
<body>
<?php
print("<h2>SOLID Principles</h2>");
print("<h2>Homework_1</h2><br>");

//
//How violates SOLID Principles ¨ Open-closed Principles, Dependency Inversion Principle
// 

//calculate the area in each classes.

interface CalArea{
	public function calculateArea();
}

class Rectangle implements CalArea{
	public $width;
	public $height;
	
	public function setWidth($width){
		$this->width=$width;
	}
	
	public function setHeight($height){
		$this->height=$height;
	}

	
	public function calculateArea(){
		$area=$this->height * $this->width;
		return $area;
	}
}

class Square implements CalArea{
	public $width;
	
	public function setWidth($width){
		$this->width=$width;
	}
	
	public function calculateArea(){
		$area=$this->width * $this->width;
		return $area;
	}
}

class Circle implements CalArea{
	public $rad;
	public function setRadius($rad){
		$this->rad=$rad;
	}
	
	public function calculateArea(){
		$area=$this->rad * $this->rad * pi();
		return $area;
	}
}

class CostManager{

	public function calculate(CalArea $shape){
		
		$costPerUnit = 1.5;
		$totalCost = $costPerUnit * $shape->calculateArea();
		return $totalCost;
	}
}

$circle = new Circle();
$circle->setRadius(5);
$obj = new CostManager($circle);
echo $obj->calculate($circle)."<br>";

$sqr = new Square();
$sqr->setWidth(5);
$obj_sqr = new CostManager($sqr);
echo $obj_sqr->calculate($sqr)."<br>";

$rect = new Rectangle();
$rect->setWidth(8);
$rect->setHeight(5);
$obj_rect = new CostManager($rect);
echo $obj_rect->calculate($rect)."<br>";


?>
</body>
</html>