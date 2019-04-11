<?php

/**
 * Find the binary components that make up a number.
 *
 * Fastest for numbers that are likely to be a power of 2
 *
 * @author Matt Trimmer
 * @param int $number
 * @return int[]
 */
function binary_explode_log($number)
{
    $number = (int)$number;
    $parts = [];
    while ($number > 0) {
        $power = log($number, 2) | 0;
        $part = 1 << $power;
        $number -= $part;
        $parts[] = $part;
    }
    return $parts;
}
