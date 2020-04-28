<!DOCTYPE html>
<html>
<body>
<?php
print("<h2>SOLID Principles</h2>");
print("<h2>Homework_2</h2><br>");

//
// How violates SOLID Principles ¨ Interface Segregation Principle, Liskov subsutution principle
//
//implements interface separately

interface WorkAbleInterface{
	public  function work();
}
interface SleepAbleInterface{
	public  function  sleep();
}

class HumanWorker implements WorkAbleInterface, SleepAbleInterface{

	public  function work(){
		var_dump('works');
	}
	public  function  sleep()
    {
    	var_dump('sleep');
	}
}

class RobotWorker implements WorkAbleInterface{
	public  function work(){
		if ($this->hasPower()) {
			HumanWorker::work();
		}
	}
	
	public  function hasPower()
	{
	// return true if robot have power, otherwise false.
		return true;
	}
}

$human = new HumanWorker;
$human->work();
echo "<br>";

$robot = new RobotWorker;
$robot->work();

?>
</body>
</html>