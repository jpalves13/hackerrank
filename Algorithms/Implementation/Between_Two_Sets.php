<?php

$handle = fopen ("php://stdin", "r");
function getTotalX($a, $b, $n, $m) {
    // Complete this function
	$aMax=max($a); 
	$bMin=min($b);
	$count=0;
	
	for ($i = $aMax; $i <= $bMin; $i++) {
		$validation = true;
		for ($j = 0; $j < $n; $j++){ 
			if ($i%$a[$j]!=0) { 
				$validation = false; 
			} 
		}
		
		for ($j = 0; $j < $m; $j++) { 
			if ($b[$j]%$i!=0) { 
				$validation = false; 
			} 
		}

		if ($validation == true) {
			$count++;
		}
	}

	return $count;
}

fscanf($handle, "%i %i", $n, $m);
$a_temp = fgets($handle);
$a = explode(" ",$a_temp);
$a = array_map('intval', $a);
$b_temp = fgets($handle);
$b = explode(" ",$b_temp);
$b = array_map('intval', $b);
$total = getTotalX($a, $b, $n, $m);
echo $total . "\n";

?>
