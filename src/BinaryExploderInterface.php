<?php

/**
 * Copyright 2021 Navarr Barnier.
 * Licensed under MIT
 */

namespace Navarr\BinaryExploder;

interface BinaryExploderInterface
{
    /**
     * @return iterable<int> All bit values that make up the passed `$value` (e.g. 3 -> 1 2).  Order is not guaranteed.
     */
    public function explode(int $value): iterable;
}
