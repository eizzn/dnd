<?php

namespace App\Models;

use App\Traits\LocationableTrait;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\MorphTo;

/**
 * Class SubPlane
 *
 * @property int id
 * @property int parent_id
 * @property string name
 * @property string aliases
 * @property string natives
 * @property string gravity
 * @property string time
 * @property string description
 * @property int|null pantheon_id
 * @property MorphTo ruler
 */
class SubPlane extends Model
{
    use LocationableTrait;

    public $timestamps = false;

    public function plane(): BelongsTo
    {
        return $this->belongsTo(Plane::class, 'parent_id', 'id');
    }

    public function ruler(): MorphTo
    {
        return $this->morphTo('rulerable');
    }
}
