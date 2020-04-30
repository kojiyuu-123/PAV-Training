<!DOCTYPE html>
<html>
<body>
<?php
print("<h2>Algorithms</h2>");
print("<h2>Homework_3</h2><br>");

function print_array($arr,$find_ind,$find_ind2,$search_sum){
	if($find_ind!=-1){
		print("true<br>");
		print("There is a pair (".$arr[$find_ind].", ".$arr[$find_ind2].") with sum ".$search_sum.".<br>");
	}
	else{
		print("false<br>");
		print("There is no pair with sum ".$search_sum.".<br>");
	}
}

function find_sum_x($arr,$x){

	for ($rotate=0;$rotate<sizeof($arr);$rotate++){
	
		if($rotate+1==sizeof($arr) || $arr[$rotate]>$arr[$rotate+1]){
			break;
		}
	}
	
	$il=$rotate;
	$is=$rotate+1;
	if($is == sizeof($arr)){
		$is=0;
	}
	
	while($is!=$il){
	
		$sum=$arr[$is]+$arr[$il];
		if($sum == $x){
			print_array($arr,$is,$il,$x);
			return;
		}
		elseif($sum > $x){
			$il-=1;
		}
		else{
			$is+=1;
		}
		
		if($is >= sizeof($arr)){
			$is=0;
		}
		if($il < 0){
			$il=sizeof($arr)-1;
		}
		
	}
	print_array($arr,-1,$il,$x);
}

$input=array(11,15,6,8,9,10);$search=16;//true
//$input=array(11,15,26,38,9,10);$search=35;//true
//$input=array(11,15,26,38,9,10);$search=45;//false
//$input=array(11,15,26,38,9,10);$search=19;//true
find_sum_x($input,$search);

?>
</body>
</html>