<?php

namespace App\Models;

use App\Traits\HasCompositePrimaryKeyTrait;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\Pivot;

/**
 * Class GodPantheonClass
 *
 * @property int god_id
 * @property int pantheon_id
 * @property int class_id
 * @property int level
 * @property string|null meta
 */
class GodPantheonClass extends Pivot
{
    use HasCompositePrimaryKeyTrait;

    public $incrementing = false;
    public $primaryKey   = ['god_id', 'pantheon_id', 'class_id'];
    protected $table     = 'god_class';

    public function klass(): HasOne
    {
        return $this->hasOne(\App\Models\Klass::class, 'id', 'class_id');
    }
}
