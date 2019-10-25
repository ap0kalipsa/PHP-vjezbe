<?php
$brojevi = array(1,2,3,4,5,6,7,8,9,10);
$z=1;


for ($i=0;$i<10;$i++)
{
    if ($brojevi[$i]%2==0)
    {
        $z=$z*$brojevi[$i];
    }
}

echo "Suma svih parnih brojeva iz niza brojevi: $z <br><br>";

?>