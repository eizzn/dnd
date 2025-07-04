<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class GodPiety
 *
 * @property int         god_id
 * @property int         pantheon_id
 * @property string|null favor
 * @property string|null devotion
 * @property string      earn_piety
 * @property string      lose_piety
 * @property string      piety3
 * @property string      piety10
 * @property string      piety25
 * @property string      piety50
 */
class GodPiety extends Model
{
    public $incrementing  = false;
    public $timestamps    = false;
    protected $table      = 'god_pieties';
    protected $primaryKey = ['god_id', 'pantheon_id'];
}
