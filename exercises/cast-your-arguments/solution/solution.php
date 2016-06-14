<?php

function nonStrictFunction($number1, $number2)
{
    return $number1+$number2;
}

function strictFunction(int $number1, int $number2)
{
    return $number1+$number2;
}

echo nonStrictFunction($argv[1], $argv[2]);
echo strictFunction($argv[1], $argv[2]);
