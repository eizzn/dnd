<?php

namespace App\Models;

use App\Traits\HasCompositePrimaryKeyTrait;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\Pivot;

/**
 * Class GodPantheonWorshipClass
 *
 * @property int god_id
 * @property int pantheon_id
 * @property int class_id
 * @property int multiclass_group
 * @property string|null meta
 * @property bool is_clergy
 * @property Klass klass
 */
class GodPantheonWorshipClass extends Pivot
{
    use HasCompositePrimaryKeyTrait;

    public $incrementing = false;
    public $primaryKey   = ['god_id', 'pantheon_id', 'class_id', 'multiclass_group'];
    protected $table     = 'god_worship_class';

    public function klass(): HasOne
    {
        return $this->hasOne(Klass::class, 'id', 'class_id');
    }
}
