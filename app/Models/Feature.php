<?php

namespace App\Models;

use App\Traits\Propertyable;
use App\Traits\TypeableTrait;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphToMany;

/**
 * Class Feature
 *
 * @property int         id
 * @property string      key
 * @property string      name
 * @property string|null requirements
 * @property string      description
 */
class Feature extends Model
{
    use Propertyable, TypeableTrait;

    public $timestamps = false;

    public function classes(): MorphToMany
    {
        return $this->morphedByMany(Klass::class, 'featureable')
            ->withPivot(['meta']);
    }
}
