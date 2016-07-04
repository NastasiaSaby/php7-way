<?php

function noStrictFunction($number1, $number2)
{
    return $number1+$number2;
}

function strictFunction(int $number1, int $number2)
{
    return $number1+$number2;
}

echo noStrictFunction(1, 2);
echo "\n";
echo strictFunction(1, 2);
