<?php

$handle = fopen ("php://stdin", "r");
function solve($n, $p){
    // Complete this function
    $start = 1;
	$final = $n;
	
	for($x=0;$x<=$final;$x++){
		$book[$x][$x*2] = $x*2;
		$book[$x][(($x*2)+1)] = (($x*2)+1);
	}
	
	foreach($book as $key => $value) {
		
		foreach($value as $otherKey => $data){
			
			if($data == $start){
				$pagStart = $key;
			}

			if($data == $final){
				$pagFinal = $key;
			}

			if($data == $p){
				 $pagNeed = $key;
			}
			
		}	
	}

	$countStart = ($pagNeed - $pagStart);
	$countFinal = ($pagFinal - $pagNeed);

	if($countStart < $countFinal){
		return $countStart;
	} else {
		return $countFinal;
	}

}

fscanf($handle,"%d",$n);
fscanf($handle,"%d",$p);
$result = solve($n, $p);
echo $result . "\n";

?>
