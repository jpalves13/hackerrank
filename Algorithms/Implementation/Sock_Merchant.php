<?php
$handle = fopen ("php://stdin", "r");
function sockMerchant($n, $ar) {
    // Complete this function	
	$count_value = array_count_values($ar);
	foreach($count_value as $key => $value){
		$sum[] = floor($value/2);
	}
	return array_sum($sum);
}


fscanf($handle, "%i",$n);
$ar_temp = fgets($handle);
$ar = explode(" ",$ar_temp);
$ar = array_map('intval', $ar);
$result = sockMerchant($n, $ar);
echo $result . "\n";
?>
