<?php

$handle = fopen ("php://stdin","r");
fscanf($handle,"%d",$n);
$arr_temp = fgets($handle);
$arr = explode(" ",$arr_temp);
array_walk($arr,'intval');
$n = count($arr);
for($arr_i=0; $arr_i < $n; $arr_i++){
    $arr[$arr_i] = $arr[$arr_i];
}

sort($arr);
echo $n . "\n";
for($i=0;$i<(count($arr)-1);$i++){
    if($arr[$i]!=$arr[$i+1]) echo($n-($i+1)) . "\n";
} 
?>