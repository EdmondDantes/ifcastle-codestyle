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
            SetList::CODE_QUALITY,
            SetList::CODING_STYLE,
            SetList::EARLY_RETURN,
            SetList::DEAD_CODE
        ]);
    }
}