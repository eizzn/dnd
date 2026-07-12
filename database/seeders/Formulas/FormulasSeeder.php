<?php

namespace Database\Seeders\Formulas;

use Illuminate\Database\Seeder;

class FormulasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(AlchemicalFormulasSeeder::class);
        $this->call(SnareFormulaSeeder::class);
        $this->call(RuneFormulasSeeder::class);
        $this->call(PotionFormulaSeeder::class);
        $this->call(ItemFormulasSeeder::class);
        $this->call(WandFormulaSeeder::class);
        $this->call(ConstructFormulasSeeder::class);
        $this->call(TattooFormulasSeeder::class);
        $this->call(GraftFormulasSeeder::class);
        $this->call(DrugFormulasSeeder::class);
        $this->call(PoisonFormulasSeeder::class);
        $this->call(WeaponFormulaSeeder::class);
        $this->call(RitualFormulaSeeder::class);
    }
}
