<?php

namespace App\Http\Resources;

use App\Models\GodPantheon;
use App\Models\GodPantheonClass;
use App\Models\GodPantheonWorshipClass;
use Illuminate\Http\Resources\Json\JsonResource;

class GodPantheonResource extends JsonResource
{
    public function toArray($request): array
    {
        /** @var GodPantheon $this */
        return [
            'id'              => $this->god_id,
            'pantheon_id'     => $this->pantheon_id,
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
        ];
    }
}
