<?php

namespace App\Models;

use App\Traits\TypeableTrait;
use Illuminate\Database\Eloquent\Model;

/**
 * Class SubSkill
 *
 * @property int         id
 * @property int         skill_id
 * @property string      name
 * @property string|null action_type
 * @property string|null trigger
 * @property string|null requirements
 * @property string      description
 * @property string|null success
 * @property string|null critical_success
 * @property string|null failure
 * @property string|null critical_failure
 * @property bool        trained_only
 */
class SubSkill extends Model
{
    use TypeableTrait;

    public $timestamps = false;
}
