<?php

namespace Database\Seeders\Skills;

use Illuminate\Database\Seeder;

class SkillsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $app         = app();
        $app->skills = [];

        $this->call(SkillAcrobaticsSeeder::class);
        $this->call(SkillAnimalsSeeder::class);
        $this->call(SkillArcanaSeeder::class);
        $this->call(SkillAthleticsSeeder::class);
        $this->call(SkillCraftingSeeder::class);
        $this->call(SkillConcentrationSeeder::class);
        $this->call(SkillDeceptionSeeder::class);
        $this->call(SkillDiplomacySeeder::class);
        $this->call(SkillIntimidationSeeder::class);
        $this->call(SkillInvestigationSeeder::class);
        $this->call(SkillLanguageSeeder::class);
        $this->call(SkillLoreSeeder::class);
        $this->call(SkillMedicineSeeder::class);
        $this->call(SkillNatureSeeder::class);
        $this->call(SkillPerceptionSeeder::class);
        $this->call(SkillPerformanceSeeder::class);
        $this->call(SkillReligionSeeder::class);
        $this->call(SkillSocietySeeder::class);
        $this->call(SkillStealthSeeder::class);
        $this->call(SkillSurvivalSeeder::class);
        $this->call(SkillThieverySeeder::class);
    }
}
