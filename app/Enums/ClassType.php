<?php

namespace App\Enums;

enum ClassType: string
{
    case Abstract = 'Abstract';
    case Base     = 'Base';
    case Priest   = 'Priest';
    case Prestige = 'Prestige';

    public function toString(): string
    {
        return match ($this) {
            self::Abstract => 'Abstract',
            self::Base     => 'Base',
            self::Priest   => 'Priest',
            self::Prestige => 'Prestige',
        };
    }
}
