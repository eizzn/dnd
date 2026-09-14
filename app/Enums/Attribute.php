<?php

namespace App\Enums;

enum Attribute: string
{
    case STR = 'STR';
    case DEX = 'DEX';
    case CON = 'CON';
    case INT = 'INT';
    case WIS = 'WIS';
    case CHA = 'CHA';

    public function toString(): string
    {
        return match ($this) {
            self::STR => 'STR',
            self::DEX => 'DEX',
            self::CON => 'CON',
            self::INT => 'INT',
            self::WIS => 'WIS',
            self::CHA => 'CHA',
        };
    }
}
