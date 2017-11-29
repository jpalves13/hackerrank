<?php
$handle = fopen ("php://stdin", "r");
$arr_temp = fgets($handle);
$arr = explode(" ",$arr_temp);
$arr = array_map('intval', $arr);

$min = 0;
$max = 0;
for ($i = 0; $i < 4; $i++) {
  $min += $arr[$i];
}
for ($i = count($arr)-1; $i > count($arr)-5; $i--) {
  $max += $arr[$i];
}
echo $min." ".$max."\n";

?>
