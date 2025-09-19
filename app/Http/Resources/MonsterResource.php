<?php

namespace App\Http\Resources;

use App\Models\Attribute;
use App\Models\ClassPowerMeta;
use App\Models\ClassSpellSlot;
use App\Models\Feat;
use App\Models\Feature;
use App\Models\Klass;
use App\Models\Language;
use App\Models\Monster;
use App\Models\Power;
use App\Models\Skill;
use App\Models\Spell;
use App\Models\Talent;
use App\Models\Type;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class MonsterResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        /** @var Monster $this */
        return [
            'id'               => $this->id,
            'name'             => $this->name,
            'size'             => $this->size,
            'type'             => $this->type,
            'alignment'        => $this->alignment,
            'armor_class'      => $this->armor_class,
            'damage_reduction' => $this->damage_reduction,
            'hit_dice'         => $this->hit_dice,
            'hit_points'       => $this->hit_points,
            'speed'            => $this->speed,
            'str'              => $this->str,
            'dex'              => $this->dex,
            'con'              => $this->con,
            'int'              => $this->int,
            'wis'              => $this->wis,
            'cha'              => $this->cha,
            'cr'               => $this->cr,
            'proficiency'      => $this->proficiency,
            'to_hit_melee'     => $this->to_hit_melee,
            'to_hit_range'     => $this->to_hit_range,
            'actions'          => $this->actions,
            'description'      => $this->description,
            'types'            => $this->types->map(function (Type $type) {
                return [
                    'id'   => $type->id,
                    'name' => $type->name,
                ];
            }),
            'classes'          => $this->classes()->with(['features', 'feats', 'spell_slots', 'power_slots'])
                ->get()
                ->map(function (Klass $class) {
                    return [
                        'id'          => $class->id,
                        'name'        => $class->name,
                        'has_spells'  => $class->has_spells,
                        'has_powers'  => $class->has_powers,
                        'level'       => $class->pivot->level,
                        'max_level'   => $class->pivot->level,
                        'features'    => $class->features->where('pivot.level', '<=', $class->pivot->level)
                            ->groupBy('pivot.level')->map(function ($features, $level) {
                                return $features->map(function (Feature $feature) {
                                    return [
                                        'id'           => $feature->id,
                                        'key'          => $feature->key,
                                        'name'         => $feature->name,
                                        'requirements' => $feature->requirements,
                                        'description'  => $feature->description,
                                        'level'        => $feature->pivot->level,
                                        'meta'         => $feature->pivot->meta,
                                    ];
                                });
                            }),
                        'feats'       => $class->feats->where('pivot.level', '<=', $class->pivot->level)
                            ->sortBy('name')->sortBy('pivot.level')
                            ->values()->map(function (Feat $feat) {
                                return [
                                    'id'          => $feat->id,
                                    'name'        => $feat->name,
                                    'description' => $feat->description,
                                    'level'       => $feat->pivot->level,
                                ];
                            }),
                        'spell_slots' => $class->spell_slots->where('level', '<=', $class->pivot->level)
                            ->mapWithKeys(function (ClassSpellSlot $slot) {
                                return [
                                    $slot->level => [
                                        'level'          => $slot->level,
                                        'known'          => $slot->known,
                                        'preparable'     => $slot->preparable,
                                        'cantrips'       => $slot->cantrips,
                                        'slots'          => $slot->slots,
                                        'zero'           => $slot->zero,
                                        'one'            => $slot->one,
                                        'two'            => $slot->two,
                                        'three'          => $slot->three,
                                        'four'           => $slot->four,
                                        'five'           => $slot->five,
                                        'six'            => $slot->six,
                                        'seven'          => $slot->seven,
                                        'eight'          => $slot->eight,
                                        'nine'           => $slot->nine,
                                        'max_slot_level' => $slot->max_slot_level,
                                    ],
                                ];
                            }),
                        'power_metas' => $class->power_slots->where('level', '<=', $class->pivot->level)
                            ->mapWithKeys(function (ClassPowerMeta $slot) {
                                return [
                                    $slot->level => [
                                        'level'           => $slot->level,
                                        'points'          => $slot->points,
                                        'known'           => $slot->known,
                                        'max_level_power' => $slot->max_level_power,
                                    ],
                                ];
                            }),
                    ];
                }),
            'features'            => $this->features->map(function (Feature $feature) {
                return [
                    'id'          => $feature->id,
                    'key'         => $feature->key,
                    'name'        => $feature->name,
                    'description' => $feature->description,
                    'meta'        => $feature->pivot->meta,
                ];
            }),
            'feats'               => $this->feats->map(function (Feat $feat) {
                return [
                    'id'          => $feat->id,
                    'name'        => $feat->name,
                    'description' => $feat->description,
                ];
            }),
            'talents'             => $this->talents->map(function (Talent $talent) {
                return [
                    'id'          => $talent->id,
                    'name'        => $talent->name,
                    'description' => $talent->description,
                    'level'       => $talent->pivot->level,
                    'meta'        => $talent->pivot->meta,
                ];
            }),
            'skills'              => $this->skills->map(function (Skill $skill) {
                return [
                    'id'   => $skill->id,
                    'name' => $skill->name,
                    'dc'   => $skill->pivot->dc,
                    'meta' => $skill->pivot->meta,
                ];
            }),
            'saves'               => $this->saves->map(function (Attribute $attr) {
                return [
                    'id'    => $attr->id,
                    'name'  => $attr->name,
                    'level' => $attr->pivot->level,
                    'meta'  => $attr->pivot->meta,
                ];
            }),
            'spells'              => $this->spells->map(function (Spell $spell) {
                return [
                    'id'    => $spell->id,
                    'name'  => $spell->name,
                    'level' => $spell->pivot->bonus,
                    'meta'  => $spell->pivot->meta,
                ];
            }),
            'powers'              => $this->powers->map(function (Power $power) {
                return [
                    'id'    => $power->id,
                    'name'  => $power->name,
                    'level' => $power->pivot->level,
                    'meta'  => $power->pivot->meta,
                ];
            }),
            'languages'           => $this->languages->map(function (Language $lang) {
                return [
                    'id'          => $lang->id,
                    'name'        => $lang->name,
                    'meta'        => $lang->pivot->meta,
                ];
            }),
        ];
    }
}
