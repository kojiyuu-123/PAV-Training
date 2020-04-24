<!DOCTYPE html>
<html>
<body>
<?php
print("<h2>Section : README</h2>");
print("<h2>Getting started programming PHP</h2>");
print("<h2>Homework_1</h2><br>");

$i = 1;
$sum = 0;
while($i <= 50){
	if($i%2==1){
		#print("i = ".$i."<br>");
		$sum+=$i;
	}
	$i+=1;
}
print("The sum of the odd numbers between 0 to 50 = " . $sum);

?>
</body>
</html>