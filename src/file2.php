<?php

use Brick\Math\BigDecimal;

function addBigDecimal($first, $second)
{
    $decimaNumber = BigDecimal::of($first);
    $sum = $decimaNumber->plus($second);

    return $sum;
}

function multiplyDecimalByTen($second)
{
    $firstNumber = BigDecimal::of(10);
    $multiplyDecimalNumber = $firstNumber->multipliedBy($second);

    return $multiplyDecimalNumber;
}

