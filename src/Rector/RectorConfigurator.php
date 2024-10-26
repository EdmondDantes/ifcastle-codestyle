<?php

declare(strict_types=1);

namespace IfCastle\CodeStyle\Rector;

use Rector\Config\RectorConfig;
use Rector\Set\ValueObject\LevelSetList;
use Rector\Set\ValueObject\SetList;


class RectorConfigurator
{
    public static function configureSets(RectorConfig $rectorConfig): void
    {
        $rectorConfig->sets([
            LevelSetList::UP_TO_PHP_83,
            __DIR__ . '/coding-style.php',
            __DIR__ . '/code-quality.php',
            __DIR__ . '/type-declaration.php',
            SetList::INSTANCEOF,
            SetList::EARLY_RETURN,
            SetList::DEAD_CODE
        ]);
    }
}