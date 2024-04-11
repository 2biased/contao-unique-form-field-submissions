<?php

declare(strict_types=1);

/*
 * This file is part of Contao Validation Bundle.
 *
 * @author 2biased <2biased@proton.me>
 *
 * @license LGPL-3.0-or-later
 */

namespace TwoBiased\ContaoValidationBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class TwoBiasedContaoValidationBundle extends Bundle
{
    public function getPath(): string
    {
        return \dirname(__DIR__);
    }
}
