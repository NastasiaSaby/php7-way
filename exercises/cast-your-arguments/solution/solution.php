<?php

function noStrictFunction($number1, $number2)
{
    return $number1+$number2;
}

function strictFunction(int $number1, int $number2)
{
    return $number1+$number2;
}

echo noStrictFunction((int)$argv[1], (int)$argv[2]);
echo "\n";
echo strictFunction((int)$argv[1], (int)$argv[2]);
