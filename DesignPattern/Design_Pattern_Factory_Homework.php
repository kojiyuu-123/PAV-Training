<!DOCTYPE html>
<html>
<head></head>

<body>

<h2>Design Pattern</h2>
<h2>Factory</h2>
<h2>Homework</h2>

<?php

interface Log{
	public function message($ouputMsg);
}

class StdLogger implements Log{
	public function message($ouputMsg){
		echo "Std logger: $ouputMsg<br>";
	}
}

class FileLogger implements Log{
	public function message($ouputMsg){
		echo "File logger: $ouputMsg<br>";
	}
}

class LoggerManager {
	protected $message;
	
	function __construct($message){
		$this->message=$message;
	}
	
	function log($ouputMsg){
		if($this->message=='file'){
			$obj=new FileLogger;
		}
		elseif($this->message=='std'){
			$obj=new StdLogger;
		}
		else{
			echo "couldn't output message.<br>";
		}
		$obj->message($ouputMsg);
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