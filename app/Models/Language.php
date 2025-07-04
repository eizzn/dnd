<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * Class Language
 *
 * @property int         id
 * @property string      name
 * @property string      type
 * @property string|null description
 * @property int|null    alphabet_id
 * @property string|null family
 * @property string|null local
 * @property string|null speakers
 * @property Alphabet alphabet
 */
class Language extends Model
{
    public $timestamps = false;

    public function alphabet(): BelongsTo
    {
        return $this->belongsTo(Alphabet::class);
    }
}
