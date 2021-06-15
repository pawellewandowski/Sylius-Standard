<?php

declare(strict_types=1);

namespace App\Enum\Base;

interface EnumInterface
{
    public static function getChoices(): array;

    public static function getValues(): array;

    public static function get(string $key): ?string;

    public static function isCorrect(?string $value, $allowNull = false): bool;
}
