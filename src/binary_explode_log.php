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
    $number = intval($number, 10);

    $parts = [];
    while ($number > 0) {
        $power = log($number, 2);
        $power = floor($power);
        $part = pow(2, $power);
        $number = $number - $part;
        $parts[] = $part;
    }
    return $parts;
}
