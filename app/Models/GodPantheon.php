<?php

namespace App\Models;

use App\Traits\HasCompositePrimaryKeyTrait;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\Pivot;

/**
 * Class GodPantheon
 *
 * @property int god_id
 * @property int pantheon_id
 * @property string name
 * @property string|null title
 * @property string|null level
 * @property string|null aliases
 * @property string|null portfolio
 * @property string|null alignment
 * @property string|null symbol
 * @property string|null favored_weapon
 * @property string|null regions
 * @property int|null master_id
 * @property string|null description
 */
class GodPantheon extends Pivot
{
    use HasCompositePrimaryKeyTrait;

    public $incrementing = false;
    public $primaryKey   = ['god_id', 'pantheon_id'];
    protected $table     = 'god_pantheon';

    public function pantheon(): HasOne
    {
        return $this->hasOne(Pantheon::class, 'id', 'pantheon_id');
    }
}
