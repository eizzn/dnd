<?php

namespace App\Traits;

trait EnumHelpers
{
    public static function toArray(): array
    {
        return array_combine(
            array_map(fn(self $level) => $level->value, self::cases()),
            array_map(fn(self $level) => $level->toString(), self::cases())
        );
    }

    public static function toCSV(string $separator = ''): string
    {
        return implode(', ', array_map(fn(self $level) => $separator . $level->toString() . $separator, self::cases()));
    }
}
