<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * Class Page
 *
 * @property int    id
 * @property string name
 * @property string description
 * @property int    order
 * @property Collection|Rule[] rules
 */
class Page extends Model
{
    public $timestamps = false;

    public function rules(): HasMany
    {
        return $this->hasMany(Rule::class);
    }
}
