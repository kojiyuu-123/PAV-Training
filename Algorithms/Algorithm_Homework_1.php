<!DOCTYPE html>
<html>
<body>
<?php
print("<h2>Algorithms</h2>");
print("<h2>Homework_1</h2><br>");

function search_min($arr,$n,$m){
	$missing_array=array();
	
	for ($i=0;$i<$m;$i++){
		if(!in_array($i,$arr,true)){
			return $i;
		}
	}
	return -1;
}

$input_array=array(0,2,1,9,7);$n=5;$m=10;
//$input_array=array(4,11,13,6);$n=4;$m=12;
//$input_array=array(5,1,6,3,7,0,2,4,10);$n=9;$m=11;
//$input_array=array(1,2,3,0);$n=4;$m=4;

$n=sizeof($input_array);


$result=search_min($input_array,$n,$m);
if($result!=-1){
	print("The smallest number is ".$result.".<br>");
}
else{
	print("Not missing number in this array.<br>");
}


?>
</body>
</html>
