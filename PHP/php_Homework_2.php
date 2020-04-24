<!DOCTYPE html>
<html>
<body>
<?php
print("<h2>Section : README</h2>");
print("<h2>Getting started programming PHP</h2>");
print("<h2>Homework_2</h2><br>");

function factorialOfNumber($n)
{
	$i=$n;
	$fac=1;//the variable assigned the answer of factorial.
	while($i>=1){
		$fac*=$i;
		$i-=1;
	}
	print("The factorival of ".$n." = ".$fac);
}

echo factorialOfNumber(10);
?>
</body>
</html>