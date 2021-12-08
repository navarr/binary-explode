<?php

/**
 * Copyright 2021 Navarr Barnier, 2017 Matthew Trimmer (algorithm)
 * Licensed under MIT
 */

declare(strict_types=1);

namespace Navarr\BinaryExploder;

/**
 * Logarithmic approach to determining the binary components of a number.
 * 
 * This approach is fastest for numbers that are likely to be a power of 2
 */
class LogarithmicBinaryExploder implements BinaryExploderInterface
{
    public function execute(int $value): iterable
    {
        while($value > 0) {
            $power = (int)log($value, 2);
            $part = 1 << $power;
            $value -= $part;
            yield $part;
        }
    }
}