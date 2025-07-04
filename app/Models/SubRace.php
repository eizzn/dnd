<?php

namespace App\Models;

use App\Traits\TypeableTrait;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * Class SubRace
 *
 * @property int         id
 * @property string      name
 * @property int         race_id
 * @property string|null description
 * @property string|null regions
 * @property string|null benefits
 * @property Race|null race
 */
class SubRace extends Model
{
    use TypeableTrait;

    public $timestamps = false;

    public function race(): BelongsTo
    {
        return $this->belongsTo(Race::class);
    }
}
