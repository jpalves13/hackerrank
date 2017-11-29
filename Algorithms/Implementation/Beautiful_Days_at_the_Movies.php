<?php
$_fp = fopen("php://stdin", "r");
/* Enter your code here. Read input from STDIN. Print output to STDOUT */
fscanf($_fp, "%i %i %i", $n, $m, $k);
$y=0;
for($x=$n;$x<=$m;$x++){
	$reserved = strrev($x);
	if( (($x - $reserved)%$k) == 0 ) {
		$y++;
	}
}
echo $y;
?>