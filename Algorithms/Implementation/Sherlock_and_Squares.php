<?php
$handle = fopen("php://stdin", "r");
/* Enter your code here. Read input from STDIN. Print output to STDOUT */
fscanf($handle,"%d",$t);
for($a0 = 0; $a0 < $t; $a0++){
    fscanf($handle,"%d %d",$n,$k);
	$count = 0;
	for($x=$n;$x<=$k;$x++){
		( intval(sqrt($x)) * intval(sqrt($x)) == $x ? $count++ : "" );
	}
	echo $count . "\n";
}

?>