<?php

require_once __DIR__ . '/vendor/autoload.php';

echo addBigInt(3, 4). "\n";
echo multiplyBigInt( -5.25 , 5) . "\n";

echo addBigDecimal(3, "3.2") . "\n";
echo multiplyDecimalByTen( 5.5);
