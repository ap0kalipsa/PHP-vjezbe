<?php

function Ek($m,$V)
{
    return ($m*$V**2)/2;
}


function Pitagora($a,$b)
{
    return sqrt($a**2+$b**2);
}

function opsegPrav($a,$b)
{
    return $a+$b+Pitagora(3, 4);
}



function ksp($z)
{
    if ($z==1)
    {
        return "SKARE";
    }

    if ($z==2)
    {
        return "KAMEN";
    }

    if ($z==3)
    {
        return "PAPIR";
    }
}

function  rezultat($x,$y)
{


    if ($x==1)
    {
        if ($y==2)
        {
            return "Igrac 2 je pobijedio";
        }

        if ($y==3)
        {
            return "Igrac 1 je pobijedio";
        }
    }

    if ($x==2)
    {
        if ($y==1)
        {
            return "Igrac 1 je pobijedio";
        }

        if ($y==3)
        {
            return "Igrac 2 je pobijedio";
        }
    }

    if ($x==3)
    {
        if ($y==1)
        {
            return "Igrac 2 je pobijedio";
        }

        if ($y==2)
        {
            return "Igrac 1 je pobijedio";
        }
    }

    if ($x==$y);
    {
        return "Izjednaceno je";
    }
}
?>