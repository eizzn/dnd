<?php

namespace App\Http\Resources;

use App\Models\Attribute;
use App\Models\ClassPowerMeta;
use App\Models\ClassSpellSlot;
use App\Models\Feat;
use App\Models\Feature;
use App\Models\Klass;
use App\Models\Power;
use App\Models\Skill;
use App\Models\Spell;
use App\Models\Type;
use Illuminate\Http\Resources\Json\JsonResource;

class ClassResource extends JsonResource
{
    public function toArray($request): array
    {
        /** @var Klass $this */
        return [
            'id'             => $this->id,
            'name'           => $this->name,
            'type'           => $this->type,
            'key_attribute'  => $this->key_attribute,
            'hit_dice'       => $this->hit_dice,
            'skill_points'   => $this->skill_points,
            'skill_progress' => $this->skill_progress,
            'armors'         => $this->armors,
            'weapons'        => $this->weapons,
            'has_spells'     => $this->has_spells,
            'has_powers'     => $this->has_powers,
            'description'    => $this->description,
            'requirements'   => $this->requirements,
            'max_level'      => $this->max_level,
            'saves'          => $this->saves->map(function (Attribute $attr) {
                return [
                    'id'    => $attr->id,
                    'attr'  => $attr->attr,
                    'name'  => $attr->name,
                ];
            }),
            'types'          => $this->types->map(function (Type $type) {
                return [
                    'id'   => $type->id,
                    'name' => $type->name,
                ];
            }),
            'skills'         => $this->skills->map(function (Skill $skill) {
                return [
                    'id'   => $skill->id,
                    'name' => $skill->name,
                ];
            }),
            'features'       => $this->features->groupBy('pivot.level')->map(function ($features, $level) {
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
            'feats'             => $this->feats->sortBy('name')->sortBy('pivot.level')
                ->values()->map(function (Feat $feat) {
                    return [
                        'id'          => $feat->id,
                        'name'        => $feat->name,
                        'description' => $feat->description,
                        'level'       => $feat->pivot->level,
                    ];
                }),
            'spell_slots'       => $this->spell_slots->mapWithKeys(function (ClassSpellSlot $slot) {
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
            'power_metas'         => $this->power_slots->mapWithKeys(function (ClassPowerMeta $slot) {
                return [
                    $slot->level => [
                        'level'           => $slot->level,
                        'points'          => $slot->points,
                        'known'           => $slot->known,
                        'max_level_power' => $slot->max_level_power,
                    ],
                ];
            }),
            'spells'              => $this->spells
                ->groupBy('pivot.level')
                ->sortKeys()
                ->sortBy('name')
                ->mapWithKeys(function ($spells, $level) {
                    return [
                        $level => $spells->map(function (Spell $spell) {
                            return [
                                'id'    => $spell->id,
                                'name'  => $spell->name,
                                'level' => $spell->pivot->level,
                                'meta'  => $spell->pivot->meta,
                            ];
                        })->values(),
                    ];
                }),
            'powers' => $this->powers
                ->groupBy('pivot.level')
                ->sortKeys()
                ->sortBy('name')
                ->mapWithKeys(function ($powers, $level) {
                    return [
                        $level => $powers->map(function (Power $power) {
                            return [
                                'id'    => $power->id,
                                'name'  => $power->name,
                                'level' => $power->pivot->level,
                                'meta'  => $power->pivot->meta,
                            ];
                        })->values(),
                    ];
                }),
        ];
    }
}
