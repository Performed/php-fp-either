<?php

namespace Performed\Either;

use Performed\Either\Constructor\Left;
use Performed\Either\Constructor\Right;

/**
 * Allow scala like syntax.
 *
 * @param mixed $x The value to be wrapped.
 * @return Left A new Left-constructed type.
 */
function Left($x) : Left
{
    return Either::left($x);
}

/**
 * Allow scala like syntax.
 *
 * @param mixed $x The value to be wrapped.
 * @return Right A new Right-constructed type.
 */
function Right($x) : Right
{
    return Either::right($x);
}
