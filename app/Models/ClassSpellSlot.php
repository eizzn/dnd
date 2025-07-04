<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class ClassSpellSlot
 *
 * @property int      class_id
 * @property int      level
 * @property int|null known
 * @property int|null preparable
 * @property int|null cantrips
 * @property int|null slots
 * @property int|null zero
 * @property int|null one
 * @property int|null two
 * @property int|null three
 * @property int|null four
 * @property int|null five
 * @property int|null six
 * @property int|null seven
 * @property int|null eight
 * @property int|null nine
 * @property int|null max_slot_level
 */
class ClassSpellSlot extends Model
{
    public $timestamps = false;
}
