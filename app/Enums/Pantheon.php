<?php

namespace App\Enums;

enum Pantheon: string
{
    case Faeruneon                  = 'Faeruneon';
    case Mulhorandi                 = 'Mulhorandi';
    case Untheric                   = 'Untheric';
    case Maztican                   = 'Maztican';
    case AlQadim                    = 'Al-Qadim';
    case CelestialEmpire            = 'Celestial Empire';
    case Seldarine                  = 'Seldarine';
    case Morndinsamman              = 'Morndinsamman';
    case YondallasChildren          = "Yondalla's Children";
    case Gnome                      = 'Gnome';
    case DarkSeldarine              = 'Dark Seldarine';
    case Orc                        = 'Orc';
    case Goblin                     = 'Goblin';
    case Kobold                     = 'Kobold';
    case Draconic                   = 'Draconic';
    case TheOrdning                 = 'The Ordning';
    case Elemental                  = 'Elemental';
    case Asathalfinare              = 'Asathalfinare';
    case Monstrous                  = 'Monstrous';
    case Demonic                    = 'Demonic';
    case TheLordsOfTheNine          = 'The Lords of the Nine';
    case YugolothLords              = 'Yugoloth Lords';
    case SlaadLords                 = 'Slaad Lords';
    case Modron                     = 'Modron';
    case TheCelestialHebdomad       = 'The Celestial Hebdomad';
    case TalsidAndTheFiveCompanions = 'Talsid and the Five Companions';
    case TheCourtOfStars            = 'The Court of Stars';

    public function toString(): string
    {
        return match ($this) {
            self::Faeruneon                  => 'Faeruneon',
            self::Mulhorandi                 => 'Mulhorandi',
            self::Untheric                   => 'Untheric',
            self::Maztican                   => 'Maztican',
            self::AlQadim                    => 'Al-Qadim',
            self::CelestialEmpire            => 'Celestial Empire',
            self::Seldarine                  => 'Seldarine',
            self::Morndinsamman              => 'Morndinsamman',
            self::YondallasChildren          => 'Yondallas Children',
            self::Gnome                      => 'Gnome',
            self::DarkSeldarine              => 'Dark Seldarine',
            self::Orc                        => 'Orc',
            self::Goblin                     => 'Goblin',
            self::Kobold                     => 'Kobold',
            self::Draconic                   => 'Draconic',
            self::TheOrdning                 => 'The Ordning',
            self::Elemental                  => 'Elemental',
            self::Asathalfinare              => 'Asathalfinare',
            self::Monstrous                  => 'Monstrous',
            self::Demonic                    => 'Demonic',
            self::TheLordsOfTheNine          => 'The Lords of the Nine',
            self::YugolothLords              => 'Yugoloth Lords',
            self::SlaadLords                 => 'Slaad Lords',
            self::Modron                     => 'Modron',
            self::TheCelestialHebdomad       => 'The Celestial Hebdomad',
            self::TalsidAndTheFiveCompanions => 'Talsid and the Five Companions',
            self::TheCourtOfStars            => 'The Court of Stars',
        };
    }
}
