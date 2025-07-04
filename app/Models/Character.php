<?php

namespace App\Models;

use App\Traits\LanguagableTrait;
use App\Traits\PowerableTrait;
use App\Traits\SpellableTrait;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

/**
 * Class Character
 *
 * @property int id
 * @property string name
 * @property string|null description
 * @property int str
 * @property int dex
 * @property int con
 * @property int int
 * @property int wis
 * @property int cha
 * @property int sub_race_id
 * @property string alignment
 * @property array proficiencies
 * @property SubRace sub_race
 * @property Collection|Klass[] classes
 * @property Collection|Skill[] skills
 * @property Collection|Feature[] features
 * @property Collection|Feat[] feats
 */
class Character extends Model
{
    use LanguagableTrait, PowerableTrait, SpellableTrait;

    public $table      = 'characters';
    public $timestamps = false;
    protected $casts   = [
        'proficiencies' => 'array',
    ];

    // ORM
    public function sub_race(): BelongsTo
    {
        return $this->belongsTo(SubRace::class);
    }

    public function classes(): BelongsToMany
    {
        return $this->belongsToMany(Klass::class, 'character_class', 'class_id', 'character_id', 'id', 'id')
            ->withPivot(['character_level', 'level'])
            ->orderByPivot('character_level');
    }

    public function skills(): BelongsToMany
    {
        return $this->belongsToMany(Skill::class)
            ->withPivot(['level', 'specialization', 'value'])
            ->orderByPivot('level');
    }

    public function features(): BelongsToMany
    {
        return $this->belongsToMany(Feature::class)
            ->withPivot(['class_id', 'level'])
            ->orderByPivot('level');
    }

    public function feats(): BelongsToMany
    {
        return $this->belongsToMany(Feat::class)
            ->withPivot(['class_id', 'level'])
            ->orderByPivot('level');
    }
}
