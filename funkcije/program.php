<?php
include ("funkcije.php");

$E = Ek(50, 2);
echo "1. Kineticka energija iznosi: " . $E . "<br><br>";


$c = Pitagora(3, 4);
echo "2. Treca strana trokuta po pitagori iznosi: ".$c."<br><br>";

$P = Pitagora(3, 4);
$O = opsegPrav(3, 4);
echo "3. Pravokutni trokut stranica 3 i 4 ima povrsinu  ".$P." i opseg ". $O."<br><br>";


echo "4. Kamen, Skare, Papir: <br>";
$igrac1=rand ( 1 , 3);
$igrac2=rand (1, 3);

echo "Igrac 1 baca " . ksp($igrac1)."<br>";
echo "Igrac 2 baca " . ksp($igrac2)."<br>";
$rezultat=rezultat($igrac1,$igrac2);
echo "$rezultat";
?>

