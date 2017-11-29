<?php
$handle = fopen ("php://stdin","r");
fscanf($handle,"%d",$n);
$arr_temp = fgets($handle);
$arr = explode(" ",$arr_temp);
$arr = array_map('intval', $arr);
$positive = 0;
$negative = 0;
$zero = 0;

for ($i=0; $i < count($arr); $i++) {
  if($arr[$i] > 0){
    $positive++;
  } elseif ($arr[$i] < 0) {
    $negative++;
  } else {
    $zero++;
  }
}
echo round($positive / $n, 6)."\n";
echo round($negative / $n, 6)."\n";
echo round($zero / $n, 6)."\n";

?>
