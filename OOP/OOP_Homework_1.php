<!DOCTYPE html>
<html>
<body>
<?php

print("<h2>Programming</h2>");
print("<h2>OOP</h2>");
print("<h2>Homework_1</h2><br>");

class shape{
	public $width;
	public $height;
	
	function __construct($width, $height){
		$this->width = $width;
		$this->height = $height;
	}
}

class triangle extends shape{
	public function area(){
		print("The area of the triangle (width=".$this->width.", height=".$this->height.") = ".($this->width*$this->height/2)."<br>");
	}
}

class rectangle extends shape{
	public function area(){
		print("The area of the rectangle (width=".$this->width.", height=".$this->height.") = ".($this->width*$this->height)."<br>");
	}
}

$width=4;
$height=5;

$tri = new triangle($width, $height);
$tri->area();
$rec = new rectangle($width, $height);
$rec->area();

?>
</body>
</html>