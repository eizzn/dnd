<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Skill
 *
 * @property int         id
 * @property string      name
 * @property string      description
 * @property int         attribute_id
 * @property string|null untrained_uses
 * @property string|null trained_uses
 * @property int         armor_penalty
 * @property int         specified
 */
class Skill extends Model
{
    public $timestamps = false;
}
