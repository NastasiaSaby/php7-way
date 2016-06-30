<?php
function upperCase($argument)
{
    yield strtoupper($argument);
}

function printArguments($argv)
{
    yield from upperCase($argv[1]);
    yield from upperCase($argv[2]);
    yield from upperCase($argv[3]);
}

$generator = printArguments($argv);
echo $generator->current();
echo "\n";
$generator->next();
echo $generator->current();
echo "\n";
$generator->next();
echo $generator->current();
