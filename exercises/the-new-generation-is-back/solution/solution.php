<?php

function printArguments($argv)
{
    yield $argv[1];
    yield $argv[2];
    yield $argv[3];

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