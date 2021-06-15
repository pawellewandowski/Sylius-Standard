<?php

declare(strict_types=1);

namespace App\Enum\Product;

use App\Enum\Base\Enum;

class ProductColorEnum extends Enum
{
    public const COLOR_RED = 'RED';
    public const COLOR_GREEN = 'GREEN';
    public const COLOR_BLUE = 'BLUE';

    public static function getValues(): array
    {
        return [
            self::COLOR_RED => 'app.ui.product.color.red',
            self::COLOR_GREEN => 'app.ui.product.color.green',
            self::COLOR_BLUE => 'app.ui.product.color.blue',
        ];
    }
}
