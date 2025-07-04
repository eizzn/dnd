<?php

namespace App\Traits;

trait ClassablesTrait
{
    public function classes()
    {
        return $this->morphToMany('App\Models\Klass', 'classable', null, null, 'class_id')
            ->withPivot('type', 'meta');
    }
}
