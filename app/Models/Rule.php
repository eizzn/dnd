<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * Class Rule
 *
 * @property int    id
 * @property string key
 * @property string name
 * @property int    page_id
 * @property string description
 * @property int    order
 * @property Page page
 */
class Rule extends Model
{
    public $timestamps = false;

    public function page(): BelongsTo
    {
        return $this->belongsTo(Page::class);
    }
}
