<?php

namespace App\Enums;

enum MonsterSize: string
{
    case Tiny       = 'tiny';
    case Small      = 'small';
    case Medium     = 'medium';
    case Large      = 'large';
    case Huge       = 'huge';
    case Gargantuan = 'gargantuan';

    public function toString(): string
    {
        return match ($this) {
            self::Tiny       => 'Tiny',
            self::Small      => 'Small',
            self::Medium     => 'Medium',
            self::Large      => 'Large',
            self::Huge       => 'Huge',
            self::Gargantuan => 'Gargantuan',
        };
    }
}
