<?php
$handle = fopen ("php://stdin","r");
fscanf($handle,"%d",$n);
$a = array();
$primary = 0;
$secondary = 0;

for($a_i = 0; $a_i < $n; $a_i++) {
   $a_temp = fgets($handle);
   $a[] = explode(" ",$a_temp);
   array_walk($a[$a_i],'intval');
}

//primary diagonal and secondary diagonal
for ($x = 0; $x < $n; $x++) {
    $primary    += $a[$x][$x];
    $secondary  += $a[$x][($n - 1) - $x];
}

//output
echo abs($primary - $secondary);
?>
