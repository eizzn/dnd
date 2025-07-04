<?php

namespace Database\Seeders\Materials;

use App\Models\Material;
use Illuminate\Database\Seeder;

class StoneMaterialsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $mat              = new Material;
        $mat->name        = 'Chalcedony';
        $mat->type        = 'Stone';
        $mat->price       = '50 gp';
        $mat->rarity      = 'Uncommon';
        $mat->description = '<p>A stone with a texture to ivory, these stones vary in color, tending to bright colors than dark ones.</p>';
        $mat->save();

        $mat         = new Material;
        $mat->name   = 'Granite';
        $mat->type   = 'Stone';
        $mat->rarity = 'Ubiquitous';
        $mat->save();

        $mat              = new Material;
        $mat->name        = 'Ignum';
        $mat->description = '<p>This black semi-translucent stone have some lava-like glowing and flowing inside of it</p>';
        $mat->type        = 'Stone';
        $mat->price       = '500 gp';
        $mat->weapon      = '<p>Used to craft Fire damage dealing weapons, such as the Flame Tongue</p>';
        $mat->save();

        $mat         = new Material;
        $mat->name   = 'Sand';
        $mat->type   = 'Stone';
        $mat->rarity = 'Common';
        $mat->save();

        $mat         = new Material;
        $mat->name   = 'Soil';
        $mat->type   = 'Earth';
        $mat->rarity = 'Ubiquitous';
        $mat->save();

        $mat              = new Material;
        $mat->name        = 'Obsidian';
        $mat->description = 'The black to deep purple glass-like stone is known to be very sharp';
        $mat->type        = 'Stone';
        $mat->price       = '250 gp';
        $mat->armor       = '<p>While wearing a medium or heavy armor (non hide) made with obsidian, when an enemy tries to grapple you, it takes 1D4 slashing damage</p>';
        $mat->weapon      = '<p>Used for crafting the Sword of Sharpness</p>';
        $mat->save();

        $mat       = new Material;
        $mat->name = 'Talcum';
        $mat->type = 'Clay';
        $mat->save();
    }
}
