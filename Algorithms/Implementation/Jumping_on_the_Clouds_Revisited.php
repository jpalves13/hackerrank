<?php
$handle = fopen ("php://stdin","r");
fscanf($handle,"%d %d",$n,$k);
$c_temp = fgets($handle);
$c = explode(" ",$c_temp);
array_walk($c,'intval');

$points = 100;
for($x=0;$x<=($n-1);$x++){
	if($x%$k==0){
		$points--;
		if($c[$x] == '1'){
			$points -= $k;
		}
	}
}
echo $points;
?>