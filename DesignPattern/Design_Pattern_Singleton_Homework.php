<!DOCTYPE html>
<html>
<head></head>

<body>

<h2>Design Pattern</h2>
<h2>Singleton</h2>
<h2>Homework</h2>

<?php

class Logger
{
    // Define a private static property to store the instance.
    private static $instance = null;

    // Declaring constructor of the class to be private.
    private function __construct(){
    	echo "make an instance.<br>";
    }

    // Providing a static method that returns a reference to the instance.
    public static function getInstance(){
    
        if (null === self::$instance) {
            self::$instance = new Logger();
        }

        return self::$instance;
    }
    public function log($str){
    	echo "$str<br>";
    }
}

//print("singleton1<br>");
$singleton1 = Logger::getInstance();
$singleton1->log("abc");

//print("singleton2<br>");
$singleton2 = Logger::getInstance();
$singleton2->log("def");

if($singleton1 === $singleton2){
	print("same instance.");
}

?>
</body>
</html>