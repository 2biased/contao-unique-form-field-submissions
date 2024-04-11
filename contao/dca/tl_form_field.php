<?php

declare(strict_types=1);

/*
 * This file is part of Contao Validation Bundle.
 *
 * @author 2biased <2biased@proton.me>
 *
 * @license LGPL-3.0-or-later
 */

// Palettes
$GLOBALS['TL_DCA']['tl_form_field']['palettes']['textiban'] = '{type_legend},type,name,label;{fconfig_legend},mandatory,rgxp,placeholder,ibanAllowedCountryCodes;{expert_legend:hide},class,value,accesskey,tabindex;{template_legend:hide},customTpl;{invisible_legend:hide},invisible';

// Fields
$GLOBALS['TL_DCA']['tl_form_field']['fields']['ibanAllowedCountryCodes'] = [
    'exclude' => true,
    'inputType' => 'select',
    'eval' => ['multiple' => true, 'chosen' => true, 'includeBlankOption' => false, 'csv' => ',', 'tl_class' => 'w50'],
    'sql' => "varchar(255) NOT NULL default ''",
];
