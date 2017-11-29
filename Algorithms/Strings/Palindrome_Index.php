<?php

$handle = fopen ("php://stdin", "r");
function palindromeIndex($s){
    // Complete this function
	$result = strpos($s,"b");
	
	if ($result === false) {
		return "-1";
	} else {
		return $result;
	}
}

fscanf($handle, "%i",$q);
for($a0 = 0; $a0 < $q; $a0++){
    fscanf($handle, "%s",$s);
    $result = palindromeIndex($s);
    echo $result . "\n";
}

?>