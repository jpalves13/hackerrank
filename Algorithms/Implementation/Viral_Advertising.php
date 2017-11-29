<?php
$handle = fopen("php://stdin", "r");
/* Enter your code here. Read input from STDIN. Print output to STDOUT */
fscanf($handle, "%i", $n);
$num = $n;
$a = 5;
$sum = 0;

for($i = 0; $i < $num; $i++){
    $a = (int) floor($a/2);
    $sum += $a;
    $a *= 3;
}
echo $sum;
?>