<?php
$handle = fopen ("php://stdin", "r");
function birthdayCakeCandles($n, $ar) {
    $count = 0;
	$max = max($ar);
	foreach($ar as $value)
	{
	  if($value == $max)
		$count++;
	}
	return $count;
}

fscanf($handle, "%i",$n);
$ar_temp = fgets($handle);
$ar = explode(" ",$ar_temp);
$ar = array_map('intval', $ar);
$result = birthdayCakeCandles($n, $ar);
echo $result . "\n";

?>