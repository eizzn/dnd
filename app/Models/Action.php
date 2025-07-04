<?php

namespace App\Models;

use App\Traits\TypeableTrait;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Action
 *
 * @property int         id
 * @property string      key
 * @property string      name
 * @property string|null trigger
 * @property string|null requirements
 * @property string|null action_type
 * @property string      description
 * @property string|null success
 * @property string|null failure
 * @property string|null critical_success
 * @property string|null critical_failure
 */
class Action extends Model
{
    use TypeableTrait;

    public $timestamps = false;
}
