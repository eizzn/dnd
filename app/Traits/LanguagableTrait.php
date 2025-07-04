<?php

namespace App\Traits;

trait LanguagableTrait
{
    public function languages()
    {
        return $this->morphToMany('App\Models\Language', 'languagable');
    }
}
