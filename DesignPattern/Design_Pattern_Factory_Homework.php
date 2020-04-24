<!DOCTYPE html>
<html>
<head></head>

<body>

<h2>Design Pattern</h2>
<h2>Factory</h2>
<h2>Homework</h2>

<?php

class LoggerManager{
	protected $message;
	
	function __construct($message){
		$this->message=$message;
	}
	
	public function log($ouputMsg){
		echo "$this->message logger: $ouputMsg<br>";
	}
	
}

// Implement your classes here

$ouputMsg = "This is a error message";
$logger = new LoggerManager('file');
$logger->log($ouputMsg);

$logger = new LoggerManager('std');
$logger->log($ouputMsg);

?>
</body>
</html>