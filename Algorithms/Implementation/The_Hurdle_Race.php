<?php

$handle = fopen ("php://stdin","r");
fscanf($handle,"%d %d",$n,$k);
$height_temp = fgets($handle);
$height = explode(" ",$height_temp);
array_walk($height,'intval');
// your code goes here
echo ( max($height)-$k < "0" ? "0" : max($height)-$k );

?>
