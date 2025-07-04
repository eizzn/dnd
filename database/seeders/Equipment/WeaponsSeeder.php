<?php

namespace Database\Seeders\Equipment;

use App\Models\Weapon;
use App\Services\SeedHelper;
use Illuminate\Database\Seeder;

class WeaponsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /** @var SeedHelper $helper */
        $helper = app()->seedHelper;

        $weapon              = new Weapon;
        $weapon->name        = 'Club';
        $weapon->price       = 0;
        $weapon->damage      = '1D6 B';
        $weapon->range       = '10';
        $weapon->bulk        = '1';
        $weapon->hands       = 1;
        $weapon->group       = 'Club';
        $weapon->type        = 'Simple Melee';
        $weapon->description = '<p>This is a piece of stout wood shaped or repurposed to bludgeon an enemy. Clubs can be intricately carved pieces of martial art or a simple as a tree branch or piece of wood.</p>';
        $helper->addTypesToSimpleObject($weapon, ['Blunt', 'Thrown']);
        $helper->addPropertiesToSimpleObject($weapon, [
            'Melee Damage'  => ['value' => '1D6'],
            'Range'         => ['value' => '10'],
            'Ranged Damage' => ['value' => '1D6'],
        ]);

        $weapon         = new Weapon;
        $weapon->name   = 'Dagger';
        $weapon->price  = 2;
        $weapon->damage = '1D4 P/S';
        $weapon->range  = '20/60';
        $weapon->bulk   = 'L';
        $weapon->hands  = 1;
        $weapon->group  = 'Knife';
        $weapon->type   = 'Simple Melee';
        $helper->addTypesToSimpleObject($weapon, ['Agile', 'Finesse', 'Thrown', 'Versatile', 'Piercing', 'Slashing']);
        $helper->addPropertiesToSimpleObject($weapon, [
            'Melee Damage'  => ['value' => '1D4'],
            'Range'         => ['value' => '20/60'],
            'Ranged Damage' => ['value' => '1D4'],
        ]);

        $weapon         = new Weapon;
        $weapon->name   = 'Fist';
        $weapon->damage = '1D4 B';
        $weapon->hands  = 1;
        $weapon->group  = 'Brawling';
        $weapon->type   = 'Simple Melee';
        $helper->addTypesToSimpleObject($weapon, ['Agile', 'Blunt', 'Finesse', 'Nonlethal', 'Unarmed']);
        $helper->addPropertiesToSimpleObject($weapon, [
            'Melee Damage'  => ['value' => '1D4'],
        ]);

        $weapon         = new Weapon;
        $weapon->name   = 'Gauntlet';
        $weapon->price  = 2;
        $weapon->damage = '1D4 B';
        $weapon->bulk   = 'L';
        $weapon->hands  = 1;
        $weapon->group  = 'Brawling';
        $weapon->type   = 'Simple Melee';
        $helper->addTypesToSimpleObject($weapon, ['Agile', 'Blunt', 'Free-Hand']);
        $helper->addPropertiesToSimpleObject($weapon, [
            'Melee Damage'  => ['value' => '1D4'],
        ]);

        $weapon         = new Weapon;
        $weapon->name   = 'Handaxe';
        $weapon->price  = 4;
        $weapon->damage = '1D6 S';
        $weapon->range  = '20/60';
        $weapon->bulk   = 'L';
        $weapon->hands  = 1;
        $weapon->group  = 'Axe';
        $weapon->type   = 'Simple Melee';
        $helper->addTypesToSimpleObject($weapon, ['Agile', 'Slashing', 'Sweep', 'Thrown']);
        $helper->addPropertiesToSimpleObject($weapon, [
            'Melee Damage'  => ['value' => '1D6'],
            'Range'         => ['value' => '20/60'],
            'Ranged Damage' => ['value' => '1D6'],
        ]);

        $weapon         = new Weapon;
        $weapon->name   = 'Light Mace';
        $weapon->price  = 4;
        $weapon->damage = '1D4 B';
        $weapon->bulk   = 'L';
        $weapon->hands  = 1;
        $weapon->group  = 'Club';
        $weapon->type   = 'Simple Melee';
        $helper->addTypesToSimpleObject($weapon, ['Agile', 'Blunt', 'Finesse', 'Shove']);
        $helper->addPropertiesToSimpleObject($weapon, [
            'Melee Damage'  => ['value' => '1D4'],
        ]);

        $weapon         = new Weapon;
        $weapon->name   = 'Longspear';
        $weapon->price  = 5;
        $weapon->damage = '1D8 P';
        $weapon->range  = '20/60';
        $weapon->bulk   = '2';
        $weapon->hands  = 2;
        $weapon->group  = 'Spear';
        $weapon->type   = 'Simple Melee';
        $helper->addTypesToSimpleObject($weapon, ['Piercing', 'Reach', 'Thrown']);
        $helper->addPropertiesToSimpleObject($weapon, [
            'Melee Damage'  => ['value' => '1D8'],
            'Range'         => ['value' => '20/60'],
            'Ranged Damage' => ['value' => '1D8'],
        ]);

        $weapon         = new Weapon;
        $weapon->name   = 'Mace';
        $weapon->price  = 12;
        $weapon->damage = '1D6 B';
        $weapon->bulk   = '1';
        $weapon->hands  = 1;
        $weapon->group  = 'Club';
        $weapon->type   = 'Simple Melee';
        $helper->addTypesToSimpleObject($weapon, ['Blunt', 'Shove']);
        $helper->addPropertiesToSimpleObject($weapon, [
            'Melee Damage'  => ['value' => '1D6'],
        ]);

        $weapon         = new Weapon;
        $weapon->name   = 'Morningstar';
        $weapon->price  = 10;
        $weapon->damage = '1D6 B/P';
        $weapon->bulk   = '1';
        $weapon->hands  = 1;
        $weapon->group  = 'Club';
        $weapon->type   = 'Simple Melee';
        $helper->addTypesToSimpleObject($weapon, ['Blunt', 'Piercing', 'Versatile']);
        $helper->addPropertiesToSimpleObject($weapon, [
            'Melee Damage'  => ['value' => '1D6'],
        ]);

        $weapon         = new Weapon;
        $weapon->name   = 'Sickle';
        $weapon->price  = 2;
        $weapon->damage = '1D4 S';
        $weapon->bulk   = 'L';
        $weapon->hands  = 1;
        $weapon->group  = 'Knife';
        $weapon->type   = 'Simple Melee';
        $helper->addTypesToSimpleObject($weapon, ['Agile', 'Finesse', 'Slashing', 'Trip']);
        $helper->addPropertiesToSimpleObject($weapon, [
            'Melee Damage'  => ['value' => '1D4'],
        ]);

        $weapon         = new Weapon;
        $weapon->name   = 'Spear';
        $weapon->price  = 1;
        $weapon->damage = '1D6 P';
        $weapon->range  = '20/60';
        $weapon->bulk   = '1';
        $weapon->hands  = 1;
        $weapon->group  = 'Spear';
        $weapon->type   = 'Simple Melee';
        $helper->addTypesToSimpleObject($weapon, ['Piercing', 'Thrown']);
        $helper->addPropertiesToSimpleObject($weapon, [
            'Melee Damage'  => ['value' => '1D6'],
            'Range'         => ['value' => '20/60'],
            'Ranged Damage' => ['value' => '1D6'],
        ]);

        $weapon         = new Weapon;
        $weapon->name   = 'Spiked Gauntlet';
        $weapon->price  = 3;
        $weapon->damage = '1D4 P';
        $weapon->bulk   = 'L';
        $weapon->hands  = 1;
        $weapon->group  = 'Brawling';
        $weapon->type   = 'Simple Melee';
        $helper->addTypesToSimpleObject($weapon, ['Agile', 'Free-Hand', 'Piercing']);
        $helper->addPropertiesToSimpleObject($weapon, [
            'Melee Damage'  => ['value' => '1D4'],
        ]);

        $weapon         = new Weapon;
        $weapon->name   = 'Staff';
        $weapon->price  = 0;
        $weapon->damage = '1D4/1D8 B';
        $weapon->bulk   = '1';
        $weapon->hands  = 1;
        $weapon->group  = 'Club';
        $weapon->type   = 'Simple Melee';
        $helper->addTypesToSimpleObject($weapon, ['Blunt', 'Two-Hand']);

        $weapon               = new Weapon;
        $weapon->name         = 'Bastard Sword';
        $weapon->price        = 35;
        $weapon->damage       = '1D8/1D12 P';
        $weapon->bulk         = '1';
        $weapon->hands        = 1;
        $weapon->group        = 'Sword';
        $weapon->type         = 'Martial Melee';
        $weapon->threat_range = '18-20';
        $weapon->description  = '<p>This broad-bladed sword, sometimes called the hand-and-a-half sword, has a longer grip so it can be held in one hand or used with two hands to provide extra slashing power.</p>';
        $helper->addTypesToSimpleObject($weapon, ['Piercing', 'Two-Hand']);

        $weapon               = new Weapon;
        $weapon->name         = 'Battle Axe';
        $weapon->price        = 12;
        $weapon->damage       = '1D8 S';
        $weapon->bulk         = '1';
        $weapon->hands        = 1;
        $weapon->group        = 'Axe';
        $weapon->threat_range = '18-20';
        $weapon->type         = 'Martial Melee';
        $weapon->description  = '<p>These axes are designed explicitly as weapons, rather than tools. They typically weigh less, with a shaft reinforced with metal bands or bolts, and have a sharper blade, making them ideal for chopping limbs rather than wood.</p>';
        $helper->addTypesToSimpleObject($weapon, ['Slashing', 'Sweep']);
        $helper->addPropertiesToSimpleObject($weapon, [
            'Melee Damage'  => ['value' => '1D8'],
            'Threat Range'  => ['value' => 18],
        ]);

        $weapon         = new Weapon;
        $weapon->name   = 'Bo Staff';
        $weapon->price  = 2;
        $weapon->damage = '1D8 B';
        $weapon->bulk   = '1';
        $weapon->hands  = 2;
        $weapon->group  = 'Club';
        $weapon->type   = 'Martial Melee';
        $helper->addTypesToSimpleObject($weapon, ['Blunt', 'Unarmed', 'Parry', 'Reach', 'Trip']);
        $helper->addPropertiesToSimpleObject($weapon, [
            'Melee Damage'  => ['value' => '1D8'],
        ]);

        $weapon               = new Weapon;
        $weapon->name         = 'Falchion';
        $weapon->price        = 30;
        $weapon->damage       = '1D10 S';
        $weapon->bulk         = '1';
        $weapon->hands        = 2;
        $weapon->group        = 'Sword';
        $weapon->type         = 'Martial Melee';
        $weapon->threat_range = '18-20';
        $helper->addTypesToSimpleObject($weapon, ['Forceful', 'Slashing', 'Sweep']);
        $helper->addPropertiesToSimpleObject($weapon, [
            'Melee Damage'  => ['value' => '1D10'],
            'Threat Range'  => ['value' => 18],
        ]);

        $weapon         = new Weapon;
        $weapon->name   = 'Flail';
        $weapon->price  = 8;
        $weapon->damage = '1D6 B';
        $weapon->bulk   = '1';
        $weapon->hands  = 1;
        $weapon->group  = 'Flail';
        $weapon->type   = 'Martial Melee';
        $helper->addTypesToSimpleObject($weapon, ['Blunt', 'Disarm', 'Sweep', 'Trip']);
        $helper->addPropertiesToSimpleObject($weapon, [
            'Melee Damage'  => ['value' => '1D6'],
        ]);

        $weapon         = new Weapon;
        $weapon->name   = 'Glaive';
        $weapon->price  = 10;
        $weapon->damage = '1D8 S (Deadly: 8)';
        $weapon->bulk   = '2';
        $weapon->hands  = 2;
        $weapon->group  = 'Polearm';
        $weapon->type   = 'Martial Melee';
        $helper->addTypesToSimpleObject($weapon, ['Deadly', 'Forceful', 'Slashing', 'Trip', 'Reach']);
        $helper->addPropertiesToSimpleObject($weapon, [
            'Melee Damage'  => ['value' => '1D6'],
        ]);

        $weapon         = new Weapon;
        $weapon->name   = 'Greataxe';
        $weapon->price  = 22;
        $weapon->damage = '1D12 S';
        $weapon->bulk   = '2';
        $weapon->hands  = 2;
        $weapon->group  = 'Axe';
        $weapon->type   = 'Martial Melee';
        $helper->addTypesToSimpleObject($weapon, ['Slashing', 'Sweep']);
        $helper->addPropertiesToSimpleObject($weapon, [
            'Melee Damage'  => ['value' => '1D12'],
        ]);

        $weapon               = new Weapon;
        $weapon->name         = 'Greatclub';
        $weapon->price        = 12;
        $weapon->damage       = '1D10 B';
        $weapon->bulk         = '2';
        $weapon->hands        = 2;
        $weapon->group        = 'Club';
        $weapon->type         = 'Martial Melee';
        $weapon->threat_range = '18-20';
        $helper->addTypesToSimpleObject($weapon, ['Backswing', 'Blunt', 'Shove']);
        $helper->addPropertiesToSimpleObject($weapon, [
            'Melee Damage'  => ['value' => '1D10'],
            'Threat Range'  => ['value' => 18],
        ]);

        $weapon               = new Weapon;
        $weapon->name         = 'Greatpick';
        $weapon->price        = 14;
        $weapon->damage       = '1D10 P (Fatal: 12)';
        $weapon->bulk         = '2';
        $weapon->hands        = 2;
        $weapon->group        = 'Pick';
        $weapon->type         = 'Martial Melee';
        $weapon->threat_range = '18-20';
        $helper->addTypesToSimpleObject($weapon, ['Fatal', 'Piercing']);
        $helper->addPropertiesToSimpleObject($weapon, [
            'Melee Damage'  => ['value' => '1D10'],
        ]);

        $weapon               = new Weapon;
        $weapon->name         = 'Greatsword';
        $weapon->price        = 20;
        $weapon->damage       = '1D12 S/P';
        $weapon->bulk         = '2';
        $weapon->hands        = 2;
        $weapon->group        = 'Sword';
        $weapon->type         = 'Martial Melee';
        $weapon->threat_range = '18-20';
        $helper->addTypesToSimpleObject($weapon, ['Slashing', 'Piercing', 'Versatile']);
        $helper->addPropertiesToSimpleObject($weapon, [
            'Melee Damage'  => ['value' => '1D12'],
            'Threat Range'  => ['value' => 18],
        ]);

        $weapon         = new Weapon;
        $weapon->name   = 'Guisarme';
        $weapon->price  = 14;
        $weapon->damage = '1D10 S';
        $weapon->bulk   = '2';
        $weapon->hands  = 2;
        $weapon->group  = 'Polearm';
        $weapon->type   = 'Martial Melee';
        $helper->addTypesToSimpleObject($weapon, ['Reach', 'Slashing', 'Trip']);
        $helper->addPropertiesToSimpleObject($weapon, [
            'Melee Damage'  => ['value' => '1D10'],
        ]);

        $weapon         = new Weapon;
        $weapon->name   = 'Halberd';
        $weapon->price  = 18;
        $weapon->damage = '1D10 P/S';
        $weapon->bulk   = '2';
        $weapon->hands  = 2;
        $weapon->group  = 'Polearm';
        $weapon->type   = 'Martial Melee';
        $helper->addTypesToSimpleObject($weapon, ['Piercing', 'Slashing', 'Reach', 'Versatile']);
        $helper->addPropertiesToSimpleObject($weapon, [
            'Melee Damage'  => ['value' => '1D10'],
        ]);

        $weapon         = new Weapon;
        $weapon->name   = 'Heavy Shield Bash';
        $weapon->damage = '1D4 B';
        $weapon->hands  = 1;
        $weapon->group  = 'Shield';
        $weapon->type   = 'Martial Melee';
        $helper->addTypesToSimpleObject($weapon, ['Shove']);

        $weapon         = new Weapon;
        $weapon->name   = 'Heavy Shield Boss';
        $weapon->price  = 5;
        $weapon->damage = '1D6 B';
        $weapon->hands  = 1;
        $weapon->group  = 'Shield';
        $weapon->type   = 'Martial Melee';
        $helper->addTypesToSimpleObject($weapon, ['Shove']);

        $weapon         = new Weapon;
        $weapon->name   = 'Heavy Shield Spikes';
        $weapon->price  = 5;
        $weapon->damage = '1D6 P';
        $weapon->hands  = 1;
        $weapon->group  = 'Shield';
        $weapon->type   = 'Martial Melee';
        $helper->addTypesToSimpleObject($weapon, ['Shove']);

        $weapon         = new Weapon;
        $weapon->name   = 'Lance';
        $weapon->price  = 12;
        $weapon->damage = '1D8 P (Deadly: 8)';
        $weapon->bulk   = '2';
        $weapon->hands  = 2;
        $weapon->group  = 'Spear';
        $weapon->type   = 'Martial Melee';
        $helper->addTypesToSimpleObject($weapon, ['Charge', 'Deadly', 'Piercing', 'Reach']);
        $helper->addPropertiesToSimpleObject($weapon, [
            'Melee Damage'  => ['value' => '1D8'],
        ]);

        $weapon         = new Weapon;
        $weapon->name   = 'Light Hammer';
        $weapon->price  = 3;
        $weapon->damage = '1D6 B';
        $weapon->range  = '20/60';
        $weapon->bulk   = 'L';
        $weapon->hands  = 1;
        $weapon->group  = 'Hammer';
        $weapon->type   = 'Martial Melee';
        $helper->addTypesToSimpleObject($weapon, ['Agile', 'Blunt', 'Thrown']);
        $helper->addPropertiesToSimpleObject($weapon, [
            'Melee Damage'  => ['value' => '1D6'],
            'Range'         => ['value' => '20/60'],
            'Ranged Damage' => ['value' => '1D6'],
        ]);

        $weapon         = new Weapon;
        $weapon->name   = 'Light Pick';
        $weapon->price  = 4;
        $weapon->damage = '1D4 P (Fatal: 8)';
        $weapon->bulk   = 'L';
        $weapon->hands  = 1;
        $weapon->group  = 'Pick';
        $weapon->type   = 'Martial Melee';
        $helper->addTypesToSimpleObject($weapon, ['Agile', 'Fatal', 'Piercing']);
        $helper->addPropertiesToSimpleObject($weapon, [
            'Melee Damage'  => ['value' => '1D4'],
        ]);

        $weapon         = new Weapon;
        $weapon->name   = 'Light Shield Bash';
        $weapon->damage = '1D3 B';
        $weapon->hands  = 1;
        $weapon->group  = 'Shield';
        $weapon->type   = 'Martial Melee';
        $helper->addTypesToSimpleObject($weapon, ['Agile', 'Shove']);

        $weapon         = new Weapon;
        $weapon->name   = 'Light Shield Boss';
        $weapon->price  = 4;
        $weapon->damage = '1D4 B';
        $weapon->hands  = 1;
        $weapon->group  = 'Shield';
        $weapon->type   = 'Martial Melee';
        $helper->addTypesToSimpleObject($weapon, ['Agile', 'Shove']);

        $weapon         = new Weapon;
        $weapon->name   = 'Light Shield Spikes';
        $weapon->price  = 4;
        $weapon->damage = '1D4 P';
        $weapon->hands  = 1;
        $weapon->group  = 'Shield';
        $weapon->type   = 'Martial Melee';
        $helper->addTypesToSimpleObject($weapon, ['Agile', 'Shove']);

        $weapon         = new Weapon;
        $weapon->name   = 'Longsword';
        $weapon->price  = 10;
        $weapon->damage = '1D8 S/P';
        $weapon->bulk   = '1';
        $weapon->hands  = 1;
        $weapon->group  = 'Sword';
        $weapon->type   = 'Martial Melee';
        $helper->addTypesToSimpleObject($weapon, ['Piercing', 'Slashing', 'Versatile']);
        $helper->addPropertiesToSimpleObject($weapon, [
            'Melee Damage'  => ['value' => '1D8'],
        ]);

        $weapon         = new Weapon;
        $weapon->name   = 'Main-gauche';
        $weapon->price  = 5;
        $weapon->damage = '1D4 P';
        $weapon->bulk   = 'L';
        $weapon->hands  = 1;
        $weapon->group  = 'Knife';
        $weapon->type   = 'Martial Melee';
        $helper->addTypesToSimpleObject($weapon, ['Agile', 'Disarm', 'Finesse', 'Parry', 'Piercing', 'Versatile']);
        $helper->addPropertiesToSimpleObject($weapon, [
            'Melee Damage'  => ['value' => '1D4'],
        ]);

        $weapon               = new Weapon;
        $weapon->name         = 'Maul';
        $weapon->price        = 26;
        $weapon->damage       = '1D12 B';
        $weapon->bulk         = '2';
        $weapon->hands        = 2;
        $weapon->group        = 'Hammer';
        $weapon->type         = 'Martial Melee';
        $weapon->threat_range = '18-20';
        $helper->addTypesToSimpleObject($weapon, ['Blunt', 'Shove']);
        $helper->addPropertiesToSimpleObject($weapon, [
            'Melee Damage'  => ['value' => '1D12'],
        ]);

        $weapon         = new Weapon;
        $weapon->name   = 'Pick';
        $weapon->price  = 7;
        $weapon->damage = '1D6 P (Fatal: 10)';
        $weapon->bulk   = '1';
        $weapon->hands  = 1;
        $weapon->group  = 'Pick';
        $weapon->type   = 'Martial Melee';
        $helper->addTypesToSimpleObject($weapon, ['Fatal', 'Piercing']);
        $helper->addPropertiesToSimpleObject($weapon, [
            'Melee Damage'  => ['value' => '1D6'],
        ]);

        $weapon         = new Weapon;
        $weapon->name   = 'Ranseur';
        $weapon->price  = 14;
        $weapon->damage = '1D10 P';
        $weapon->bulk   = '2';
        $weapon->hands  = 2;
        $weapon->group  = 'Polearm';
        $weapon->type   = 'Martial Melee';
        $helper->addTypesToSimpleObject($weapon, ['Disarm', 'Piercing', 'Reach']);
        $helper->addPropertiesToSimpleObject($weapon, [
            'Melee Damage'  => ['value' => '1D10'],
        ]);

        $weapon         = new Weapon;
        $weapon->name   = 'Rapier';
        $weapon->price  = 15;
        $weapon->damage = '1D6 P (Deadly: 8)';
        $weapon->bulk   = '1';
        $weapon->hands  = 1;
        $weapon->group  = 'Sword';
        $weapon->type   = 'Martial Melee';
        $helper->addTypesToSimpleObject($weapon, ['Deadly', 'Disarm', 'Finesse', 'Piercing']);
        $helper->addPropertiesToSimpleObject($weapon, [
            'Melee Damage'  => ['value' => '1D6'],
        ]);

        $weapon         = new Weapon;
        $weapon->name   = 'Sap';
        $weapon->price  = 1;
        $weapon->damage = '1D6 B';
        $weapon->bulk   = 'L';
        $weapon->hands  = 1;
        $weapon->group  = 'Club';
        $weapon->type   = 'Martial Melee';
        $helper->addTypesToSimpleObject($weapon, ['Agile', 'Blunt', 'Nonlethal']);
        $helper->addPropertiesToSimpleObject($weapon, [
            'Melee Damage'  => ['value' => '1D6'],
        ]);

        $weapon         = new Weapon;
        $weapon->name   = 'Scunutar';
        $weapon->price  = 11;
        $weapon->damage = '1D6 S';
        $weapon->bulk   = '1';
        $weapon->hands  = 1;
        $weapon->group  = 'Sword';
        $weapon->type   = 'Martial Melee';
        $helper->addTypesToSimpleObject($weapon, ['Forceful', 'Slashing', 'Sweep']);
        $helper->addPropertiesToSimpleObject($weapon, [
            'Melee Damage'  => ['value' => '1D6'],
        ]);

        $weapon               = new Weapon;
        $weapon->name         = 'Scythe';
        $weapon->price        = 18;
        $weapon->damage       = '1D10 S (Deadly: 10)';
        $weapon->bulk         = '2';
        $weapon->hands        = 2;
        $weapon->group        = 'Polearm';
        $weapon->type         = 'Martial Melee';
        $weapon->threat_range = '18-20';
        $helper->addTypesToSimpleObject($weapon, ['Deadly', 'Slashing', 'Trip']);
        $helper->addPropertiesToSimpleObject($weapon, [
            'Melee Damage'  => ['value' => '1D10'],
            'Threat Range'  => ['value' => 18],
        ]);

        $weapon         = new Weapon;
        $weapon->name   = 'Shortsword';
        $weapon->price  = 9;
        $weapon->damage = '1D6 P/S';
        $weapon->bulk   = 'L';
        $weapon->hands  = 1;
        $weapon->group  = 'Sword';
        $weapon->type   = 'Martial Melee';
        $helper->addTypesToSimpleObject($weapon, ['Agile', 'Finesse', 'Piercing', 'Slashing', 'Versatile']);
        $helper->addPropertiesToSimpleObject($weapon, [
            'Melee Damage'  => ['value' => '1D6'],
        ]);

        $weapon         = new Weapon;
        $weapon->name   = 'Starknife';
        $weapon->price  = 24;
        $weapon->damage = '1D4 P/S (Deadly: 6)';
        $weapon->range  = '20';
        $weapon->bulk   = 'L';
        $weapon->hands  = 1;
        $weapon->group  = 'Knife';
        $weapon->type   = 'Martial Melee';
        $helper->addTypesToSimpleObject($weapon, ['Agile', 'Deadly', 'Finesse', 'Piercing', 'Slashing', 'Thrown', 'Versatile']);
        $helper->addPropertiesToSimpleObject($weapon, [
            'Melee Damage'  => ['value' => '1D6'],
            'Range'         => ['value' => '20'],
            'Ranged Damage' => ['value' => '1D6'],
        ]);

        $weapon         = new Weapon;
        $weapon->name   = 'Trident';
        $weapon->price  = 13;
        $weapon->damage = '1D8 P';
        $weapon->range  = '20/60';
        $weapon->bulk   = '1';
        $weapon->hands  = 1;
        $weapon->group  = 'Spear';
        $weapon->type   = 'Martial Melee';
        $helper->addTypesToSimpleObject($weapon, ['Piercing', 'Thrown']);
        $helper->addPropertiesToSimpleObject($weapon, [
            'Melee Damage'  => ['value' => '1D8'],
            'Range'         => ['value' => '20/60'],
            'Ranged Damage' => ['value' => '1D8'],
        ]);

        $weapon         = new Weapon;
        $weapon->name   = 'War Flail';
        $weapon->price  = 15;
        $weapon->damage = '1D10 B';
        $weapon->bulk   = '2';
        $weapon->hands  = 2;
        $weapon->group  = 'Flail';
        $weapon->type   = 'Martial Melee';
        $helper->addTypesToSimpleObject($weapon, ['Blunt', 'Disarm', 'Sweep', 'Trip']);
        $helper->addPropertiesToSimpleObject($weapon, [
            'Melee Damage'  => ['value' => '1D10'],
        ]);

        $weapon               = new Weapon;
        $weapon->name         = 'Warhammer';
        $weapon->price        = 12;
        $weapon->damage       = '1D8 B';
        $weapon->bulk         = '1';
        $weapon->hands        = 1;
        $weapon->group        = 'Hammer';
        $weapon->type         = 'Martial Melee';
        $weapon->threat_range = '18-20';
        $helper->addTypesToSimpleObject($weapon, ['Blunt', 'Shove']);
        $helper->addPropertiesToSimpleObject($weapon, [
            'Melee Damage'  => ['value' => '1D8'],
        ]);

        $weapon         = new Weapon;
        $weapon->name   = 'Whip';
        $weapon->price  = 1;
        $weapon->damage = '1D4 S';
        $weapon->bulk   = '1';
        $weapon->hands  = 1;
        $weapon->group  = 'Flail';
        $weapon->type   = 'Martial Melee';
        $helper->addTypesToSimpleObject($weapon, ['Disarm', 'Finesse', 'Nonlethal', 'Reach', 'Slashing', 'Trip']);
        $helper->addPropertiesToSimpleObject($weapon, [
            'Melee Damage'  => ['value' => '1D4'],
        ]);

        $weapon              = new Weapon;
        $weapon->name        = 'Blowgun';
        $weapon->price       = 1;
        $weapon->damage      = '';
        $weapon->range       = '25/100';
        $weapon->reload      = 1;
        $weapon->bulk        = 'L';
        $weapon->hands       = 1;
        $weapon->group       = 'Dart';
        $weapon->type        = 'Simple Ranged';
        $weapon->description = 'This long, narrow tube is used for shooting blowgun darts, using only the power of a forcefully exhaled breath.';
        $helper->addTypesToSimpleObject($weapon, ['Agile', 'Nonlethal']);
        $helper->addPropertiesToSimpleObject($weapon, [
            'Range'         => ['value' => '25/100'],
        ]);

        $weapon              = new Weapon;
        $weapon->name        = '20 Blowgun Darts';
        $weapon->price       = 1;
        $weapon->damage      = '1 P';
        $weapon->bulk        = 'L';
        $weapon->group       = 'Dart';
        $weapon->type        = 'Simple Ranged';
        $weapon->description = '<p>These thin, light darts are typically made of hardwood and stabilized with fletching of down or fur. They are often hollow so they can be used to deliver poison</p>';
        $helper->addTypesToSimpleObject($weapon, ['Piercing']);
        $helper->addPropertiesToSimpleObject($weapon, [
            'Ranged Damage' => ['value' => '1D1'],
        ]);

        $weapon              = new Weapon;
        $weapon->name        = 'Crossbow';
        $weapon->price       = 30;
        $weapon->damage      = '';
        $weapon->range       = '100/300';
        $weapon->reload      = 2;
        $weapon->bulk        = '1';
        $weapon->hands       = 2;
        $weapon->group       = 'Bow';
        $weapon->type        = 'Simple Ranged';
        $weapon->description = '<p>This ranged weapon has a bow-like assembly mounted on a handled frame called a tiller. The tiller has a mechanism to lock the bowstring in place, attached to a trigger mechanism that releases the tension and launches a bolt.</p>';
        $helper->addTypesToSimpleObject($weapon);
        $helper->addPropertiesToSimpleObject($weapon, [
            'Ranged Damage' => ['value' => '1D8'],
        ]);

        $weapon         = new Weapon;
        $weapon->name   = '10 Crossbow Bolts';
        $weapon->price  = 1;
        $weapon->damage = '1D9 P';
        $weapon->bulk   = 'L';
        $weapon->group  = 'Bow';
        $weapon->type   = 'Simple Ranged';
        $helper->addTypesToSimpleObject($weapon, ['Piercing']);
        $helper->addPropertiesToSimpleObject($weapon, [
            'Ranged Damage' => ['value' => '1D8'],
        ]);

        $weapon         = new Weapon;
        $weapon->name   = '10 Dart';
        $weapon->price  = 1;
        $weapon->damage = '1D4 P';
        $weapon->range  = '20/60';
        $weapon->bulk   = 'L';
        $weapon->hands  = 1;
        $weapon->group  = 'Dart';
        $weapon->type   = 'Simple Ranged';
        $helper->addTypesToSimpleObject($weapon, ['Agile', 'Piercing', 'Thrown']);
        $helper->addPropertiesToSimpleObject($weapon, [
            'Range'         => ['value' => '20/60'],
            'Ranged Damage' => ['value' => '1D8'],
        ]);

        $weapon         = new Weapon;
        $weapon->name   = 'Hand Crossbow';
        $weapon->price  = 25;
        $weapon->damage = '';
        $weapon->range  = '30/120';
        $weapon->reload = 1;
        $weapon->bulk   = 'L';
        $weapon->hands  = 1;
        $weapon->group  = 'Bow';
        $weapon->type   = 'Simple Ranged';
        $helper->addTypesToSimpleObject($weapon);
        $helper->addPropertiesToSimpleObject($weapon, [
            'Range' => ['value' => '30/120'],
        ]);

        $weapon         = new Weapon;
        $weapon->name   = '10 Hand Crossbow Bolts';
        $weapon->price  = 1;
        $weapon->damage = '1D6 P';
        $weapon->bulk   = 'L';
        $weapon->group  = 'Bow';
        $weapon->type   = 'Simple Ranged';
        $helper->addTypesToSimpleObject($weapon, ['Piercing']);
        $helper->addPropertiesToSimpleObject($weapon, [
            'Ranged Damage' => ['value' => '1D6'],
        ]);

        $weapon         = new Weapon;
        $weapon->name   = 'Heavy Crossbow';
        $weapon->price  = 40;
        $weapon->damage = '';
        $weapon->range  = '100/400';
        $weapon->reload = 3;
        $weapon->bulk   = '2';
        $weapon->hands  = 2;
        $weapon->group  = 'Bow';
        $weapon->type   = 'Simple Ranged';
        $helper->addTypesToSimpleObject($weapon);
        $helper->addPropertiesToSimpleObject($weapon, [
            'Range' => ['value' => '100/400'],
        ]);

        $weapon         = new Weapon;
        $weapon->name   = '10 Heavy Crossbow Bolts';
        $weapon->price  = 1;
        $weapon->damage = '1D10 P';
        $weapon->bulk   = 'L';
        $weapon->group  = 'Bow';
        $weapon->type   = 'Simple Ranged';
        $helper->addTypesToSimpleObject($weapon, ['Piercing']);
        $helper->addPropertiesToSimpleObject($weapon, [
            'Ranged Damage' => ['value' => '1D10'],
        ]);

        $weapon         = new Weapon;
        $weapon->name   = 'Javelin';
        $weapon->price  = 1;
        $weapon->damage = '1D6 P';
        $weapon->range  = '30/120';
        $weapon->bulk   = 'L';
        $weapon->hands  = 1;
        $weapon->group  = 'Dart';
        $weapon->type   = 'Simple Ranged';
        $helper->addTypesToSimpleObject($weapon, ['Piercing', 'Thrown']);
        $helper->addPropertiesToSimpleObject($weapon, [
            'Melee Damage'  => ['value' => '1D8'],
            'Range'         => ['value' => '30/120'],
            'Ranged Damage' => ['value' => '1D8'],
        ]);

        $weapon         = new Weapon;
        $weapon->name   = 'Sling';
        $weapon->price  = 0;
        $weapon->damage = '';
        $weapon->range  = '30/120';
        $weapon->reload = 1;
        $weapon->bulk   = 'L';
        $weapon->hands  = 1;
        $weapon->group  = 'Sling';
        $weapon->type   = 'Simple Ranged';
        $helper->addTypesToSimpleObject($weapon, ['Propulsive']);
        $helper->addPropertiesToSimpleObject($weapon, [
            'Range' => ['value' => '30/120'],
        ]);

        $weapon         = new Weapon;
        $weapon->name   = '100 Sling Bullets';
        $weapon->price  = 1;
        $weapon->damage = '1D6 B';
        $weapon->bulk   = 'L';
        $weapon->group  = 'Sling';
        $weapon->type   = 'Simple Ranged';
        $helper->addTypesToSimpleObject($weapon, ['Blunt']);
        $helper->addPropertiesToSimpleObject($weapon, [
            'Ranged Damage' => ['value' => '1D6'],
        ]);

        $weapon              = new Weapon;
        $weapon->name        = 'Composite Longbow';
        $weapon->price       = 200;
        $weapon->damage      = '1D8/1D10 P (Volley: 50)';
        $weapon->range       = '150/700';
        $weapon->reload      = 1;
        $weapon->bulk        = '2';
        $weapon->hands       = 2;
        $weapon->group       = 'Bow';
        $weapon->type        = 'Martial Ranged';
        $weapon->description = "<p>This projectile weapon is made from horn, wood, and sinew laminated together to increase the power of its pull and the force of its projectile. Like all longbows, its great size also increases the bow's range and power. You must use two hands to fire it, and it cannot be used while mounted. Any time an ability is specifically restricted to a longbow, it also applies to composite longbows unless otherwise stated.</p>";
        $helper->addTypesToSimpleObject($weapon, ['Deadly', 'Piercing', 'Propulsive', 'Volley']);
        $helper->addPropertiesToSimpleObject($weapon, [
            'Range'         => ['value' => '150/700'],
            'Ranged Damage' => ['value' => '1D8'],
        ]);

        $weapon              = new Weapon;
        $weapon->name        = 'Composite Shortbow';
        $weapon->price       = 140;
        $weapon->damage      = '1D6/1D10 P';
        $weapon->range       = '90/350';
        $weapon->reload      = 1;
        $weapon->bulk        = '1';
        $weapon->hands       = 1;
        $weapon->group       = 'Bow';
        $weapon->type        = 'Martial Ranged';
        $weapon->description = '<p>This shortbow is made from horn, wood, and sinew laminated together to increase the power of its pull and the force of its projectiles. Its compact size and power makes it a favorite of mounted archers. Any time an ability is specifically restricted to a shortbow, it also applies to composite shortbows unless otherwise stated.</p>';
        $helper->addTypesToSimpleObject($weapon, ['Deadly', 'Piercing', 'Propulsive']);
        $helper->addPropertiesToSimpleObject($weapon, [
            'Range'         => ['value' => '90/350'],
            'Ranged Damage' => ['value' => '1D6'],
        ]);

        $weapon         = new Weapon;
        $weapon->name   = 'Longbow';
        $weapon->price  = 60;
        $weapon->damage = '1D8/1D10 P (Volley: 50)';
        $weapon->range  = '150/600';
        $weapon->reload = 1;
        $weapon->bulk   = '2';
        $weapon->hands  = 2;
        $weapon->group  = 'Bow';
        $weapon->type   = 'Martial Ranged';
        $helper->addTypesToSimpleObject($weapon, ['Deadly', 'Piercing', 'Volley']);
        $helper->addPropertiesToSimpleObject($weapon, [
            'Range'         => ['value' => '150/600'],
            'Ranged Damage' => ['value' => '1D8'],
        ]);

        $weapon         = new Weapon;
        $weapon->name   = 'Shortbow';
        $weapon->price  = 30;
        $weapon->damage = '1D6/1D10 P';
        $weapon->range  = '80/120';
        $weapon->reload = 1;
        $weapon->bulk   = '1';
        $weapon->hands  = 1;
        $weapon->group  = 'Bow';
        $weapon->type   = 'Martial Ranged';
        $helper->addTypesToSimpleObject($weapon, ['Deadly', 'Piercing']);
        $helper->addPropertiesToSimpleObject($weapon, [
            'Range'         => ['value' => '80/120'],
            'Ranged Damage' => ['value' => '1D8'],
        ]);

        $weapon              = new Weapon;
        $weapon->name        = '10 Arrows';
        $weapon->price       = 1;
        $weapon->damage      = '';
        $weapon->bulk        = 'L';
        $weapon->group       = 'Bow';
        $weapon->type        = 'Martial Ranged';
        $weapon->description = '<p>These projectiles are the ammunition for bows. The shaft of an arrow is made of wood. it is stabilized in flight by fletching at one end and bears a metal head on the other.</p>';
        $helper->addTypesToSimpleObject($weapon);

        $weapon              = new Weapon;
        $weapon->name        = 'Clan Dagger';
        $weapon->price       = 25;
        $weapon->damage      = '1D4 P/B';
        $weapon->bulk        = 'L';
        $weapon->hands       = 1;
        $weapon->group       = 'Knife';
        $weapon->type        = 'Uncommon Simple Melee';
        $weapon->description = '<p>This broad dagger is carried by dwarves as a weapon, tool, and designation of clan. Losing or having to surrender a clan dagger is considered a mark of embarrassment to most dwarves.</p>';
        $helper->addTypesToSimpleObject($weapon, ['Agile', 'Dwarf', 'Parry', 'Versatile']);

        $weapon         = new Weapon;
        $weapon->name   = 'Katar';
        $weapon->price  = 3;
        $weapon->damage = '1D4/1D6 P';
        $weapon->bulk   = 'L';
        $weapon->hands  = 1;
        $weapon->group  = 'Knife';
        $weapon->type   = 'Uncommon Simple Melee';
        $helper->addTypesToSimpleObject($weapon, ['Agile', 'Deadly', 'Unarmed']);

        $weapon         = new Weapon;
        $weapon->name   = 'Dogslicer';
        $weapon->price  = 1;
        $weapon->damage = '1D6 S';
        $weapon->bulk   = 'L';
        $weapon->hands  = 1;
        $weapon->group  = 'Sword';
        $weapon->type   = 'Uncommon Martial Melee';
        $helper->addTypesToSimpleObject($weapon, ['Agile', 'Backstabber', 'Finesse', 'Goblin']);

        $weapon         = new Weapon;
        $weapon->name   = 'Elven Curve Blade';
        $weapon->price  = 38;
        $weapon->damage = '1D8 S';
        $weapon->bulk   = '2';
        $weapon->hands  = 2;
        $weapon->group  = 'Sword';
        $weapon->type   = 'Uncommon Martial Melee';
        $helper->addTypesToSimpleObject($weapon, ['Elf', 'Finesse', 'Forceful']);

        $weapon         = new Weapon;
        $weapon->name   = "Filcher's Fork";
        $weapon->price  = 11;
        $weapon->damage = '1D4/1D6 P';
        $weapon->range  = '20/60';
        $weapon->bulk   = 'L';
        $weapon->hands  = 1;
        $weapon->group  = 'Spear';
        $weapon->type   = 'Uncommon Martial Melee';
        $helper->addTypesToSimpleObject($weapon, ['Agile', 'Backstabber', 'Deadly', 'Finesse', 'Halfling', 'Thrown']);

        $weapon               = new Weapon;
        $weapon->name         = 'Gnome Hooked Hammer';
        $weapon->price        = 18;
        $weapon->damage       = '1D6/1D10 B/P';
        $weapon->bulk         = '1';
        $weapon->hands        = 1;
        $weapon->group        = 'Hammer';
        $weapon->type         = 'Uncommon Martial Melee';
        $weapon->threat_range = '18-20';
        $helper->addTypesToSimpleObject($weapon, ['Gnome', 'Trip', 'Two-Hand', 'Versatile']);

        $weapon         = new Weapon;
        $weapon->name   = 'Horsechopper';
        $weapon->price  = 9;
        $weapon->damage = '1D8 S/P';
        $weapon->bulk   = '2';
        $weapon->hands  = 2;
        $weapon->group  = 'Polearm';
        $weapon->type   = 'Uncommon Martial Melee';
        $helper->addTypesToSimpleObject($weapon, ['Goblin', 'Reach', 'Trip', 'Versatile']);

        $weapon         = new Weapon;
        $weapon->name   = 'Kama';
        $weapon->price  = 10;
        $weapon->damage = '1D6 S';
        $weapon->bulk   = 'L';
        $weapon->hands  = 1;
        $weapon->group  = 'Knife';
        $weapon->type   = 'Uncommon Martial Melee';
        $helper->addTypesToSimpleObject($weapon, ['Agile', 'Unarmed', 'Trip']);

        $weapon         = new Weapon;
        $weapon->name   = 'Katana';
        $weapon->price  = 20;
        $weapon->damage = '1D8 S/P';
        $weapon->bulk   = '1';
        $weapon->hands  = 1;
        $weapon->group  = 'Sword';
        $weapon->type   = 'Uncommon Martial Melee';
        $helper->addTypesToSimpleObject($weapon, ['Versatile']);

        $weapon         = new Weapon;
        $weapon->name   = 'Kukri';
        $weapon->price  = 6;
        $weapon->damage = '1D6 S';
        $weapon->bulk   = 'L';
        $weapon->hands  = 1;
        $weapon->group  = 'Knife';
        $weapon->type   = 'Uncommon Martial Melee';
        $helper->addTypesToSimpleObject($weapon, ['Agile', 'Finesse', 'Trip']);

        $weapon         = new Weapon;
        $weapon->name   = 'Nunchaku';
        $weapon->price  = 2;
        $weapon->damage = '1D6 B';
        $weapon->bulk   = 'L';
        $weapon->hands  = 1;
        $weapon->group  = 'Club';
        $weapon->type   = 'Uncommon Martial Melee';
        $helper->addTypesToSimpleObject($weapon, ['Backswing', 'Disarm', 'Finesse', 'Unarmed']);

        $weapon         = new Weapon;
        $weapon->name   = 'Orc Knuckle Dagger';
        $weapon->price  = 7;
        $weapon->damage = '1DP';
        $weapon->bulk   = 'L';
        $weapon->hands  = 1;
        $weapon->group  = 'Knife';
        $weapon->type   = 'Uncommon Martial Melee';
        $helper->addTypesToSimpleObject($weapon, ['Agile', 'Disarm', 'Orc']);

        $weapon         = new Weapon;
        $weapon->name   = 'Sai';
        $weapon->price  = 6;
        $weapon->damage = '1D4 P/B';
        $weapon->bulk   = 'L';
        $weapon->hands  = 1;
        $weapon->group  = 'Knife';
        $weapon->type   = 'Uncommon Martial Melee';
        $helper->addTypesToSimpleObject($weapon, ['Agile', 'Disarm', 'Finesse', 'Unarmed', 'Versatile']);

        $weapon         = new Weapon;
        $weapon->name   = 'Spiked Chain';
        $weapon->price  = 28;
        $weapon->damage = '1D8 S';
        $weapon->bulk   = '1';
        $weapon->hands  = 2;
        $weapon->group  = 'Flail';
        $weapon->type   = 'Uncommon Martial Melee';
        $helper->addTypesToSimpleObject($weapon, ['Disarm', 'Finesse', 'Trip']);

        $weapon         = new Weapon;
        $weapon->name   = 'Temple Sword';
        $weapon->price  = 14;
        $weapon->damage = '1D8 S';
        $weapon->bulk   = '1';
        $weapon->hands  = 1;
        $weapon->group  = 'Sword';
        $weapon->type   = 'Uncommon Martial Melee';
        $helper->addTypesToSimpleObject($weapon, ['Unarmed', 'Trip']);

        $weapon               = new Weapon;
        $weapon->name         = 'Dwarven Waraxe';
        $weapon->price        = 25;
        $weapon->damage       = '1D8/1D12 S';
        $weapon->bulk         = '2';
        $weapon->hands        = 1;
        $weapon->group        = 'Axe';
        $weapon->type         = 'Uncommon Exotic Melee';
        $weapon->threat_range = '18-20';
        $helper->addTypesToSimpleObject($weapon, ['Dwarf', 'Sweep', 'Two-Hand']);

        $weapon         = new Weapon;
        $weapon->name   = 'Gnome Flickmace';
        $weapon->price  = 24;
        $weapon->damage = '1D8 B';
        $weapon->bulk   = '2';
        $weapon->hands  = 1;
        $weapon->group  = 'Flail';
        $weapon->type   = 'Uncommon Exotic Melee';
        $helper->addTypesToSimpleObject($weapon, ['Gnome', 'Reach']);

        $weapon         = new Weapon;
        $weapon->name   = 'Orc Necksplitter';
        $weapon->price  = 21;
        $weapon->damage = '1D8 S/P';
        $weapon->bulk   = '1';
        $weapon->hands  = 1;
        $weapon->group  = 'Knife';
        $weapon->type   = 'Uncommon Exotic Melee';
        $helper->addTypesToSimpleObject($weapon, ['Forceful', 'Orc', 'Versatile']);

        $weapon         = new Weapon;
        $weapon->name   = 'Sawtooth Sabre';
        $weapon->price  = 50;
        $weapon->damage = '1D6 S';
        $weapon->bulk   = 'L';
        $weapon->hands  = 1;
        $weapon->group  = 'Sword';
        $weapon->type   = 'Uncommon Exotic Melee';
        $helper->addTypesToSimpleObject($weapon, ['Agile', 'Finesse', 'Twin']);

        $weapon         = new Weapon;
        $weapon->name   = 'Halfling Sling Staff';
        $weapon->price  = 50;
        $weapon->damage = '1D10 B';
        $weapon->range  = '50/200';
        $weapon->reload = 1;
        $weapon->bulk   = '1';
        $weapon->hands  = 2;
        $weapon->group  = 'Sling';
        $weapon->type   = 'Uncommon Martial Ranged';
        $helper->addTypesToSimpleObject($weapon, ['Halfling', 'Propulsive']);

        $weapon         = new Weapon;
        $weapon->name   = '10 Halfling Sling Bullets';
        $weapon->price  = 1;
        $weapon->damage = '';
        $weapon->bulk   = 'L';
        $weapon->group  = 'Sling';
        $weapon->type   = 'Uncommon Martial Ranged';
        $helper->addTypesToSimpleObject($weapon);

        $weapon         = new Weapon;
        $weapon->name   = 'Shuriken';
        $weapon->price  = 1;
        $weapon->damage = '1D4 P';
        $weapon->range  = '20/60';
        $weapon->reload = 0;
        $weapon->hands  = 1;
        $weapon->group  = 'Dart';
        $weapon->type   = 'Uncommon Martial Ranged';
        $helper->addTypesToSimpleObject($weapon, ['Agile', 'Unarmed', 'Thrown']);

        $weapon         = new Weapon;
        $weapon->name   = 'Net';
        $weapon->price  = 1;
        $weapon->damage = '-';
        $weapon->bulk   = 'L';
        $weapon->group  = 'Exotic';
        $weapon->range  = '5/15';
        $helper->addTypesToSimpleObject($weapon, ['Disarm', 'Thrown', 'Nonlethal', 'Trip']);

        $weapon              = new Weapon;
        $weapon->name        = 'Pincer Staff';
        $weapon->price       = 20;
        $weapon->range       = 10;
        $weapon->damage      = '1D10 B';
        $weapon->bulk        = 'L';
        $weapon->hands       = 2;
        $weapon->group       = 'Exotic';
        $weapon->description = '<p>This weapon has a 10-foot reach and cannot be used against an adjacent opponent. If you hit an opponent within one size category of yourself with a pincer staff, you may attempt to start a Grapple as an Action without provoking an Attack of Opportunity. If you get a hold, the staff grabs the opponent. Once grabbed, the wielder may automatically deal damage to the target with an Action.</p>';
        $helper->addTypesToSimpleObject($weapon, ['Two-Hand', 'Reach']);

        $weapon              = new Weapon;
        $weapon->name        = 'Tail Scythe';
        $weapon->price       = 118;
        $weapon->damage      = '1D6 P/S';
        $weapon->bulk        = 'L';
        $weapon->hands       = 0;
        $weapon->group       = 'Exotic';
        $weapon->description = "<p>A tail scythe consists of a long, curved blade that is designed to be strapped to a serpentine tail. In fact, the weapon is usable only by creatures possessing such an appendage, since it does not have a handle that lends itself to a humanoid hand. The design of the tail scythe focuses tremendous force on the sharp point while still allowing devastating slashes with the blade edge.</p>
<p>Because of a tail scythe's shape, you can also use it to make trip attacks. However, if you are tripped during your own trip attempt, you cannot drop the tail scythe to avoid being tripped. Donning or removing a tail scythe takes 1 Action with the benefit of hands or assistance, or with a Triple Action without.</p>";
        $helper->addTypesToSimpleObject($weapon, ['Agile', 'Trip']);
    }
}
