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
    case Solar            = 5;
    case TomeArchon       = 6;
    case GuardinalParagon = 7;
    case FeyLord          = 8;
    case SlaadLord        = 9;
    case DemonLord        = 10;
    case Altraloth        = 11;
    case ArchDevil        = 12;
    case Prime            = 13;
    case Archomental      = 14;
    case Hero             = 15;
    case DukeOfHell       = 16;
    case Archon           = 17;
    case Guardinal        = 18;
    case Archfey          = 19;
    case Slaad            = 20;
    case Demon            = 21;
    case Yugoloth         = 22;
    case Devil            = 23;
    case Modron           = 24;
    case Dead             = 25;
    case Departed         = 26;

    public function toString(): string
    {
        return match ($this) {
            self::Greater          => 'Greater',
            self::Intermediate     => 'Intermediate',
            self::Lesser           => 'Lesser',
            self::Demi             => 'Demi',
            self::Solar            => 'Solar',
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
            self::DukeOfHell       => 'Duke of Hell',
            self::Archon           => 'Archon',
            self::Guardinal        => 'Guardinal',
            self::Archfey          => 'Archfey',
            self::Slaad            => 'Slaad',
            self::Demon            => 'Demon',
            self::Yugoloth         => 'Yugoloth',
            self::Devil            => 'Devil',
            self::Modron           => 'Modron',
            self::Dead             => 'Dead',
            self::Departed         => 'Departed',
        };
    }
}
