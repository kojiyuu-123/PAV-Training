<!DOCTYPE html>
<html>
<body>
<?php
print("<h2>Algorithms</h2>");
print("<h2>Homework_2</h2><br>");

function sum_pairs($arr1,$arr2,$k){
	sort($arr1);sort($arr2);
		
	if($k<=0){
		print("k<=0<br>");
		return;
	}
	
	if($k>sizeof($arr1)*sizeof($arr2)){
		print("k = ".$k." is out of range.<br>");
		print("Please k <= ".sizeof($arr1)*sizeof($arr2)."<br>");
		return;
	}
	
	$count=0;
	
	$size_1=sizeof($arr1);
	$size_2=sizeof($arr2);
	
	$ind_1=0;
	$ind_2=0;
	
	$in_1=$ind_1+1;
	$in_2=$ind_2+1;
	
	
	
	print("[".$arr1[$ind_1].",".$arr2[$ind_2]. "] ");
	$count++;
	if($count==$k){
		return;
	}

	$ind_1=0;$in_2=1;
	$ind_2=0;$in_1=1;
	
	$sum=$arr1[$in_1]+$arr2[$ind_2];
	
	while($ind_1 < $size_1 && $ind_2 < $size_2){
		
		if($sum >= $arr1[$ind_1]+$arr2[$in_2] && $arr1[$ind_1]+$arr2[$in_2] <= $arr1[$in_1]+$arr2[$ind_2]){
			
			print("[".$arr1[$ind_1].",".$arr2[$in_2]."] ");
			$count++;
			
			$in_2++;
			
			if($in_2 >= $size_2){
				$ind_1++;
				$in_2=$ind_2+1;
			}
			if($in_2>=sizeof($arr2)){
				$in_2--;
				break;
			}
			if($in_1 >= $size_1){
				break;
			}
			$sum=$arr2[$ind_2]+$arr1[$in_1];
			
		}
		
		else{
			print("[".$arr1[$in_1].",".$arr2[$ind_2]."] ");
			$count++;
			$in_1++;
			
			if($in_1 >= $size_1){
				$ind_2++;
				$in_1=$ind_1+1;
			}
			
			if($in_1>=sizeof($arr1)){
				$in_1--;
				break;
			}
			
			if($in_2 >= $size_2){
				break;
			}
			$sum=$arr1[$ind_1]+$arr2[$in_2];
		}

		if($count>=$k){
			return;
		}
	}
	
	while($ind_1<sizeof($arr1)){
		
		if($count>=$k){
			return;
		}
		
		print("[".$arr1[$ind_1].",".$arr2[$in_2]."] ");
		$count++;
		$ind_1++;
		
	}

	while($ind_2<sizeof($arr2)){
		
		if($count>=$k){
			return;
		}
		
		print("[".$arr1[$in_1].",".$arr2[$ind_2]."] ");
		$count++;
		$ind_2++;
		
	}
	
}

$arr1=array(11,7,1);$arr2=array(4,6,2);
//$arr1=array(4,5,6);$arr2=array(1,2,3);

//$arr1=array(5,5,5);$arr2=array(1,2,3);
//$arr2=array(4,5,5);$arr1=array(1,2,3);

$k=3;

print("k = ".$k."<br>");
sum_pairs($arr1,$arr2,$k);

?>
</body>
</html>
