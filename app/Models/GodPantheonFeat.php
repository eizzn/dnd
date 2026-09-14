<?php

namespace App\Models;

use App\Traits\HasCompositePrimaryKeyTrait;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\Pivot;

/**
 * @property int god_id
 * @property int pantheon_id
 * @property int feat_id
 * @property Feat feat
 */
class GodPantheonFeat extends Pivot
{
    use HasCompositePrimaryKeyTrait;

    public $incrementing = false;
    public $timestamps   = false;
    public $primaryKey   = ['god_id', 'pantheon_id', 'feat_id'];
    protected $table     = 'god_pantheon_feat';

    public function feat(): HasOne
    {
        return $this->hasOne(Feat::class, 'id', 'feat_id');
    }
}
