<?php

namespace Database\Seeders;

use App\Models\Feat;
use App\Models\Formula;
use App\Models\Monster;
use App\Models\Spell;
use App\Models\Talent;
use Illuminate\Database\Seeder;

class AfterSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // spells
        $olinFeat = Feat::where('name', 'Olin Gisir')->firstOrFail();
        Spell::where('name', 'Arrn`Tel`Orar')->firstOrFail()->feats()->save($olinFeat, ['level' => 9]);
        Spell::where('name', 'Evaliir`Enevahr')->firstOrFail()->feats()->save($olinFeat, ['level' => 8]);
        Spell::where('name', 'Fhaor`Akh`Tel`Quess')->firstOrFail()->feats()->save($olinFeat, ['level' => 9]);
        Spell::where('name', 'Ghaatiil')->firstOrFail()->feats()->save($olinFeat, ['level' => 9]);
        Spell::where('name', 'N`Quor`Khaor')->firstOrFail()->feats()->save($olinFeat, ['level' => 10]);
        Spell::where('name', 'Suyoll')->firstOrFail()->feats()->save($olinFeat, ['level' => 10]);
        Spell::where('name', 'Uaul`Selu`Keryth')->firstOrFail()->feats()->save($olinFeat, ['level' => 11]);
        Spell::where('name', 'Starmantle')->firstOrFail()->monsters()->save(
            Monster::where('name', 'Pixie')->firstOrFail(), ['meta' => "A pinch of dust from a pixie's wing (20 gp)"]
        );

        $highMagic = Feat::where('name', 'High Magic')->firstOrFail();
        Spell::where('name', 'Akh`Faen`Tel`Quess')->firstOrFail()->feats($highMagic, ['level' => 7]);
        Spell::where('name', 'Akrmaesual')->firstOrFail()->feats()->save($highMagic, ['level' => 7]);
        Spell::where('name', 'Daoin`Teague`Feer')->firstOrFail()->feats()->save($highMagic, ['level' => 7]);
        Spell::where('name', 'Ialyshae`Seldar`Wihylos')->firstOrFail()->feats()->save($highMagic, ['level' => 6]);
        Spell::where('name', 'N`Tel`Orar')->firstOrFail()->feats()->save($highMagic, ['level' => 8]);
        Spell::where('name', 'N`Maernthor')->firstOrFail()->feats()->save($highMagic, ['level' => 7]);
        Spell::where('name', 'Oacil`Quevan')->firstOrFail()->feats()->save($highMagic, ['level' => 8]);
        Spell::where('name', 'Quomaniith')->firstOrFail()->feats()->save($highMagic, ['level' => 3]);
        Spell::where('name', 'U`Aestar`Kess')->firstOrFail()->feats()->save($highMagic, ['level' => 5]);
        Spell::where('name', 'Vuorl`Kyshuf')->firstOrFail()->feats()->save($highMagic, ['level' => 4]);

        Spell::where('name', 'Arcane Evasion')->firstOrFail()->spells()->save(
            Spell::where('name', 'Teleport')->firstOrFail()
        );

        // formula
        Formula::where('name', 'Giant Spider Venom')->firstOrFail()->monsters()->save(
            Monster::where('name', 'Spider, Giant')->firstOrFail(), ['meta' => 'Must be harvested from a dead or incapacitated specimen']
        );
        Formula::where('name', 'Phase Spider Venom')->firstOrFail()->monsters()->save(
            Monster::where('name', 'Phase Spider')->firstOrFail(), ['meta' => 'Must be harvested from a living specimen']
        );
        Formula::where('name', 'Lichbane')->firstOrFail()->formulas()->save(
            Formula::where('name', 'Holy Water')->firstOrFail()
        );
        Formula::where('name', 'Gravedust')->firstOrFail()->formulas()->save(
            Formula::where('name', 'Holy Water')->firstOrFail()
        );
        Formula::where('name', 'Carrion Crawler Mucus Poison')->firstOrFail()->monsters()->save(
            Monster::where('name', 'Carrion Crawler')->firstOrFail(), ['meta' => 'Must be harvested from a dead or incapacitated specimen']
        );
        Formula::where('name', 'Blue Frog Paste')->firstOrFail()->monsters()->save(
            Monster::where('name', 'Frog')->firstOrFail(), ['meta' => 'Bright blue frogs of the Serpent Hills']
        );
        Formula::where('name', 'Drow Sleep Poison')->firstOrFail()->formulas()->save(
            Formula::where('name', 'Giant Spider Venom')->firstOrFail(), ['meta' => 'Fermented for 3 months']
        );
        Formula::where('name', 'Ettercap Poison')->firstOrFail()->monsters()->save(
            Monster::where('name', 'Ettercap')->firstOrFail()
        );
        Formula::where('name', 'Ghoul Saliva')->firstOrFail()->monsters()->save(
            Monster::where('name', 'Ghoul')->firstOrFail()
        );
        Formula::where('name', 'Giant Centipede Venom')->firstOrFail()->monsters()->save(
            Monster::where('name', 'Centipede, Giant')->firstOrFail()
        );
        Formula::where('name', 'Giant Toad Poison')->firstOrFail()->monsters()->save(
            Monster::where('name', 'Toad, Giant')->firstOrFail()
        );
        Formula::where('name', 'Green Dragon Bile')->firstOrFail()->monsters()->save(
            Monster::where('name', 'Green Dragon, Young')->firstOrFail()
        );
        Formula::where('name', 'Jalwun Jiwin')->firstOrFail()->monsters()->save(
            Monster::where('name', 'Poisonous Toad')->firstOrFail(), ['meta' => 'Underground Toad']
        );
        Formula::where('name', 'Royal Scorpion Tail')->firstOrFail()->monsters()->save(
            Monster::where('name', 'Scorpion')->firstOrFail(), ['meta' => 'Royal Tail Scorpion']
        );
        Formula::where('name', 'Venoms Blood')->firstOrFail()->monsters()->save(
            Monster::where('name', 'Scorpion, Giant')->firstOrFail()
        );
        Formula::where('name', 'Venoms Blood')->firstOrFail()->monsters()->save(
            Monster::where('name', 'Toad, Giant')->firstOrFail()
        );
        Formula::where('name', 'Venoms Blood')->firstOrFail()->monsters()->save(
            Monster::where('name', 'Poisonous Snake, Giant')->firstOrFail()
        );
        Formula::where('name', 'Cockatrice Feather Preservation')->firstOrFail()->monsters()->save(
            Monster::where('name', 'Cockatrice')->firstOrFail(), ['meta' => 'The tail feathers plucked from a dead or incapacitated Cockatrice that are less than 2 days since plucking']
        );
        Formula::where('name', 'Phantom Ink')->firstOrFail()->monsters()->save(
            Monster::where('name', 'Pixie')->firstOrFail(), ['meta' => 'At least 3 grains of dust from the Pixie']
        );
        Formula::where('name', 'Life Stealer')->firstOrFail()->monsters()->save(
            Monster::where('name', 'Vampire')->firstOrFail(), ['meta' => 'At least 10 drops of fresh blood from an un-destroyed vampire']
        );
        Formula::where('name', 'Potion of Acid Resistance')->firstOrFail()->monsters()->save(
            Monster::where('name', 'Carrion Crawler')->firstOrFail(), ['meta' => '1/4 oz mucus']
        );
        Formula::where('name', 'Potion of Climbing')->firstOrFail()->monsters()->save(
            Monster::where('name', 'Wolf Spider, Giant')->firstOrFail(), ['meta' => '2 hairs']
        );
        Formula::where('name', 'Potion of Cold Resistance')->firstOrFail()->monsters()->save(
            Monster::where('name', 'Winter Wolf')->firstOrFail(), ['meta' => '10 drops of blood']
        );
        Formula::where('name', 'Potion of Electricity Resistance')->firstOrFail()->monsters()->save(
            Monster::where('name', 'Behir')->firstOrFail(), ['meta' => '1 oz of liver']
        );
        Formula::where('name', 'Potion of Healing, Superior')->firstOrFail()->monsters()->save(
            Monster::where('name', 'Troll')->firstOrFail(), ['meta' => 'At least 1 gallon of blood, then condensed']
        );
        Formula::where('name', 'Potion of Intelligence')->firstOrFail()->monsters()->save(
            Monster::where('name', 'Intellect Devourer')->firstOrFail(), ['meta' => '1/2 oz Brain matter (or from any creature with Psionic abilities)']
        );
        Formula::where('name', 'Potion of Intelligence, Greater')->firstOrFail()->monsters()->save(
            Monster::where('name', 'Intellect Devourer')->firstOrFail(), ['meta' => '1/2 oz Brain matter (or from any creature with Psionic abilities)']
        );
        Formula::where('name', 'Potion of Invisibility')->firstOrFail()->monsters()->save(
            Monster::where('name', 'Spider, Giant')->firstOrFail(), ['meta' => '4 Fermented eyes']
        );
        Formula::where('name', 'Potion of Jumping')->firstOrFail()->monsters()->save(
            Monster::where('name', 'Frog')->firstOrFail(), ['meta' => '3 drops of blood']
        );
        Formula::where('name', 'Potion of Quickness')->firstOrFail()->monsters()->save(
            Monster::where('name', 'Cat')->firstOrFail(), ['meta' => '3 whiskers']
        );
        Formula::where('name', 'Potion of Quickness, Greater')->firstOrFail()->monsters()->save(
            Monster::where('name', 'Cat')->firstOrFail(), ['meta' => '3 whiskers']
        );
        Formula::where('name', 'Potion of Strength, Greater')->firstOrFail()->monsters()->save(
            Monster::where('name', 'Ogre')->firstOrFail(), ['meta' => '3 drops of blood']
        );
        Formula::where('name', 'Potion of Strength, Perfect')->firstOrFail()->monsters()->save(
            Monster::where('name', 'Hill Giant')->firstOrFail(), ['meta' => '3 drops of blood']
        );
        Formula::where('name', 'Potion of Wisdom')->firstOrFail()->monsters()->save(
            Monster::where('name', 'Owl')->firstOrFail(), ['meta' => '1/2 oz tongue']
        );
        Formula::where('name', 'Potion of Wisdom, Greater')->firstOrFail()->monsters()->save(
            Monster::where('name', 'Owl')->firstOrFail(), ['meta' => '1/2 oz tongue']
        );
        Formula::where('name', 'Potion of Beauty')->firstOrFail()->monsters()->save(
            Monster::where('name', 'Eagle')->firstOrFail(), ['meta' => '1 feather, crushed']
        );
        Formula::where('name', 'Potion of Beauty, Greater')->firstOrFail()->monsters()->save(
            Monster::where('name', 'Eagle')->firstOrFail(), ['meta' => '1 feather, crushed']
        );
        Formula::where('name', 'Dwarfbane')->firstOrFail()->monsters()->save(
            Monster::where('name', 'Slime Mold')->firstOrFail(), ['meta' => 'Poison must be extracted in a very special way']
        );
        Formula::where('name', 'Potion of Gaseous Form')->firstOrFail()->monsters()->save(
            Monster::where('name', 'Air Mephit')->firstOrFail(), ['meta' => 'Clipping from nail or horn']
        );
        $formula = Formula::where('name', 'Potion of Longevity')->firstOrFail();
        $formula->monsters()->save(
            Monster::where('name', 'Imp')->firstOrFail(), ['meta' => 'Heart of the Imp']
        );
        $formula->monsters()->save(
            Monster::where('name', 'Scorpion, Giant')->firstOrFail(), ['meta' => 'Tail stinger']
        );
        $formula = Formula::where('name', 'Potion of Speed')->firstOrFail();
        $formula->monsters()->save(
            Monster::where('name', 'Horse, Riding')->firstOrFail(), ['meta' => '3 drops of blood']
        );
        $formula->monsters()->save(
            Monster::where('name', 'Quickling')->firstOrFail(), ['meta' => '5 drops of blood']
        );
        $formula->monsters()->save(
            Monster::where('name', 'Medusa')->firstOrFail(), ['meta' => 'Blood used to fill the rune']
        );
        $formula = Formula::where('name', 'Potion of Healing, Greater')->firstOrFail();
        $formula->monsters()->save(
            Monster::where('name', 'Troll')->firstOrFail(), ['meta' => '4 ounces of flesh and fresh blood']
        );
        $formula->monsters()->save(
            Monster::where('name', 'Ogre')->firstOrFail(), ['meta' => 'At least 3 drops of blood']
        );
        $formula = Formula::where('name', 'Blueshine')->firstOrFail();
        $formula->monsters()->save(
            Monster::where('name', 'Cockatrice')->firstOrFail(), ['meta' => 'single feather in brine solution soaked for at least 3 months']
        );
        $formula->formulas()->save(
            Formula::where('name', 'Sweet Water')->firstOrFail(), ['meta' => '1 vial']
        );
        Formula::where('name', 'Everbright')->firstOrFail()->formulas()->save(
            Formula::where('name', 'Potion of Acid Resistance')->firstOrFail()
        );
        Formula::where('name', 'Vampiric')->firstOrFail()->monsters()->save(
            Monster::where('name', 'Vampire')->firstOrFail(), ['meta' => '10 drops of fresh vampire blood']
        );
        Formula::where('name', 'Cloak of Displacement')->firstOrFail()->monsters()->save(
            Monster::where('name', 'Displacer Beast')->firstOrFail(), ['meta' => 'The hide and tentacles are used to form most of the cloak']
        );
        Formula::where('name', 'Giant Wasp Venom')->firstOrFail()->monsters()->save(
            Monster::where('name', 'Wasp, Giant')->firstOrFail(), ['meta' => 'The venom from the stinger is enough to make 2 doses']
        );
        Formula::where('name', 'Wand of Viscus Globs')->firstOrFail()->monsters()->save(
            Monster::where('name', 'Spider, Giant')->firstOrFail(), ['meta' => 'Undamaged Silk Gland']
        );
        Formula::where('name', 'Wand of Web')->firstOrFail()->monsters()->save(
            Monster::where('name', 'Spider, Giant')->firstOrFail(), ['meta' => 'Undamaged Silk Gland']
        );
        $formula = Formula::where('name', 'Potion of Lichdom')->firstOrFail();
        $formula->formulas()->save(
            Formula::where('name', 'Arsenic')->firstOrFail()
        );
        $formula->formulas()->save(
            Formula::where('name', 'Black Lotus Extract')->firstOrFail()
        );
        $formula->formulas()->save(
            Formula::where('name', 'Agony')->firstOrFail()
        );
        $formula->formulas()->save(
            Formula::where('name', 'Panaeolo')->firstOrFail()
        );
        $formula->formulas()->save(
            Formula::where('name', 'Phase Spider Venom')->firstOrFail(), ['meta' => '8 drops']
        );
        $formula = Formula::where('name', 'Lich Phylactery')->firstOrFail();
        $formula->formulas()->save(
            Formula::where('name', 'Blueshine')->firstOrFail()
        );
        $formula->formulas()->save(
            Formula::where('name', 'Everbright')->firstOrFail()
        );
        $formula->formulas()->save(
            Formula::where('name', 'Giant Wasp Venom')->firstOrFail(), ['meta' => '8 drops']
        );
        $formula->monsters()->save(
            Monster::where('name', 'Doppelganger')->firstOrFail(), ['meta' => '2 drops of cranial fluid']
        );

        // feats
        Feat::where('name', 'Sentinel')->firstOrFail()->talents()->save(
            Talent::where('name', 'Improved Reaction')->firstOrFail()
        );
        Feat::where('name', 'Opportunity Power')->firstOrFail()->talents(
            Talent::where('name', 'Improved Reaction')->firstOrFail()
        );
        Feat::where('name', 'Quicken Power')->firstOrFail()->talents(
            Talent::where('name', 'Improved Reaction')->firstOrFail()
        );
        Feat::where('name', 'Deflect Ranged Attack')->firstOrFail()->talents(
            Talent::where('name', 'Improved Reaction')->firstOrFail()
        );
    }
}
