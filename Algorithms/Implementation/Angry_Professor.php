<?php

$handle = fopen ("php://stdin","r");
fscanf($handle,"%d",$t);
$negative = array(0 => '0', 1 => '0');
for($a0 = 0; $a0 < $t; $a0++){
    fscanf($handle,"%d %d",$n,$k);
    $a_temp = fgets($handle);
    $a = explode(" ",$a_temp);
    array_walk($a,'intval');
	for($x=0;$x<count($a);$x++){
		if($a[$x] < 0 || $a[$x] == 0) {
			$negative[$a0]++;
		}
	}
	echo ( $k > $negative[$a0] ? "YES \n" : "NO \n" );
}

?>
