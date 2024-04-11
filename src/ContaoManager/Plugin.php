<?php

declare(strict_types=1);

/*
 * This file is part of Contao Validation Bundle.
 *
 * @author 2biased <2biased@proton.me>
 *
 * @license LGPL-3.0-or-later
 */

namespace TwoBiased\ContaoValidationBundle\ContaoManager;

use Contao\CoreBundle\ContaoCoreBundle;
use Contao\ManagerPlugin\Bundle\BundlePluginInterface;
use Contao\ManagerPlugin\Bundle\Config\BundleConfig;
use Contao\ManagerPlugin\Bundle\Parser\ParserInterface;
use TwoBiased\ContaoValidationBundle\TwoBiasedContaoValidationBundle;

class Plugin implements BundlePluginInterface
{
    public function getBundles(ParserInterface $parser)
    {
        return [
            BundleConfig::create(TwoBiasedContaoValidationBundle::class)
                ->setLoadAfter([ContaoCoreBundle::class]),
        ];
    }
}
