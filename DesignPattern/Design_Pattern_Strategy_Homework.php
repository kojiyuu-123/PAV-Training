<!DOCTYPE html>
<html>
<head></head>

<body>

<h2>Design Pattern</h2>
<h2>Strategy</h2>
<h2>Homework</h2>

<?php

interface move{
	public function go();
}

class Car implements move{
	public function go(){
		echo "Car is moving";
	}
}

class Bike implements move{
	public function go(){
		echo "Bike is moving";
	}
}

class Vehicle{
	private $vehicle;
	
	public function __construct($vehicle){
		$this->vehicle=$vehicle;
	}
	
	public function getVehicle(){
		return $this->vehicle;
	}
}

$veh = new Vehicle("Bike");//Car or Bike
$rid = $veh->getVehicle();

switch ($rid){
	case "Bike":
		$objveh = new Bike();
		break;
	case "Car":
		$objveh = new Car();
		break;
}

$objveh->go();

?>
</body>
</html>