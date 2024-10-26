<?php

declare(strict_types=1);

namespace IfCastle\CodeStyle\Rector;

use Rector\CodeQuality\Rector\Concat\JoinStringConcatRector;
use Rector\CodeQuality\Rector\Identical\FlipTypeControlToUseExclusiveTypeRector;
use Rector\CodingStyle\Rector\Catch_\CatchExceptionNameMatchingTypeRector;
use Rector\CodingStyle\Rector\Encapsed\EncapsedStringsToSprintfRector;
use Rector\CodingStyle\Rector\Encapsed\WrapEncapsedVariableInCurlyBracesRector;
use Rector\CodingStyle\Rector\String_\SymplifyQuoteEscapeRector;
use Rector\Config\RectorConfig;
use Rector\DeadCode\Rector\ClassMethod\RemoveUselessParamTagRector;
use Rector\DeadCode\Rector\ClassMethod\RemoveUselessReturnTagRector;
use Rector\EarlyReturn\Rector\If_\ChangeOrIfContinueToMultiContinueRector;
use Rector\EarlyReturn\Rector\If_\RemoveAlwaysElseRector;
use Rector\Php74\Rector\Property\RestoreDefaultNullToNullableTypePropertyRector;
use Rector\Set\ValueObject\LevelSetList;
use Rector\Set\ValueObject\SetList;
use Rector\Strict\Rector\Empty_\DisallowedEmptyRuleFixerRector;
use Rector\TypeDeclaration\Rector\ArrowFunction\AddArrowFunctionReturnTypeRector;
use Rector\TypeDeclaration\Rector\Closure\AddClosureVoidReturnTypeWhereNoReturnRector;

class RectorConfigurator
{
    public static function configureSets(RectorConfig $rectorConfig): void
    {
        $rectorConfig->sets([
            LevelSetList::UP_TO_PHP_83,
            SetList::CODING_STYLE,
            SetList::CODE_QUALITY,
            SetList::TYPE_DECLARATION,
            SetList::INSTANCEOF,
            SetList::EARLY_RETURN,
            SetList::DEAD_CODE,
        ]);
        
        $rectorConfig->skip([
            RestoreDefaultNullToNullableTypePropertyRector::class,
            FlipTypeControlToUseExclusiveTypeRector::class,
            SymplifyQuoteEscapeRector::class,
            CatchExceptionNameMatchingTypeRector::class,
            EncapsedStringsToSprintfRector::class,
            WrapEncapsedVariableInCurlyBracesRector::class,
            // Note: RemoveAlwaysElseRector not understood when parameter has different interfaces
            RemoveAlwaysElseRector::class,
            FlipTypeControlToUseExclusiveTypeRector::class,
            RemoveUselessParamTagRector::class,
            RemoveUselessReturnTagRector::class,
            DisallowedEmptyRuleFixerRector::class,
            AddArrowFunctionReturnTypeRector::class,
            AddClosureVoidReturnTypeWhereNoReturnRector::class,
            ChangeOrIfContinueToMultiContinueRector::class,
            AddArrowFunctionReturnTypeRector::class,
            JoinStringConcatRector::class
        ]);
    }
    
    public static function skipForTests(string $testDir, RectorConfig $rectorConfig): void
    {
        $rectorConfig->skip([
        
        ]);
    }
}
