<?php
$handle = fopen ("php://stdin", "r");
function timeConversion($s) {
    // Complete this function
	$originalDate = $s;
	$newDate = date("H:i:s", strtotime($originalDate));
	return $newDate;
}

fscanf($handle, "%s",$s);
$result = timeConversion($s);
echo $result . "\n";

?>