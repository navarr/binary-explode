<?php

/**
 * Copyright 2021 Navarr Barnier
 * Licensed under MIT
 */

declare(strict_types=1);

namespace Navarr\BinaryExploder;

/**
 * Linear approach to determining the binary components of a number.
 *
 * This approach is fastest for numbers that are unlikely to be a power of 2
 */
class LinearBinaryExploder implements BinaryExploderInterface
{
    public function explode(int $value): iterable
    {
        $power = 0;
        while ($value > 0) {
            $test = 1 << $power;
            if (($value & $test) === $test) {
                yield $test;
                $value -= $test;
            }
            ++$power;
        }
    }
}
