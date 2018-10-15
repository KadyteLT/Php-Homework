<?php

declare(strict_types=1);

use Brick\Math\BigInteger;

function addBigInt(string $first, string $second): BigInteger
{
    $int = BigInteger::of($first);

    $sum = $int->plus($second);

    return $sum;
}

function multiplyBigInt(int $first, int $second): BigInteger
{
    $first = BigInteger::of($first);
    $multiplyIntNumber = $first->multipliedBy($second);

    return $multiplyIntNumber;
}

