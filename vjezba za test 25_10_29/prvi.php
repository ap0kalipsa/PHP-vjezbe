<?php
$brojevi = array(1,2,3,4,5,6,7,8,9,10);

echo "Brojevi iz niza brojevi koji nisu djeljivi s 4: <br><br>";
for ($i=0;$i<10;$i++)
{
    if ($brojevi[$i]%4!=0)
    {
        echo "brojevi[".$i."] = " .$brojevi[$i]. "<br>";
    }
}
?>