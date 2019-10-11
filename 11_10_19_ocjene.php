<?php

echo " 1.zad ". "<br>";
$z=0;
$ocjene = array (5,3,4);
$predmet = array ("Matematika","Engleski","Fizika");




echo "Ispis ocjena: ";
for ($i=0;$i<3;$i++)
{
    echo "<br> $predmet[$i]" . "  " . "$ocjene[$i]";
    $z+=$ocjene[$i];
}

echo "<br><br> Prosjek ocjena: " . $z/3;






echo"<br><br><br>". " 2.zad ". "<br>";

$z2=0;

$ocjene2 = array("Matematika"=>5, "Engleski"=>3, "Fizika"=>4);

echo "Ispis ocjena: ";
foreach($ocjene2 as $x => $x_value) {
    echo  "<br>" . $x . ":  " . $x_value;
    $z2+=$x_value;

}

echo "<br><br> Prosjek ocjena: " . $z2/3;







echo"<br><br><br>". " 3.zad ". "<br>";

$z3=0;


$ocjene3 = array(
    "Ivo" => array("Matematika"=>5, "Engleski"=>3, "Fizika"=>4),
    "Milica" => array("Matematika"=>2, "Engleski"=>5, "Fizika"=>3),
    "Jozek" => array("Matematika"=>4, "Engleski"=>5, "Fizika"=>5)
);

$keys = array_keys($ocjene3);
for($i = 0; $i < count($ocjene3); $i++) {
    echo $keys[$i] . "<br>";
    foreach($ocjene3[$keys[$i]] as $key => $value) {
        echo $key . " : " . $value . "<br>";
        $z3+=$value;
    }

    echo "Prosjek: ". $z3/3;
    echo "<br><br>";
    $z3=0;
}






