<?php

namespace App\Enums;

use App\Traits\EnumHelpers;

enum GodLevels: int
{
    use EnumHelpers;

    case Greater          = 1;
    case Intermediate     = 2;
    case Lesser           = 3;
    case Demi             = 4;
    case Solar            = 5;
    case TomeArchon       = 6;
    case GaurdinalParagon = 7;
    case FeyLord          = 8;
    case SlaadLord        = 9;
    case DemonLord        = 10;
    case Altraloth        = 11;
    case ArchDevil        = 12;
    case Prime            = 13;
    case Archomental      = 14;
    case Hero             = 15;
    case Archon           = 16;
    case Gaurdinal        = 17;
    case Archfey          = 18;
    case Demon            = 19;
    case Yugoloth         = 20;
    case Devil            = 21;
    case Modron           = 22;
    case Dead             = 100;

    public function toString(): string
    {
        return match ($this) {
            self::Greater          => 'Greater',
            self::Intermediate     => 'Intermediate',
            self::Lesser           => 'Lesser',
            self::Demi             => 'Demi',
            self::Solar            => 'Solar',
            self::TomeArchon       => 'Tome Archon',
            self::GaurdinalParagon => 'Gaurdinal Paragon',
            self::FeyLord          => 'Fey Lord',
            self::SlaadLord        => 'Slaad Lord',
            self::DemonLord        => 'Demon Lord',
            self::Altraloth        => 'Altraloth',
            self::ArchDevil        => 'Arch Devil',
            self::Prime            => 'Prime',
            self::Archomental      => 'Archomental',
            self::Hero             => 'Hero',
            self::Archon           => 'Archon',
            self::Gaurdinal        => 'Gaurdinal',
            self::Archfey          => 'Archfey',
            self::Demon            => 'Demon',
            self::Yugoloth         => 'Yugoloth',
            self::Devil            => 'Devil',
            self::Modron           => 'Modron',
            self::Dead             => 'Dead',
        };
    }
}
