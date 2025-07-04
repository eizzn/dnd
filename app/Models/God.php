<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class God
 *
 * @property int         id
 * @property string      name
 * @property string      level
 * @property string|null sub_level
 * @property string|null description
 * @property Carbon|null deleted_at
 * @property Collection|Pantheon[] pantheons
 * @property Collection|Klass[]    classes
 * @property Collection|Klass[]    worship_classes
 * @property GodPiety|null         piety
 */
class God extends Model
{
    use SoftDeletes;

    public $timestamps = false;

    public function pantheons(): BelongsToMany
    {
        return $this->belongsToMany(Pantheon::class)
            ->withPivot(['name', 'title', 'level', 'portfolio', 'alignment', 'symbol', 'favored_weapon', 'master_id', 'description']);
    }

    public function classes(): BelongsToMany
    {
        return $this->belongsToMany(Klass::class, 'god_class', 'god_id', 'class_id')
            ->withPivot(['level', 'meta']);
    }

    public function worship_classes(): BelongsToMany
    {
        return $this->belongsToMany(Klass::class, 'god_worship_class', 'god_id', 'class_id')
            ->withPivot(['multiclass_group', 'meta']);
    }

    public function piety(): HasMany
    {
        return $this->hasMany(GodPiety::class, 'god_id');
    }
}
