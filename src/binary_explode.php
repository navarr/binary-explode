<?php

/**
 * Find the binary components that make up a number.
 *
 * Fastest for numbers that are not likely to be a power of 2
 *
 * @author Navarr Barnier
 * @param int $number
 * @return int[]
 */
function binary_explode($number)
{
    $number = intval($number, 10);

    $parts = [];
    $power = 0;
    while ($number > 0) {
        $test = pow(2, $power);
        if (($number & $test) == $test) {
            $number -= $test;
            $parts[] = $test;
        }
        ++$power;
    }

    return $parts;
}
