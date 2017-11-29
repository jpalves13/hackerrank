<?php

$handle = fopen ("php://stdin", "r");
function solve($year){
    // Complete this function
	$programmer_day = '256';
	for($x=1;$x<=8;$x++){
		$month[$x]		= $x;
		$last_day[$x]	= date("t", mktime(0,0,0,$month[$x],'01',$year));
	}

	$sum = array_sum($last_day);
	$diff = ($programmer_day - $sum); 

	return  "$diff.09.$year";    
}

fscanf($handle, "%d",$year);
$result = solve($year);
echo $result . "\n";

?>
