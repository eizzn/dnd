<?php

namespace App\Traits;

use App\Models\Language;
use Illuminate\Database\Eloquent\Collection;

/**
 * Trait LanguagableTrait
 *
 * @property Language[]|Collection languages
 */
trait LanguagableTrait
{
    public function languages()
    {
        return $this->morphToMany(Language::class, 'languagable')
            ->withPivot(['meta']);
    }
}
