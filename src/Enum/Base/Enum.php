<?php

declare(strict_types=1);

namespace App\Enum\Base;

use Exception;

abstract class Enum implements EnumInterface
{
    public static function get(string $key): ?string
    {
        try {
            $arr = static::getValues();

            if (!isset($arr[$key])) {
                return null;
            }

            return $arr[$key];

        } catch (Exception $ex) {
            return null;
        }
    }

    public static function getValues(): array
    {
        return [];
    }

    public static function getChoices(): array
    {
        try {
            return array_flip(static::getValues());
        } catch (Exception $ex) {
            return [];
        }
    }

    public static function isCorrect(?string $value, $allowNull = false): bool
    {
        if ($value === null) {
            return $allowNull;
        }

        return in_array($value, array_keys(static::getValues()));
    }
}
