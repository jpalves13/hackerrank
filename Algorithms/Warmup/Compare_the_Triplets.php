<?php
$handle = fopen ("php://stdin", "r");
function solve($a0, $a1, $a2, $b0, $b1, $b2){
   $a[] = array($a0, $a1, $a2);
   $b[] = array($b0, $b1, $b2);
   $c[] = array(0, 0);

   for ($i = 0; $i < 3; $i++){
     if ($a[0][$i] > $b[0][$i]){ 
      $c[0][0] += 1;
	 }
     if ($a[0][$i] < $b[0][$i]){
      $c[0][1] += 1;
	 }
   }
   return $c[0];
}

fscanf($handle, "%d %d %d", $a0, $a1, $a2);
fscanf($handle, "%d %d %d", $b0, $b1, $b2);
$result = solve($a0, $a1, $a2, $b0, $b1, $b2);
echo implode(" ", $result)."\n";
?>