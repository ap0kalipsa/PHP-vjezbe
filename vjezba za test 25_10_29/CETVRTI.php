<?php
$brojevi = array(1,2,3,4,5,6,7,8,9,10);
$z=0;

echo "Brojevi iz niza s parnim indeksom: <br><br>";
for ($i=0;$i<sizeof($brojevi);$i++)
{
    if ($i%2==0)
    {
        echo "brojevi[".$i."] = " .$brojevi[$i]. "<br><br>";
        $z+=1;
    }
}

echo "$z brojeva ima parni index.";


