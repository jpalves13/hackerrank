<?php

$handle = fopen ("php://stdin", "r");
function getMoneySpent($keyboards, $drives, $s){
    // Complete this function
    for($x=0;$x<count($keyboards);$x++){
		for($y=0;$y<count($drives);$y++){
			if(($keyboards[$x]+$drives[$y]) <= $s){
				$price[] = ($keyboards[$x]+$drives[$y]);
			} else {
				$price[] = "-1";
			}		
		}
	}
	
	return max($price);
}

fscanf($handle,"%d %d %d",$s,$n,$m);
$keyboards_temp = fgets($handle);
$keyboards = explode(" ",$keyboards_temp);
$keyboards = array_map('intval', $keyboards);
$drives_temp = fgets($handle);
$drives = explode(" ",$drives_temp);
$drives = array_map('intval', $drives);
//  The maximum amount of money she can spend on a keyboard and USB drive, or -1 if she can't purchase both items
$moneySpent = getMoneySpent($keyboards, $drives, $s);
echo $moneySpent . "\n";

?>
