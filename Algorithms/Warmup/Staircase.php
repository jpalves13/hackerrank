<?php
$handle = fopen ("php://stdin","r");
fscanf($handle,"%d",$n);
for ($i = 1; $i <= $n; $i++) {
    echo str_repeat(' ', $n - $i).str_repeat('#', $i)."\n";
}
