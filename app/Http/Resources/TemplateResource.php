<?php

namespace App\Http\Resources;

use App\Models\Template;
use App\Models\Type;
use Illuminate\Http\Resources\Json\JsonResource;

class TemplateResource extends JsonResource
{
    public function toArray($request): array
    {
        /** @var Template $this */
        return [
            'id'             => $this->id,
            'name'           => $this->name,
            'description'    => $this->description,
            'details'        => $this->details,
            'types'          => $this->types->map(function (Type $type) {
                return [
                    'id'   => $type->id,
                    'name' => $type->name,
                ];
            }),
        ];
    }
}
