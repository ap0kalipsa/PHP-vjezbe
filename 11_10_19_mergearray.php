<?php

$array1 = array(3,2,1);
$array2 = array(4,6,5);
$array3 = array(9,7,8);
$merge1 = array_merge($array1, $array2);
$merge2 =  array_merge($array3, $merge1);

sort ($merge2);

echo "[";
foreach($merge2 as $x => $x_value) {
echo  $x_value . ",";}
echo "]";
?>
