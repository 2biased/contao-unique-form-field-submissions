<?php

declare(strict_types=1);

/*
 * This file is part of Contao Validation Bundle.
 *
 * @author 2biased <2biased@proton.me>
 *
 * @license LGPL-3.0-or-later
 */

namespace TwoBiased\ContaoValidationBundle\EventListener\DataContainer;

use Contao\CoreBundle\DependencyInjection\Attribute\AsCallback;
use Contao\DataContainer;
use Contao\FormFieldModel;

class FormFieldListener
{
    #[AsCallback(table: 'tl_form_field', target: 'config.onload')]
    public function adjustDcaByType(DataContainer|null $dc = null): void
    {
        if (($objField = FormFieldModel::findById($dc->id)) !== null) {
            switch ($objField->type) {
                case 'text':
                    $GLOBALS['TL_DCA']['tl_form_field']['fields']['rgxp']['options'][] = 'iban';
                    break;
            }
        }
    }

    #[AsCallback(table: 'tl_form_field', target: 'fields.ibanAllowedCountryCodes.options')]
    public function getIbanCountryCodes(DataContainer|null $dc = null): array
    {
        $countries = [];

        foreach (iban_countries() as $code) {
            $countries[$code] = sprintf('%s [%s]', $code, iban_country_get_country_name($code));
        }

        return $countries;
    }
}
