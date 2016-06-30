<?php

function printArguments($argv)
{
    yield strtoupper($argv[1]);
    yield strtoupper($argv[2]);
    yield strtoupper($argv[3]);
}

$generator = printArguments($argv);
echo $generator->current();
echo "\n";
$generator->next();
echo $generator->current();
echo "\n";
$generator->next();
echo $generator->current();
