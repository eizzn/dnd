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
    case DukeOfHell       = 5;
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
    case Gaurdinal        = 16;
    case Archfey          = 17;
    case Demon            = 18;
    case Yugoloth         = 29;
    case Devil            = 20;
    case Modron           = 21;
    case DemonPrince      = 22;
    case Archdemon        = 23;
    case Slaad            = 24;
    case Departed         = 25;
    case Dead             = 100;

    public function toString(): string
    {
        return match ($this) {
            self::Greater          => 'Greater',
            self::Intermediate     => 'Intermediate',
            self::Lesser           => 'Lesser',
            self::Demi             => 'Demi',
            self::DukeOfHell       => 'Duke of Hell',
            self::TomeArchon       => 'Tome Archon',
            self::GaurdinalParagon => 'Gaurdinal Paragon',
            self::FeyLord          => 'Fey Lord',
            self::SlaadLord        => 'Slaad Lord',
            self::DemonLord        => 'Demon Lord',
            self::Altraloth        => 'Altraloth',
            self::ArchDevil        => 'Archdevil',
            self::Prime            => 'Prime',
            self::Archomental      => 'Archomental',
            self::Hero             => 'Hero',
            self::Gaurdinal        => 'Gaurdinal',
            self::Archfey          => 'Archfey',
            self::Demon            => 'Demon',
            self::Yugoloth         => 'Yugoloth',
            self::Devil            => 'Devil',
            self::Modron           => 'Modron',
            self::DemonPrince      => 'Demon Prince',
            self::Archdemon        => 'Archdemon',
            self::Slaad            => 'Slaad',
            self::Departed         => 'Departed',
            self::Dead             => 'Dead',
        };
    }
}
