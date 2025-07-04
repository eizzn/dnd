<?php

namespace Database\Seeders;

use App\Models\Attribute;
use App\Models\Skill;
use App\Models\Type;
use App\Services\SeedHelper;
use Database\Seeders\Characters\CharactersSeeder;
use Database\Seeders\Classes\ClassSeeder;
use Database\Seeders\Equipment\EquipmentsSeeder;
use Database\Seeders\Feats\FeatsSeeder;
use Database\Seeders\Formulas\FormulasSeeder;
use Database\Seeders\Gods\GodsSeeder;
use Database\Seeders\Locations\LocationsSeeder;
use Database\Seeders\Materials\MaterialsSeeder;
use Database\Seeders\Monsters\MonstersSeeder;
use Database\Seeders\Organizations\OrganizationsSeeder;
use Database\Seeders\Powers\PowersSeeder;
use Database\Seeders\Races\RacesSeeder;
use Database\Seeders\Rules\RulesSeeder;
use Database\Seeders\Skills\SkillsSeeder;
use Database\Seeders\Spells\SpellsSeeder;
use Database\Seeders\Talents\TalentsSeeder;
use Database\Seeders\Templates\TemplatesSeeder;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $runBase         = true;
        $app             = app();
        $app->seedHelper = new SeedHelper;

        if ($runBase) {
            $this->call(AttributesSeeder::class);
            $this->call(BackgroundsSeeder::class);
            $this->call(TypesSeeder::class);
            $this->call(PropertiesSeeder::class);
            $this->call(RacesSeeder::class);
            $this->call(SkillsSeeder::class);
            $this->call(ActionsSeeder::class);
            $this->call(ConditionsSeeder::class);
            $this->call(PantheonsSeeder::class);
        } else {
            $this->buildCache();
        }
        $this->call(MaterialsSeeder::class);

        $this->call(FeaturesSeeder::class);

        $this->call(SpellsSeeder::class);
        $this->call(PowersSeeder::class);

        $this->call(FeatsSeeder::class);
        $this->call(TalentsSeeder::class);

        $this->call(ClassSeeder::class);
        $this->call(EquipmentsSeeder::class);
        $this->call(FormulasSeeder::class);
        $this->call(RulesSeeder::class);
        $this->call(TemplatesSeeder::class);
        if ($runBase) {
            $this->call(GodsSeeder::class);
            $this->call(MonstersSeeder::class);
            $this->call(OrganizationsSeeder::class);
        }
        $this->call(CharactersSeeder::class);
        $this->call(LocationsSeeder::class);

        // run any after post seeding code
        $this->call(AfterSeeder::class);
    }

    protected function buildCache()
    {
        $this->buildAttributesCache();
        $this->buildTypesCache();
        $this->buildSkillsCache();
    }

    protected function buildAttributesCache()
    {
        $app             = app();
        $app->attributes = [];
        $attrs           = [];

        foreach (Attribute::all() as $attr) {
            $attrs[$attr->attr] = $attr;
        }
        $app->attributes = $attrs;
    }

    protected function buildTypesCache()
    {
        $app        = app();
        $app->types = [];
        $types      = [];

        foreach (Type::all() as $type) {
            $types[$type->name] = $type;
        }
        $app->types = $types;
    }

    protected function buildSkillsCache()
    {
        $app    = app();
        $skills = [];

        foreach (Skill::all() as $skill) {
            $skills[$skill->name] = $skill;
        }
        $app->skills = $skills;
    }
}
