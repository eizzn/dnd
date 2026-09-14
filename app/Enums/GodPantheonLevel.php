<?php

namespace App\Enums;

use App\Traits\EnumHelpers;

enum GodPantheonLevel: int
{
    use EnumHelpers;

    case Greater          = 1;
    case Intermediate     = 2;
    case Lesser           = 3;
    case Demi             = 4;
    case Hero             = 5;
    case TomeArchon       = 6;
    case GuardinalParagon = 7;
    case FeyLord          = 8;
    case SlaadLord        = 9;
    case DemonPrince      = 10;
    case Altraloth        = 11;
    case ArchDevil        = 12;
    case Prime            = 13;
    case Archomental      = 14;
    case DemonLord        = 15;
    case DevilLord        = 16;
    case Guardinal        = 17;
    case Archfey          = 18;
    case Slaad            = 19;
    case Yugoloth         = 20;
    case Modron           = 21;
    case DukeOfHell       = 22;
    case Dead             = 23;
    case Departed         = 24;

    public function toString(): string
    {
        return match ($this) {
            self::Greater          => 'Greater',
            self::Intermediate     => 'Intermediate',
            self::Lesser           => 'Lesser',
            self::Demi             => 'Demi',
            self::TomeArchon       => 'Tome Archon',
            self::GuardinalParagon => 'Guardinal Paragon',
            self::FeyLord          => 'Fey Lord',
            self::SlaadLord        => 'Slaad Lord',
            self::DemonLord        => 'Demon Lord',
            self::Altraloth        => 'Altraloth',
            self::ArchDevil        => 'Arch Devil',
            self::Prime            => 'Prime',
            self::Archomental      => 'Archomental',
            self::Hero             => 'Hero',
            self::Guardinal        => 'Guardinal',
            self::Archfey          => 'Archfey',
            self::Slaad            => 'Slaad',
            self::Yugoloth         => 'Yugoloth',
            self::Modron           => 'Modron',
            self::Dead             => 'Dead',
            self::Departed         => 'Departed',
            self::DemonPrince      => 'Demon Prince',
            self::DevilLord        => 'Devil Lord',
            self::DukeOfHell       => 'Duke of Hell',
        };
    }
}
