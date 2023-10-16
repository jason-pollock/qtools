<?php

declare(strict_types=1);

use Symplify\EasyCodingStandard\Config\ECSConfig;
use Symplify\EasyCodingStandard\ValueObject\Set\SetList;

return static function (ECSConfig $ecsConfig): void {
    $ecsConfig->paths([
        __DIR__ . '/ecs.php',
        __DIR__ . '/rector.php',
        // __DIR__ . '/src',
        __DIR__ . '/packages',
    ]);

    $ecsConfig->sets([
        SetList::CLEAN_CODE,
        SetList::COMMON,
        SetList::PSR_12,
        SetList::SYMPLIFY,
    ]);
};
