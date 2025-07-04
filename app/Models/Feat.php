<?php

namespace App\Models;

use App\Traits\Attributable;
use App\Traits\FeatureableTrait;
use App\Traits\PowerableTrait;
use App\Traits\Propertyable;
use App\Traits\SkillableTrait;
use App\Traits\SpellableTrait;
use App\Traits\TalentableTrait;
use App\Traits\TypeableTrait;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

/**
 * Class Feat
 *
 * @property int         id
 * @property string      name
 * @property string|null action_type
 * @property string|null requirement
 * @property string|null trigger
 * @property string|null short_description
 * @property string      description
 * @property Feat|null              parent_feats
 * @property Collection|Feat[]      child_feats
 */
class Feat extends Model
{
    use Attributable, FeatureableTrait, PowerableTrait, Propertyable, SkillableTrait, SpellableTrait,
        TalentableTrait, TypeableTrait;

    public $timestamps = false;

    public function parent_feats(): BelongsToMany
    {
        return $this->belongsToMany(Feat::class, 'feat_feat', 'child_id', 'parent_id');
    }

    public function child_feats(): BelongsToMany
    {
        return $this->belongsToMany(Feat::class, 'feat_feat', 'parent_id', 'child_id');
    }
}
