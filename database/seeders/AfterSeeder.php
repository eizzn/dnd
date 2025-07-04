<?php

namespace Database\Seeders;

use App\Models\Feat;
use App\Models\Formula;
use App\Models\Monster;
use App\Models\Spell;
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
        Spell::where('name', 'Arrn`Tel`Orar')->firstOrFail()->feats()->save($olinFeat);
        Spell::where('name', 'Daoin`Teague`Feer')->firstOrFail()->feats()->save($olinFeat);
        Spell::where('name', 'Evaliir`Enevahr')->firstOrFail()->feats()->save($olinFeat);
        Spell::where('name', 'Fhaor`Akh`Tel`Quess')->firstOrFail()->feats()->save($olinFeat);
        Spell::where('name', 'Ghaatiil')->firstOrFail()->feats()->save($olinFeat);
        Spell::where('name', 'N`Quor`Khaor')->firstOrFail()->feats()->save($olinFeat);
        Spell::where('name', 'Suyoll')->firstOrFail()->feats()->save($olinFeat);
        Spell::where('name', 'Uaul`Selu`Keryth')->firstOrFail()->feats()->save($olinFeat);
        Spell::where('name', 'Starmantle')->firstOrFail()->monsters()->save(Monster::where('name', 'Pixie')->firstOrFail(), [
            'meta' => "A pinch of dust from a pixie's wing (20 gp)",
        ]);

        $highMagic = Feat::where('name', 'High Magic')->firstOrFail();
        Spell::where('name', 'Akh`Faen`Tel`Quess')->firstOrFail()->feats($highMagic);
        Spell::where('name', 'Akrmaesual')->firstOrFail()->feats()->save($highMagic);
        Spell::where('name', 'Ialyshae`Seldar`Wihylos')->firstOrFail()->feats()->save($highMagic);
        Spell::where('name', 'N`Tel`Orar')->firstOrFail()->feats()->save($highMagic);
        Spell::where('name', 'N`Maernthor')->firstOrFail()->feats()->save($highMagic);
        Spell::where('name', 'Oacil`Quevan')->firstOrFail()->feats()->save($highMagic);
        Spell::where('name', 'Quomaniith')->firstOrFail()->feats()->save($highMagic);
        Spell::where('name', 'U`Aestar`Kess')->firstOrFail()->feats()->save($highMagic);
        Spell::where('name', 'Uaul`Selu`Keryth')->firstOrFail()->feats()->save($highMagic);
        Spell::where('name', 'Vuorl`Kyshuf')->firstOrFail()->feats()->save($highMagic);

        $node = Feat::where('name', 'Node Spellcasting')->firstOrFail();
        Spell::where('name', 'Locate Node')->firstOrFail()->feats()->save($node);
        Spell::where('name', 'Node Lock')->firstOrFail()->feats()->save($node);
        Spell::where('name', 'Node Genesis')->firstOrFail()->feats()->save(
            Feat::where('name', 'Improved Node Spellcasting')->firstOrFail()
        );

        Spell::where('name', 'Unicorn Stead')->firstOrFail()
            ->feats()->save(Feat::where('name', "Mielikki's Needles")->firstOrFail());

        $spell = Spell::where('name', 'Arcane Evasion')->firstOrFail();
        $spell->spells()->save(Spell::where('name', 'Teleport')->firstOrFail());

        // formula
        Formula::where('name', 'Giant Spider Venom')->firstOrFail()->monsters()->save(
            Monster::where('name', 'Spider, Giant')->firstOrFail(), ['meta' => 'Must be harvested from a dead or incapacitated specimen']
        );
        $formula = Formula::where('name', 'Lichbane')->firstOrFail();
        $formula->formulas()->save(Formula::where('name', 'Holy Water')->firstOrFail());
        // add Lich to Lichbane
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
        Formula::where('name', 'Dwarfbane')->firstOrFail()->monsters()->save(
            Monster::where('name', 'Slime Mold')->firstOrFail()
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
        $formula = Formula::where('name', 'Potion of Speed')->firstOrFail();
        $formula->monsters()->save(
            Monster::where('name', 'Horse, Draft')->firstOrFail(), ['meta' => 'Sweat from a fast horse']
        );
        $formula->monsters()->save(
            Monster::where('name', 'Quickling')->firstOrFail(), ['meta' => 'One drop of blood']
        );
        $formula->monsters()->save(
            Monster::where('name', 'Medusa')->firstOrFail(), ['meta' => 'Blood used to fill the rune']
        );
        $formula = Formula::where('name', 'Potion of Healing, Greater')->firstOrFail();
        $formula->monsters()->save(
            Monster::where('name', 'Troll')->firstOrFail(), ['meta' => '4 ounces of flesh and fresh blood']
        );
        $formula = Formula::where('name', 'Potion of Strength, Greater')->firstOrFail();
        $formula->monsters()->save(
            Monster::where('name', 'Ogre')->firstOrFail(), ['meta' => '3 drops of blood']
        );
        $formula = Formula::where('name', 'Potion of Healing, Greater')->firstOrFail();
        $formula->monsters()->save(
            Monster::where('name', 'Ogre')->firstOrFail(), ['meta' => 'At least 3 drops of blood']
        );
        $formula = Formula::where('name', 'Potion of Healing, Superior')->firstOrFail();
        $formula->monsters()->save(
            Monster::where('name', 'Ogre')->firstOrFail(), ['meta' => 'At least 5 drops of blood']
        );
        Formula::where('name', 'Vampiric')->firstOrFail()->monsters()->save(
            Monster::where('name', 'Vampire')->firstOrFail(), ['meta' => '10 drops of fresh vampire blood']
        );
        Formula::where('name', 'Life Stealer')->firstOrFail()->monsters()->save(
            Monster::where('name', 'Vampire')->firstOrFail(), ['meta' => '2 drops of vampire blood']
        );
        // add Wasp, Giant to Wasp Venom
    }
}
