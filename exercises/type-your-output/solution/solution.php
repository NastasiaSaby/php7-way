<?php

function nonStrictFunction($number1, $number2)
{
    return $number1+$number2;
}

function strictFunction(int $number1, int $number2) : int
{
    return $number1+$number2;
}

echo nonStrictFunction(1, 2);
echo strictFunction(1, 2);
