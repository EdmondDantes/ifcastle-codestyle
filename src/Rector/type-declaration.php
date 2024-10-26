<?php

declare (strict_types=1);

namespace IfCastle\CodeStyle\Rector;

use Rector\Config\RectorConfig;

return static function (RectorConfig $rectorConfig) : void {
    // the rule order matters, as its used in withTypeCoverageLevel() method
    // place the safest rules first, follow by more complex ones
    $rectorConfig->rules(TypeDeclarationLevel::RULES);
};
