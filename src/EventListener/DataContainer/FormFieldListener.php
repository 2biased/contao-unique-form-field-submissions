<?php

declare(strict_types=1);

/*
 * This file is part of Contao Validation Bundl.
 *
 * @author 2biased <2biased@proton.me>
 *
 * @license LGPL-3.0-or-later
 */

namespace TwoBiased\ContaoValidationBundle\EventListener\DataContainer;

use Contao\CoreBundle\ServiceAnnotation\Callback;
use Contao\DataContainer;

class FormFieldListener
{
    /**
     * @Callback(table="tl_form_field", target="fields.ibanAllowedCountryCodes.options")
     */
    public function getIbanCountryCodes(DataContainer $dc = null): array
    {
        $countries = [];

        foreach (iban_countries() as $code) {
            $countries[$code] = sprintf('%s [%s]', $code, iban_country_get_country_name($code));
        }

        return $countries;
    }
}