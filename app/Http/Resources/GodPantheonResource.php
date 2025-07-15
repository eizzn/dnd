<?php

namespace App\Http\Resources;

use App\Models\GodPantheon;
use App\Models\GodPantheonClass;
use App\Models\GodPantheonWorshipClass;
use App\Models\GodPiety;
use Illuminate\Http\Resources\Json\JsonResource;

class GodPantheonResource extends JsonResource
{
    public function toArray($request): array
    {
        /** @var GodPantheon $this */
        return [
            'id'              => $this->god_id,
            'pantheon'        => [
                'id'        => $this->pantheon_id,
                'name'      => $this->pantheon->name,
            ],
            'name'            => $this->name,
            'title'           => $this->title,
            'level'           => $this->level,
            'aliases'         => $this->aliases,
            'portfolio'       => $this->portfolio,
            'alignment'       => $this->alignment,
            'symbol'          => $this->symbol,
            'favored_weapon'  => $this->favored_weapon,
            'regions'         => $this->regions,
            'description'     => $this->description,
            'master'          => new SimpleGodPantheonResource(GodPantheon::where('god_id', $this->master_id)->where('pantheon_id', $this->pantheon_id)->first()),
            'servants'        => GodPantheon::where('master_id', $this->god_id)->where('pantheon_id', $this->pantheon_id)->get()->map(function (GodPantheon $god) {
                return new SimpleGodPantheonResource($god);
            }),
            'classes'         => GodPantheonClass::where('god_id', $this->god_id)->where('pantheon_id', $this->pantheon_id)->with('klass')->get()->map(function (GodPantheonClass $class) {
                return [
                    'id'    => $class->class_id,
                    'name'  => $class->klass->name,
                    'level' => $class->level,
                    'meta'  => $class->meta,
                ];
            }),
            'worship_classes' => GodPantheonWorshipClass::where('god_id', $this->god_id)->where('pantheon_id', $this->pantheon_id)->with('klass')->get()->map(function (GodPantheonWorshipClass $class) {
                return [
                    'id'               => $class->class_id,
                    'name'             => $class->klass->name,
                    'multiclass_group' => $class->multiclass_group,
                    'meta'             => $class->meta,
                ];
            }),
            'piety'           => GodPiety::where('god_id', $this->god_id)->where('pantheon_id', $this->pantheon_id)
                ->get()->first(function (GodPiety $piety) {
                    return [
                        'favor'      => $piety->favor,
                        'devotion'   => $piety->devotion,
                        'earn_piety' => $piety->earn_piety,
                        'lose_piety' => $piety->lose_piety,
                        'piety3'     => $piety->piety3,
                        'piety10'    => $piety->piety10,
                        'piety25'    => $piety->piety25,
                        'piety50'    => $piety->piety50,
                    ];
                }),
        ];
    }
}
