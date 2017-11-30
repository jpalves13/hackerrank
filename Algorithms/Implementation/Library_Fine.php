<?php

$handle = fopen ("php://stdin","r");
fscanf($handle,"%d %d %d",$d1,$m1,$y1);
fscanf($handle,"%d %d %d",$d2,$m2,$y2);
$datetime1 = new DateTime("$y1-$m1-$d1");
$datetime2 = new DateTime("$y2-$m2-$d2");
$interval = $datetime1->diff($datetime2);
$diff = $interval->format('%R%a');

if($diff < 0){
	if($diff <= 31){
		echo abs($diff * 15);
	}
	if($diff > 31){
		echo abs($diff * 500);
	}
	if($diff > 3000){
		echo abs($diff * 10000);
	}
} else {
	echo "0";
}
?>
