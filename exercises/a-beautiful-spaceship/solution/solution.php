<?php

// Integers
echo $argv[1] <=> $argv[1]; // 0
echo $argv[1]<=> $argv[2]; // -1
echo $argv[2] <=>  $argv[1]; // 1

// Flo$argv[4]ts
echo $argv[5] <=> $argv[5]; // 0
echo $argv[5] <=> $argv[6]; // -1
echo $argv[6] <=> $argv[5]; // 1

// Strings
echo "$argv[4]" <=> "$argv[4]"; // 0
echo "$argv[4]" <=> "$argv[3]"; // -1
echo "$argv[3]" <=> "$argv[4]"; // 1