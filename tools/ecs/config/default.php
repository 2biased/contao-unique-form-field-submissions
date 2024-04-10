<?php

declare(strict_types=1);

/*
 * This file is part of Contao Validation Bundl.
 *
 * (c) 2biased
 *
 * @license LGPL-3.0-or-later
 */

use PhpCsFixer\Fixer\Comment\HeaderCommentFixer;
use PhpCsFixer\Fixer\ControlStructure\EmptyLoopBodyFixer;
use Symplify\EasyCodingStandard\Config\ECSConfig;
use Symplify\EasyCodingStandard\ValueObject\Option;

return static function (ECSConfig $ecsConfig): void {
    $ecsConfig->sets([__DIR__.'/../vendor/contao/easy-coding-standard/config/contao.php']);

    $ecsConfig->ruleWithConfiguration(HeaderCommentFixer::class, [
        'header' => "This file is part of Contao Validation Bundl.\n\n(c) 2biased\n\n@license LGPL-3.0-or-later",
    ]);

    $ecsConfig->ruleWithConfiguration(EmptyLoopBodyFixer::class, ['style' => 'semicolon']);

    $ecsConfig->parallel();
    $ecsConfig->lineEnding("\n");

    $parameters = $ecsConfig->parameters();
    $parameters->set(Option::CACHE_DIRECTORY, sys_get_temp_dir().'/ecs_default_cache');
};
