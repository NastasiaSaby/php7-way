<?php

function add($firstArgument, $secondArgument)
{
    yield $firstArgument + $secondArgument;
}

function printArguments($argv)
{
    yield from add($argv[1], $argv[2]);
    yield from add($argv[3], $argv[4]);

    return array_sum($argv);
}

$generator = printArguments($argv);
echo $generator->current();
echo "\n";
$generator->next();
echo $generator->current();
echo "\n";
$generator->next();
echo $generator->current();
echo "\n";
$generator->next();

echo $generator->getReturn();