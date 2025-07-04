<?php

namespace App\Models;

use App\Traits\Attributable;
use App\Traits\FeatableTrait;
use App\Traits\SkillableTrait;
use App\Traits\TypeableTrait;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * Class Talent
 *
 * @property int         id
 * @property string      name
 * @property string|null action_type
 * @property string|null requirement
 * @property string|null trigger
 * @property string      description
 * @property int|null    parent_id
 * @property Talent|null         parent
 * @property Collection|Talent[] children
 */
class Talent extends Model
{
    use Attributable, FeatableTrait, SkillableTrait, TypeableTrait;

    public $timestamps = false;
    protected $table   = 'talents';

    public function parent(): BelongsTo
    {
        return $this->belongsTo(Talent::class, 'parent_id');
    }

    public function children(): HasMany
    {
        return $this->hasMany(Talent::class, 'parent_id');
    }
}
