<?php

$num1 = 1;
$num2 = "A";
$somme = somme($num1, $num2);

function somme($num1, $num2)
{
    // Check if both inputs are numeric
    if (!is_numeric($num1) || !is_numeric($num2))   // this || operator mean or  ( || = or )
    {
        echo "Both inputs must be numbers."; 
    }
    // if both inputs are qual this elseif gonna shown
    elseif ($num1 == $num2)
    {
        echo "The first number equal the second number";
    }
    // if the first number big than second this elseif gonna shown
    elseif ($num1 > $num2) 
    {
        echo "The number $num1 is large than $num2";
    }
    // if the first number small than second this elseif gonna shown
    elseif ($num1 < $num2)
    {
        echo "The number $num1 is smaller than  $num2" ;
    }

    else
    {
        echo "Unexpected condition";
    }


}


?>