<?php
$brojevi = array(1,2,3,4,5);
$z=1;
$w=0;

for ($i=0;$i<sizeof($brojevi);$i++)
{
    $z=$z*$brojevi[$i];
    $w=$w+$brojevi[$i];
}

echo "Suma svih brojeva iz niza brojevi: $z <br><br>";
echo "Aritmeticka sredina svih brojeva iz niza brojevi: ".$w/sizeof($brojevi) ."<br><br>";

?>