<?php

function test($num1, $num2) 
{
    return $num1 == $num2 ? ($num1 + $num2)*3 : $num1 + $num2;
}

echo "Diffent Values : " . test(7, 2) . "<br>";
echo "The Same Values : " . test(5, 5)."<br>";   

?>