<!DOCTYPE html>
<html>
<body>
<?php
print("<h2>Algorithms</h2>");
print("<h2>Homework_3</h2><br>");

function print_array($arr,$find_ind,$value,$search_sum){
	if($find_ind!=-1){
		print("true<br>");
		print("There is a pair (".$arr[$find_ind].", ".$value.") with sum ".$search_sum.".<br>");
	}
	else{
		print("false<br>");
		print("There is no pair with sum ".$search_sum.".<br>");
	}
}

function find_sum_x($arr,$x){

	$rotate=0;
	$min=min($arr);
	for ($i=0;$i<sizeof($arr);$i++){
		if($arr[$i]==$min){
			$rotate=$i;
		}
	}
	
	for ($i=0;$i<sizeof($arr);$i++){
		$arr_except=$arr;
		unset($arr_except[$i]);
		$arr_except=array_values($arr_except);
		
		$search_value=$x-$arr[$i];
		
		if($search_value >= $arr_except[0]){
			$ind=recursive($arr_except,0,$rotate-1,$search_value);
		}
		else{
			$ind=recursive($arr_except,$rotate,sizeof($arr_except)-1,$search_value);
		}
		if($ind!=-1){
			print_array($arr_except,$ind,$arr[$i],$x);
			return;
		}
	}
	print_array($arr,-1,$i,$x);
}

function recursive($arr,$l,$r,$search_val){
	//binary search
	
	if($r>=$l){
		$mid=ceil($l+($r-$l)/2);
		if($arr[$mid]==$search_val){
			return floor($mid);
		}
		
		if($arr[$mid] > $search_val){
			return recursive($arr,$l,$mid-1,$search_val);
		}
		return recursive($arr,$mid+1,$r,$search_val);
	}
	return -1;
}

$input=array(11,15,6,8,9,10);$search=16;//true
//$input=array(11,15,26,38,9,10);$search=35;//true
//$input=array(11,15,26,38,9,10);$search=45;//false
//$input=array(11,15,26,38,9,10);$search=19;//true
find_sum_x($input,$search);

?>
</body>
</html>
