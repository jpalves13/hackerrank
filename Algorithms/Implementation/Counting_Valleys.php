<?php
$handle = fopen("php://stdin", "r");
/* Enter your code here. Read input from STDIN. Print output to STDOUT */
fscanf($handle, "%i",$n);
$ar_temp = fgets($handle);
$ar = str_split($ar_temp);
$count=0;
$countValley=0;
$x=false;
foreach($ar as $key => $value){
	if($value == 'D'){
		$count--;
		if($count < 0){
			$x = true;
		}
	} else {
		$count++;
	}
    if($x && $count == 0){
		$countValley++;
        $x = false;
	}
}

echo $countValley;

?>