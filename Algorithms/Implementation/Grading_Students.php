<?php
$handle = fopen ("php://stdin", "r");
function solve($grades){
    // Complete this function
	foreach($grades as $key => $value){
		if($value >= 38){
			$rounded[$key] = (ceil($value/5))*5;
			if(($rounded[$key] - $value) < 3){
				$final[$key] = $rounded[$key];
			} else {
				$final[$key] = $value;
			}
		} else {
			$final[$key] = $value;
		}
	}
	
	return $final;
}

fscanf($handle, "%d",$n);
$grades = array();
for($grades_i = 0; $grades_i < $n; $grades_i++){
   fscanf($handle,"%d",$grades[]);
}
$result = solve($grades);
echo implode("\n", $result)."\n";
?>
