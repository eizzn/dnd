<?php

namespace App\Models;

use App\Traits\TypeableTrait;
use Illuminate\Database\Eloquent\Model;

/**
 * @property int id
 * @property string name
 * @property string|null creator
 * @property string description
 * @property string|null powers
 */
class Artifact extends Model
{
    use TypeableTrait;

    public $timestamps = false;
}
